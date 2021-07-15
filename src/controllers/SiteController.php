<?php

    class SiteController {     
    
        public function actionIndex() {
            require_once(ROOT . '/views/index.php');

            return true;
        }

        public function actionContact() {
            require_once ROOT . '/mailer/PHPMailerAutoload.php';

            function checkName($name) {
                if (strlen($name) >= 2) {
                    return true;
                }
                return false;
            }

            function checkEmail($email) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    return true;
                }
                return false;
            }
    
            function checkSubject($sbj) {
                if (strlen($sbj) > 0) {
                    return true;
                }
                return false;
            }
            
            function checkMsg($msg) {
                if (strlen($msg) > 0) {
                    return true;
                }
                return false;
            }

            $usrName = '';
            $usrEmail = '';
            $usrSbj = '';
            $usrMsg = '';
            $result = false;

            if (isset($_POST['submit'])) {
                
                $usrName = $_POST['u_name'];
                $usrEmail = $_POST['u_email'];
                $usrSbj = $_POST['u_sbj'];
                $usrMsg = $_POST['u_msg'];
              
                $errors = false;
                            
                // Валидация полей
                if (!checkName($usrName)) {
                    $errors[] = 'The name must not be shorter than 2 characters';
                }
                
                if (!checkEmail($usrEmail)) {
                    $errors[] = 'Invalid email';
                }

                if (!checkSubject($usrSbj)) {
                    $errors[] = 'Subject cannot be empty';
                }
                
                if (!checkMsg($usrMsg)) {
                    $errors[] = 'Your message cannot be empty';
                }

                if (!$errors) {

                    $mail = new PHPMailer;
                    $mail->CharSet = 'utf-8';

                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'alexvictar@gmail.com';
                    $mail->Password = 'Ale20X10v19T1964_ex10';
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port = 465;
 
                    $mail->setFrom($usrEmail, $usrName);
                    $mail->addAddress('ruslan@kprutkov.ru');

                    $mail->isHTML(true);

                    $mail->Subject = $usrSbj;
                    $mail->Body = $usrMsg;

                    if(!$mail->send()) {
                        $result = false;
                    } else {
                        $result = true;
                    }
                    
                }

            }

            require_once(ROOT . '/views/contacts.php');
            
            return true;
        }

        public function actionAbout() {
            require_once(ROOT . '/views/about.php');
    
            return true;
        }
    
    }
?>
