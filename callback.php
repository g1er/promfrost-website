<?php

	$name = $_POST['username'];
	$phone = $_POST['phone'];
	$notice = $_POST['notice'];

	$name = htmlspecialchars($name);
	$phone = htmlspecialchars($phone);
	$notice = htmlspecialchars($notice);

	$name = urldecode($name);
	$phone = urldecode($phone);
	$notice = urldecode($notice);

	$name = trim($name);
	$phone = trim($phone);
	$notice = trim($notice);

	$to = "delfin0207@mail.ru";
	$subject = "Новая заявка";
	$subject = "=?utf-8?B?".base64_encode($subject)."?=";
	$headers = "From: Progress-Tehno Klimat\r\nContent-type: text/html charset=utf-8\r\n";
	$message = "Здравствуйте!
	У вас новая заявка с Вашего сайта.
	
	Имя: $name
	Телефон: $phone
	Примечание: $notice";

	if (mail($to, $subject, $message))
	{
		header ("Location: index_success.html");
	} else {
		header ("Location: index_error.html");
	}
	exit;
?>