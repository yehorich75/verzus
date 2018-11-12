<?php
$recepient = "yegorich75@gmail.com";
$sitename = "Verzus";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$text = trim($_POST["text"]);
$message = "Name: $name \nPhone: $phone \nText: $text";

$pagetitle = "New message from site $sitename";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
