<?php
if(isset($_POST['submit'])){
  $to = "1107487p@student.gla.ac.uk"; // this is your Email address
  $from = $_POST['email']; // this is the sender's Email address
  $name = $_POST['name'];
  $subject = "Form submission";
  $subject2 = "Copy of your form submission";
  $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
  $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];
  $copy = $_POST['copy'];
  $headers = "From:" . $from;
  $headers2 = "From:" . $to;
  $success = mail($to,$subject,$message,$headers);
  if(isset($copy)){
    mail($from,$subject2,$message2,$headers2);
  }
  if($success == true) {
    $result='<div class="alert alert-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><b> Success!</b> Form submitted. </div>';
  } else {
    $result='<div class="alert alert-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><b> Warning!</b>There was an error sending your message. Please try again later</div>';
  }
}
?>
