<?php
if(!empty($_POST['telephone'] ))
{
$to = "directpack@yandex.ru";
$from = 'info@directpack.ru';
$subject = "Заявка Яндекс Директ";
$message = 'Имя: '.$_POST['name'].'; Тел: '.$_POST['telephone'].';';
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: <info@fotofor.me>\r\n";
$result = mail($to, $subject, $message, $headers);

    if ($result){ 
        echo "<p>Cообщение успешно отправленно. Пожалуйста, оставайтесь на связи</p>";
    }
    else{
        echo "<p>Cообщение не отправленно. Пожалуйста, попрбуйте еще раз</p>";
    }
}
else {
echo "<p>Обязательные поля не заполнены. Введите номер телефона</p>";
}
?>