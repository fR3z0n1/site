<?php

class CabinetController {

    public function actionIndex() {

        $userId = User::checkLogged();

        $user = User::getUserById($userId);

        require_once ROOT . '/views/cabinet/index.php';

        return true;
    }

    public function actionEdit() {

        $userId = User::checkLogged();
        $user = User::getUserById($userId);

        $name = $user['name'];
        $password = $user['password'];
        
        $edit = false;
        
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть менее 5 символов<br>';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть менее 5 символов<br>';
            }
            if($errors == false)
            {
                $edit = User::edit($userId, $name, $password);
            }
        }
            require_once(ROOT . '/views/cabinet/edit.php');

            return true;
    }
}
