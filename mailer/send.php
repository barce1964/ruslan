<?php
    //include_once 'functions.php';

    function checkName($name) {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    $name = '';
    $email = '';
    $msg = '';
    $result = false;

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
        
        $errors = false;
        
        if (!checkName($name)) {
            $errors[] = 'Имя не должно быть короче 2-х символов';
        }
        
        if (!checkEmail($email)) {
            $errors[] = 'Неправильный email';
        }
        
        if (!checkMsg($msg)) {
            $errors[] = 'Пароль не должен быть короче 8-ми символов';
        }
        
        print_r($errors);

        if ($errors == false) {
            $result = sendMsg($name, $email, $msg);
        }

    }

?>
