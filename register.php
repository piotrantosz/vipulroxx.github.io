<?php
$url = 'https://api.sendgrid.com/';
$schoolname = $_POST['schoolname'];
$participant = $_POST['participant'];
$moderatorname = $_POST['moderatorname'];
$number = $_POST['number'];
$email = $_POST['email'];
//TODO change message
$message = "Data<br>Name: ".$firstname." ".$lastname."<br>Email: ".$email;
//TODO add all name of participants
$params = array(
    'api_user'  => "MegaTruck",
    'api_key'   => "#Crossktm1",
    'to'        => "vipulsharma936@gmail.com",
    'cc'        => "nachoel01@gmail.com",
    'subject'   => "New register",
    'html'      => $message,
    'text'      => $message,
    'from'      => "register@symbiosis.idk",
  );
$request =  $url.'api/mail.send.json';
// Generate curl request
$session = curl_init($request);
curl_setopt ($session, CURLOPT_POST, true);
curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($session);
curl_close($session);
header("refresh:0;url=/Registers.html");
?>
