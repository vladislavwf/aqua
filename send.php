<?php
$tel = htmlspecialchars($_POST["tel"]);
$name = htmlspecialchars($_POST["name"]);
$square = htmlspecialchars($_POST["square"]);
$height = htmlspecialchars($_POST["height"]);
$material = htmlspecialchars($_POST["material"]);
$fuel = htmlspecialchars($_POST["fueltype"]);
$heating = htmlspecialchars($_POST["heating"]);


$to = "pavel@wf-agency.ru";
$headers = 'From: robot@ats2000.ru' . "\r\n" .
    'Reply-To: robot@ats2000.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$subject = '=?'."UTF-8".'?B?'. base64_encode("Заявка на подбор котла").'?=';


$message = "Заявка на подбор котла \r\n Имя: " . $name . "\r\n Телефон: " . $tel . "\r\n Площадь: " . $square . "\r\n Высота потолка: " . $height . "\r\n Материал дома: " . $material . "\r\n Вид топлива: " . $fuel . "\r\n Способ отопления: " . $heating;


mail($to, $subject, $message, $headers);
?>