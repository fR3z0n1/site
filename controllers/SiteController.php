<?php

include_once ROOT.'/models/Category.php';
include_once ROOT.'/models/Product.php';

class SiteController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $latesProducts = array();
        $latesProducts = Product::getLatesProducts(6);
        
        $productsRecommended = array();
        $productsRecommended = Product::getRecommendedProducts();
        
        require_once(ROOT. '/views/site/index.php');
        return true;
    }
    public function actionContact() {
        
        $userEmail = '';
        $userText = '';
        $result = false;
        
        if (isset($_POST['submit'])) {
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];
            
            $errors = false;
            
            //валидация полей
            
            if (!User::checkEmail($userEmail)){
                $errors[] = 'Неправильный email';
            }
            
            if ($errors == false) {
                $adminEmail = 'larryk1ng@yandex.ru';
                $subject = 'Тема письма';
                $message = "Текст сообщения: {$userText}. От {$userEmail}";
                $result = mail($adminEmail,$subject,$message);
                $result = true;
            }
        }
        
        /*$mail = "larryk1ng@yandex.ru";
        $subject = "Тема письма";
        $message = 'Текст сообщения';
        $result = mail($mail, $subject, $message);
        var_dump($result);*/
        
        require_once(ROOT. '/views/site/contact.php');
        return true;
    }
}
