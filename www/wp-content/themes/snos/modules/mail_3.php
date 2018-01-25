<?php
 session_start();
 $recepient = strip_tags($_SESSION['e-mail']);
 $sitename = "snos.by";
 $name = trim($_POST["name"]);
 $phone = trim($_POST["phone"]);
 $message = "Имя: $name \nТелефон: $phone";
 $pagetitle = "Заказ на бесплатную консультацию \"$sitename\"";
 $from_email="webmaster@snos.by";
 mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $from_email", "-f $from_email"); 