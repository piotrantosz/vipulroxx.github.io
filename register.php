<?php
require 'php-export-data.class.php';

$filename = uniqid(rand(), true) . '.xls';
$exporter = new ExportDataExcel('string');
$exporter->initialize();
$exporter->addRow(array('Input', 'Value'));
$exporter->addRow(array('School name', $_POST['schoolname']));
$exporter->addRow(array('Name of teacher', $_POST['moderatorname']));
$exporter->addRow(array('Number', $_POST['number']));
$exporter->addRow(array('Email', $_POST['email']));

for ($i=1; $i<=34; $i++) {
  $participant = array('Participant '.$i, $_POST['participant'.$i]);
  $exporter->addRow($participant);
}

$tmpfile = fopen("register_xls/".$filename, "w");
fwrite($tmpfile, $exporter->getString());
fclose($tmpfile);

$exporter->finalize();


$url = 'https://api.sendgrid.com/';
$user = 'ignauy';
$pass = 'symbiosis15';
$filePath = 'register_xls';

$params = array(
    'api_user'  => $user,
    'api_key'   => $pass,
    'to'        => 'vipulsharma936@gmail.com',
    'cc'        => 'nachoel01@gmail.com',
    'subject'   => 'New register from page',
    'html'      => 'XLS file attached.',
    'text'      => 'XLS file attached.',
    'from'      => 'contact@symbiosis15.net',
    'files['.$filename.']' => '@'.$filePath.'/'.$filename
  );

$request =  $url.'api/mail.send.json';

$session = curl_init($request);

curl_setopt ($session, CURLOPT_POST, true);
curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($session);
curl_close($session);


// I'm not sure if we want to remove the file after it's sent
// unlink($filename);
header('Location: /#register');
?>
