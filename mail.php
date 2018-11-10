<?php
$recepient = "yegorich75@gmail.com";
$sitename = "Site Name";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$message = "Name: $name \nPhone: $phone \nText: $text";

$pagetitle = 'New message from site \"$sitename\"';
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>