<?php

/*
 * Админ контроллер. Главная страница в админ панеле
 */
class AdminController extends AdminBase {
    
    public function actionIndex() {
        //Проверка доступа
        self::checkAdmin();
        
        //Подключаем вид
        require_once (ROOT. '/views/admin/index.php');
        return true;
    }
}
