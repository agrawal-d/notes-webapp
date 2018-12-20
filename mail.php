<?php
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$email = $_GET['email'];
$id = $_GET['id'];

$to      = $email;
$subject = "Notes : Account activation for $fname $lname";
$message = "Hello $fname $lname ! Thanks you for creating your account at coderdx.ml/notes. To activate your account at coderdx.ml/notes please use this link http://www.coderdx.ml/notes/activate.php?id=id&trash=dvefersrfrgbfdgdfbbthrbrtb .";
$headers = 'From: contact@coderdx.cml' . "\r\n" .
    'Reply-To: divyanshu123@hotmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


mail($to, $subject, $message, $headers);

echo "Mail sent to $email";
?> 
