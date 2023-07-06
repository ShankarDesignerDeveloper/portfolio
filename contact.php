<?php
$name = $_REQUEST['Name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];

if(empty($name) || empty($email) || empty($message))
{
	echo "Please fill all the fields";
}
else
{
	mail("sankar.lbrce@gmail.com", "Response from Website", $message, " From: $name <$email>");
    echo "Message sent successfully";
}
?>