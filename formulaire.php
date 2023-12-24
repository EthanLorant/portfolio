<?php
 if {
      
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                   
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                  
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'ethanlorant@gmail.com';                  
    $mail->Password   = 'fomg izrw fujz jhwz';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port = 465;                                   

    
    $mail->setFrom($email, $objet);
    $mail->addAddress('ethan.lorant@sts-sio-caen.info'); 

    $mail->isHTML(true);
    $mail->Subject = $email;
    $mail->Body = $message;

    
    $mail->send();

    
    echo "Mail envoyé !";
    exit();
 }
?>