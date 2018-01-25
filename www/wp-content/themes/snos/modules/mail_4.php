<?php
 session_start();
 $recepient = strip_tags($_SESSION['e-mail']);
 $sitename = "snos.by";
 $name = trim($_POST["name"]);
 $phone = trim($_POST["phone"]);
 $email = trim($_POST["email"]);
 $comments = trim($_POST["comments"]);
 $message = "Имя: $name \nТелефон: $phone\nПочтовый ящик: $email\nКомментарии: $comments";
 $pagetitle = "Онлайн форма заказа через контакты с сайта: \"$sitename\"";
 $from_email="webmaster@snos.by";
 mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $from_email", "-f $from_email"); 