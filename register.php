<?php
require 'php-export-data.class.php';
require 'sendgrid-php/sendgrid-php.php';

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
$sendgrid = new SendGrid('ignauy', 'symbiosis15');
$email = new SendGrid\Email();
$email
    ->addTo('vipulsharma36@gmail.com')
    ->addCC('nachoel01@gmail.com')
    ->setFrom('contact@symbiosis15.net')
    ->setSubject('New register from page.')
    ->setText('XLS file attached')
    ->setHtml('XLS file attached')
    ->addAttachment('register_xls/'.$filename, "register.xls", "file-cid")
;

$sendgrid->send($email);

// I'm not sure if we want to remove the file after it's sent
// unlink($filename);
header('Location: /?send=1#register');
?>
