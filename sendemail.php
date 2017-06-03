<?php
require_once('recaptchalib.php'); 

 $secret  = "6Lf96iMUAAAAAFvvmhC4cckqA2Vc7qZtim8MnBmE";

 $post_data = http_build_query(
    array(
        'secret' => $secret,
        'response' => $_POST['g-recaptcha-response'],
        'remoteip' => $_SERVER['REMOTE_ADDR']
    )
);
 $opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $post_data
    )
);
$context  = stream_context_create($opts);
$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
$result = json_decode($response);
if (!$result->success) {
    // What happens when the CAPTCHA was entered incorrectly
    
    header('Location: http://jucar.com.ar?error=true&catchap=true');
    exit;
  } else {
  	$name =  $_POST['name'];
	$email =  $_POST['email'];
	$telefono =  $_POST['telefono'];
	$message =  $_POST['message'];
    // Your code here to handle a successful verification
  // the message
$msg = "Nombre  :".$name."<br> Email : ".$email."<br> Telefono :".$telefono."<br> Mensaje :".$message;

// use wordwrap() if lines are longer than 70 characters


// send email
  if(mail("alpinasjucar@gmail.com","Solicitud",$msg)){
    header('Location: http://jucar.com.ar?message=true');
    exit;
  }
  else {
     header('Location: http://jucar.com.ar?error=true&email=true');
  }
  }


?>