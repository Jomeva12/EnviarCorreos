
<?php
    ini_set( 'display_errors', 1 );
    $from = "perroconperrp@gmail.com";
    $to = "cincy.cantillo@aerooriente.com.co";
   
    $subject = "Felicidades!";
    $message = ' Has ganado una botella de Perro con perro, dale clic aquí para hacer efectivo tu premio';
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>