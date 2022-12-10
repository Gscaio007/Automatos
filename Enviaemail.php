<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "gs.caio03@gmail.com";
    $to = "gs.caio03@gmail.com";
    $subject = "AUTOMATOS - Oferta";
    $message = "Obrigado por ter escolhido comprar seu carro na AUTOMATOS! Em breve um de nossos atendentes irá 
    oferecer as melhores ofertas para você andar de carro novo.";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "O email foi enviado, verifique a caixa de spam caso não encontrar.";
    
    header("location: obrigado.html");
?>