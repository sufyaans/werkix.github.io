<?php
if(!isset($POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $POST['Contact us: Name'];
$visitor_email = $POST['Contact us: Email'];
$message = $POST['Contact us: Message'];

//Validate first
// if(empty($name)||empty($visitor_email)) 
// {
//     echo "Name and email are mandatory!";
//     exit;
// }

// if(IsInjected($visitor_email))
// {
//     echo "Bad email value!";
//     exit;
// }

$email_from = 'sufyaanseedat1@gmail.com';//<== update the email address
$email_subject = "New Form submission";
$email_body = "Name: $name.\n".
"Email: $email. \n".
"Message: \n $message".
    
$to = "sufyaanseedat434@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
// function IsInjected($str)
// {
//   $injections = array('(\n+)',
//               '(\r+)',
//               '(\t+)',
//               '(%0A+)',
//               '(%0D+)',
//               '(%08+)',
//               '(%09+)'
//               );
//   $inject = join('|', $injections);
//   $inject = "/$inject/i";
//   if(preg_match($inject,$str))
//     {
//     return true;
//   }
//   else
//     {
//     return false;
//   }
// }
   
?> 