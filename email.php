<?php
$to = "avanshet@mail.ru";
  $subject = "Тема сообщения";
  $message = "Сообщение!";
  $headers = "Content-type: text/plain; charset=utf-8 \r\n";

if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(isset($_POST["username"]))
		{
			$name = trim(strip_tags($_POST["username"]));
		}
		if(isset($_POST["useremail"]))
		{
			$email  = trim(strip_tags($_POST["useremail"]));
		}
		if (isset( $_POST["usernumber"])) {
			$namber = trim(strip_tags($_POST["usernumber"]));
		}
	
			$message  = "<html>";
				$message  .= "<body>";
				$message  .= "Имя: ".$name;
				$message  .= "<br />";
				$message  .= "Почта: ".$email;
				$message  .= "<br />";
				$message  .= "Телефон: ".$number;
				$message  .= "</body>";
			$message  .= "</html>";
			
			mail ($to, $subject, $message, $headers);
}
else
{
	exit;
} 
?>