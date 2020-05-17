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

	$message = "Здравствуйте!<br /><br />У вас новая заявка с Вашего сайта.<br />Имя: <b>$name</b><br />Телефон: <b>$phone</b><br />Примечание: <b>$notice</b>";

	if (mail($to, $subject, $message))
	{
		header ("Location: index_v3_success.html");
	} else {
		header ("Location: index_v3_error.html");
	}
	exit;
?>