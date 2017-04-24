<?php
if(isset($_POST['email'])) {
    
    $email_to = "c.wilczewski@gmail.com";
    $email_subject = "EduHero";
    
    function died($error) {
        //error code
        
        echo "I'm sorry, something seems to have gone wrong!";
        echo "These errors appear below. <br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
    
    //validation expected data exists
    
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
    
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $subject_form = $_POST['subject']; // not required
    $message = $_POST['message']; // required

    
    //pls Chris figure out why dis dont work
    
    
//    $error_message = "";
//    $email_exp = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/";
//    
//  if(!preg_match($email_exp,$email_from)) {
//    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
//  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
    
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }

 
  if(strlen($message) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n"; 
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    } 
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Subject: ".clean_string($subject_form)."\n";
    $email_message .= "Comments: ".clean_string($message)."\n";
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  

 ?>

    <div>
        <h2>Thanks, we'll be in touch soon!</h2></div>

    <style>
        h2 {
            margin-top: 50px;
            color: #FFAB00;
            font-size: 2.4em;
        }
    </style>
    <?php
 
}

?>