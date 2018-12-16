<?php
    header("Content-Type:text/html; charset=utf-8") ;
    require_once 'db_config.php' ;
    require 'vendor/autoload.php' ;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    $con = mysqli_connect(host, username, password, dbname) or die("Error " . mysqli_error($con)) ;

    $appointment = $_REQUEST['appointment'] ;
    $people = $_REQUEST['people'] ;
    $email = $_REQUEST['email'] ;
    $events = $_REQUEST['events'] ;
    $datepicker = $_REQUEST['datepicker'] ;
    $salutation = $_REQUEST['salutation'] ;
    mysqli_query($con, "SET NAMES UTF8") ;
    mysqli_query($con, "INSERT INTO information(names, people, email, content, dates, intime) VALUES('$appointment', '$people', '$email', '$events', '$datepicker', '$salutation')") ;

    $mail = new PHPMailer(true) ;                              
    try {  
        $mail->SMTPDebug = 1 ;                                 
        $mail->isSMTP() ;                                      
        $mail->Host = 'smtp.gmail.com' ;  
        $mail->SMTPAuth = true ;                               
        $mail->Username = 'Your Email' ;                 
        $mail->Password = 'Your Email Password' ;                           
        $mail->SMTPSecure = 'tls' ;                          
        $mail->Port = 587 ;

        $mail->setFrom('System Email', 'System') ;
        $mail->addAddress($email) ;
        $mail->addAddress('Your Email') ;

        $mail->isHTML(true) ;                                  
        $mail->Subject = 'Your appointment has been send ! ' ;
        $mail->Body    = "您預約的人有" . $appointment . "，" . "預約人數為" . $people . "，" . "預約的時間為" . $datepicker . " "
        . $salutation . "，" . "預約事由： " . $events . " ，本人將盡快回覆您的預約，本人回覆才算預約成功，謝謝。" ;

        $mail->send() ;
        echo " <script> alert('此信件已送出') ; location.href = './index.php' ; </script>" ;
        } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo ;
    }

?>