<?php
echo '<meta charset="utf-8" />';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

echo "Your name is: ".$firstname." ".$lastname." and your email is ".$email;
//header("refresh:1;url=/Registers.html");
?>
