<?php 
    $fName = 'Имя: '.$_POST['ask-us-name'].' <br />';
    $fMail =  'Почта: '.$_POST['ask-us-email'].' <br />';
    $fMessage =  'Сообщение: '.$_POST['ask-us-text'].' <br />';
    $AllInOne =  $fName.$fMail.$fMessage;
    $to = 'n.ustinov93@gmail.com'; 
    $headers="From: Alexryabikov.ru <site@test.ru>\nReply-to:info@alexryabikov.ru\nContent-Type: text/html; charset=\"utf-8\"\n"; 
    // функция, которая отправляет наше письмо
    mail($to, 'Свяжитесь с нами', $AllInOne, $headers); 

?>