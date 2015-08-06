<?php
if(isset($_POST['email'])) {
        // EDIT THE 2 LINES BELOW AS REQUIRED
//     $email_to = "jos@owncloud.com";

// for testing, send email to submitter of form. Note that spamfilters don't like this... check your spam folder!
    $email_to = $_POST['email'];

    $email_subject = "Your email subject line";
            function died($error) {

    // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['appdevurl']) ||
        !isset($_POST['appstoreurl']) ||
        !isset($_POST['collaborators']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.'); }

    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $appstoreurl = $_POST['appstoreurl']; // required
    $appdevurl = $_POST['appdevurl']; // required
    $collaborators = $_POST['collaborators']; // not required
    $comments = $_POST['comments']; // required
    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
    if(strpos($appstoreurl, 'apps.owncloud.com/') === false) {
    $error_message .= 'The App store URL you entered does not appear to be valid.<br />';
  }
    if(!filter_var($appdevurl, FILTER_VALIDATE_URL)) {
    $error_message .= 'The repository URL you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'You did not add any thoughts on why we should accept your app. <br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }

    $email_message = "Form details below.\n\n";
        function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "App store url: ".clean_string($appstoreurl)."\n";
    $email_message .= "Development repo: ".clean_string($appdevurl)."\n";
    $email_message .= "Other authors: ".clean_string($collaborators)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";

// create email headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers); ?>
<!-- include your own success html here -->
<div class="page-header">
	<h1>Thanks for submitting your app!</h1>
</div>
<p>Check your inbox for a confirmation email for your subscription to the <a href="https://mailman.owncloud.org/mailman/listinfo/appsreview">app review mailing list</a>. If you do not join the list, we can not work with you on getting your app approved.</p>
<p>Please take your addition to the app review mailing list as an invitation to help review other apps - as member of the ownCloud community (which you are by virtue of having developed an ownCloud app) your opinions are appreciated!</p>
<?php
}
?>