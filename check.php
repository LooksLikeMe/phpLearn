<?php 
    $mail = $_POST['email'];
    $message = $_POST['massage'];
    $err = '';
    if(trim($email) == '') {
        $err = 'Введите ваш email';
    }
    else if ($message == '') {
        $err = 'Введите сообщение';
    }
    else if ($message < 10) {
        $err = 'Сообщение должно быть более 10 символов';
    }
    if($err!= '') {
        echo $err;
        exit;
    }
    $subject = '=?utf-8?B?'.base64_encode('Тестовое сообщение').'?=';
    $headers = 'From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n';
    mail('madenne39@gmail.com', $subject, $message, $headers);

    header('Location: about.php'); 
?>
