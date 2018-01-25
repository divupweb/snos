<?php
 session_start();
 $path_download=$_SESSION['path_download'];
 $attach = array($path_download);
 $sitename = "snos.by";
 $name = trim($_POST["name"]);
 $phone = trim($_POST["phone"]);
 $email = trim($_POST["email"]);
 $comments = trim($_POST["comments"]);
 $to = strip_tags($_SESSION['e-mail']);
 $subject = "Заказ на демонтаж по скидке 5% с сайта - \"$sitename\"";
 $text = "Имя: $name<br>Телефон: $phone<br>Почтовый ящик: $email<br>Комментарии: $comments<br>";
 $headers = "From: $sitename\r\n";
 $headers .= "Subject: $subject\r\n";
 $headers .= "Date: " . date("r") . "\r\n";
 $headers .= "X-Mailer: zm php script\r\n";
 $headers .= "MIME-Version: 1.0\r\n";
 $headers .= "Content-Type: multipart/alternative;\r\n";
 $baseboundary = "------------" . strtoupper(md5(uniqid(rand(), true)));
 $headers .= "  boundary=\"$baseboundary\"\r\n";

 $message  =  "--$baseboundary\r\n";
 $message .= "Content-Type: text/plain;\r\n";
 $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
 $message .= "--$baseboundary\r\n";
 $newboundary = "------------" . strtoupper(md5(uniqid(rand(), true)));
 $message .= "Content-Type: multipart/related;\r\n";
 $message .= "  boundary=\"$newboundary\"\r\n\r\n\r\n";
 $message .= "--$newboundary\r\n";
 $message .= "Content-Type: text/html; charset=utf-8\r\n";
 $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
 $message .= $text . "\r\n\r\n";

 foreach($attach as $filename)
 {
  $mimeType='image/png';
  $fileContent = file_get_contents($filename,true);
  $filename=basename($filename);
  $message.="--$newboundary\r\n";
  $message.="Content-Type: $mimeType;\r\n";
  $message.=" name=\"$filename\"\r\n";
  $message.="Content-Transfer-Encoding: base64\r\n";
  $message.="Content-ID: <$filename>\r\n";
  $message.="Content-Disposition: inline;\r\n";
  $message.=" filename=\"$filename\"\r\n\r\n";
  $message.=chunk_split(base64_encode($fileContent));
 }

 $message.="--$newboundary--\r\n\r\n";
 $message.="--$baseboundary--\r\n";
 $from_email='webmaster@snos.by';
 $result = mail($to, $subject, $message , $headers, "-f $from_email" );
 var_dump($result);
 unlink("$path_download");