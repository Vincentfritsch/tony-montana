<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$company = $_POST['company'];
$adress = $_POST['adresse'];
$who = $_POST['who'];
$message = $_POST['message'];

echo "Hi $firstname $lastname I know where do come $company who stay in <strong>$adress</strong>  . You contact me because you are a $who and you want talk with me about <br>  $message";
?>
