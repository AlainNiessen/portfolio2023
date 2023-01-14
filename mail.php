<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';

//tab for data transfer
$dataInfo = [];

//control of data
$error = false;

if(!empty($_POST)) {
    //récupération des données du formulaire    
    $get_name       = isset($_POST["name"])     ? filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS)     : null;
    $get_mail       = isset($_POST["email"])    ? filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS)    : null;
    $get_message    = isset($_POST["message"])  ? filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS)  : null; 
    $get_subject    = isset($_POST["subject"])  ? filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS)  : null; 
    $get_language   = isset($_POST["lang"])     ? filter_input(INPUT_POST, 'lang', FILTER_SANITIZE_SPECIAL_CHARS)     : null; 
} else {    
    $error = true;
}

if(empty($get_name) || empty($get_mail) || empty($get_message) || empty($get_subject) || !filter_var($get_mail, FILTER_VALIDATE_EMAIL)) {
    $error = true;
}

//in cas of no error => PhpMailer
if(!$error) {
   
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    //Server settings
                      
    $mail->IsSMTP();                                            //Send using SMTP
    
    $mail->Host = 'smtp.office365.com';                              //Set the SMTP server to send through              
    $mail->Port = 587;                                          //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`  
    $mail->SMTPAuth = true;  
    $mail->SMTPSecure = 'tls';                                //Enable SMTP authentication             
    $mail->CharSet = 'UTF-8';

                  
    $mail->Username   =  'alain_niessen@hotmail.com';           //SMTP username
    $mail->Password   =  'pbE9wDGU';                            //SMTP password
    $mail->SetFrom('alain_niessen@hotmail.com');                // When you're using SMTP from email services, they usually only allows you to send e-mails from your own address, not from any address)

    $mail->AddAddress('alain_niessen@hotmail.com');     
    $mail->addReplyTo($get_mail, $get_name);            

    $mail->FromName = 'Contact Portfolio';              

    $mail->Subject    =  'E-Mail from: '.$get_name.' - Subject: '.$get_subject;     //Subject
    $mail->WordWrap   = 50; 			                                            //Config caracter number
    $mail->Body = $get_message;                                                     // message
    $mail->AltBody = $get_message; 	                                                // message brut
    $mail->IsHTML(false);                                                           //using message brut


    if (!$mail->send()) {
        $dataInfo['errorCode'] = "1";
        switch ($get_language) {
            case "en": 
                $dataInfo['message'] = 'Message not send! Please try to contact me directly via "alain_niessen@hotmail.com"';
                break;
            case "fr": 
                $dataInfo['message'] =  'Message pas envoyé! S\'il vous plaît contactez moi directement via "alain_niessen@hotmail.com"';
                break;
            case "de":
                $dataInfo['message'] = 'Nachricht nicht gesendet! Bitte kontaktieren Sie mich direkt via "alain_niessen@hotmail.com"';
                break;
        }          
    } else{
        $dataInfo['errorCode'] = "0";
        switch ($get_language) {            
            case "en": 
                $dataInfo['message'] = 'Message send! I\'ll reply ASAP';
                break;
            case "fr": 
                $dataInfo['message'] = 'Message envoyé! Je répondrai au plus vite';
                break;
            case "de":
                $dataInfo['message'] =  'Nachricht gesendet! Ich werde so schnell wie möglich antworten';
                break;
        }        
    }
}

echo json_encode($dataInfo);

?>