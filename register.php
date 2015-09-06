<?php

if(isset($_POST['email'])) {

    $email_to = "swet1998@gmail.com";

    $email_subject = "Website Contact";


    function died($error) {

        // your error code can go here

        echo "We are very sorry, but there were error(s) found with the form you submitted. ";

        echo "These errors appear below.<br /><br />";

        echo $error."<br /><br />";

        echo "Please go back and fix these errors.<br /><br />";

        die();

    }



    // validation expected data exists

    if(!isset($_POST['schoolname']) ||

        !isset($_POST['moderatorname']) ||

        !isset($_POST['participant1']) ||
        !isset($_POST['participant2']) ||
        !isset($_POST['participant3']) ||
        !isset($_POST['participant4']) ||
        !isset($_POST['participant5']) ||
        !isset($_POST['participant6']) ||
        !isset($_POST['participant7']) ||
        !isset($_POST['participant8']) ||
        !isset($_POST['participant9']) ||
        !isset($_POST['participant10']) ||
        !isset($_POST['participant11']) ||
        !isset($_POST['participant12']) ||
        !isset($_POST['participant13']) ||
        !isset($_POST['participant14']) ||
        !isset($_POST['participant15']) ||
        !isset($_POST['participant16']) ||
        !isset($_POST['participant17']) ||
        !isset($_POST['participant18']) ||
        !isset($_POST['participant19']) ||
        !isset($_POST['participant20']) ||
        !isset($_POST['participant21']) ||
        !isset($_POST['participant22']) ||
        !isset($_POST['participant23']) ||
        !isset($_POST['participant24']) ||
        !isset($_POST['participant25']) ||
        !isset($_POST['participant26']) ||
        !isset($_POST['participant26']) ||

        !isset($_POST['number']) ||

        !isset($_POST['email'])) {

        died('We are sorry, but there appears to be a problem with the form you submitted.');

    }


    $schoolname = $_POST['schoolname'];
    $moderatorname = $_POST['moderatorname'];
    $participant1 = $_POST['participant1'];
    $participant2 = $_POST['participant2'];
    $participant3 = $_POST['participant3'];
    $participant4 = $_POST['participant4'];
    $participant5 = $_POST['participant5'];
    $participant6 = $_POST['participant6'];
    $participant7 = $_POST['participant7'];
    $participant8 = $_POST['participant8'];
    $participant9 = $_POST['participant9'];
    $participant10 = $_POST['participant10'];
    $participant11 = $_POST['participant11'];
    $participant12 = $_POST['participant12'];
    $participant13 = $_POST['participant13'];
    $participant14 = $_POST['participant14'];
    $participant15 = $_POST['participant15'];
    $participant16 = $_POST['$participant16'];
    $participant17 = $_POST['participant17'];
    $participant18 = $_POST['participant18'];
    $participant19 = $_POST['participant19'];
    $participant20 = $_POST['participant20'];
    $participant21 = $_POST['participant21'];
    $participant22 = $_POST['participant22'];
    $participant23 = $_POST['participant23'];
    $participant24 = $_POST['participant24'];
    $participant25 = $_POST['participant25'];
    $participant26 = $_POST['participant26'];
    $participant27 = $_POST['participant27'];
    $participant28 = $_POST['participant28'];
    $participant29 = $_POST['participant29'];
    $participant30 = $_POST['participant30'];
    $participant30 = $_POST['participant31'];
    $participant30 = $_POST['participant32'];
    $participant30 = $_POST['participant33'];
    $participant30 = $_POST['participant34'];
    $number = $_POST['number'];
    $email = $_POST['email'];


    $email_message = "Form details below.\n\n";



    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }



    $email_message .= "School Name: ".clean_string($schoolname)."\n";
    $email_message .= "Moderator Name: ".clean_string($moderatorname)."\n";
    $email_message .= "Participant Name: ".clean_string($participant1)."\n";
    $email_message .= "Participant Name: ".clean_string($participant2)."\n";
    $email_message .= "Participant Name: ".clean_string($participant3)."\n";
    $email_message .= "Participant Name: ".clean_string($participant4)."\n";
    $email_message .= "Participant Name: ".clean_string($participant5)."\n";
    $email_message .= "Participant Name: ".clean_string($participant6)."\n";
    $email_message .= "Participant Name: ".clean_string($participant7)."\n";
    $email_message .= "Participant Name: ".clean_string($participant8)."\n";
    $email_message .= "Participant Name: ".clean_string($participant9)."\n";
    $email_message .= "Participant Name: ".clean_string($participant10)."\n";
    $email_message .= "Participant Name: ".clean_string($participant11)."\n";
    $email_message .= "Participant Name: ".clean_string($participant12)."\n";
    $email_message .= "Participant Name: ".clean_string($participant13)."\n";
    $email_message .= "Participant Name: ".clean_string($participant14)."\n";
    $email_message .= "Participant Name: ".clean_string($participant15)."\n";
    $email_message .= "Participant Name: ".clean_string($participant16)."\n";
    $email_message .= "Participant Name: ".clean_string($participant17)."\n";
    $email_message .= "Participant Name: ".clean_string($participant18)."\n";
    $email_message .= "Participant Name: ".clean_string($participant19)."\n";
    $email_message .= "Participant Name: ".clean_string($participant20)."\n";
    $email_message .= "Participant Name: ".clean_string($participant21)."\n";
    $email_message .= "Participant Name: ".clean_string($participant22)."\n";
    $email_message .= "Participant Name: ".clean_string($participant23)."\n";
    $email_message .= "Participant Name: ".clean_string($participant24)."\n";
    $email_message .= "Participant Name: ".clean_string($participant25)."\n";
    $email_message .= "Participant Name: ".clean_string($participant26)."\n";
    $email_message .= "Participant Name: ".clean_string($participant27)."\n";
    $email_message .= "Participant Name: ".clean_string($participant28)."\n";
    $email_message .= "Participant Name: ".clean_string($participant29)."\n";
    $email_message .= "Participant Name: ".clean_string($participant30)."\n";
    $email_message .= "Participant Name: ".clean_string($participant31)."\n";
    $email_message .= "Participant Name: ".clean_string($participant32)."\n";
    $email_message .= "Participant Name: ".clean_string($participant33)."\n";
    $email_message .= "Participant Name: ".clean_string($participant34)."\n";
    $email_message .= "Phone Number of School: ".clean_string($number)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";


	// create email headers

	$headers = 'From: '.$email."\r\n".

	'Reply-To: '.$email."\r\n" .

	'X-Mailer: PHP/' . phpversion();

	@mail($email_to, $email_subject, $email_message, $headers);


?>



<!-- include your own success html here -->



Thank you for regesteration. Will be in touch with you very soon.



<?php

}

?>
