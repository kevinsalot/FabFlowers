<?php
session_start();
$_SESSION['form_element0'] = $_POST['form_element0'];
$_SESSION['form_element1'] = $_POST['form_element1'];
$_SESSION['form_element2'] = $_POST['form_element2'];
$_SESSION['form_element3'] = $_POST['form_element3'];
$_SESSION['form_element4'] = $_POST['form_element4'];
$_SESSION['form_element5'] = $_POST['form_element5'];
$_SESSION['form_element6'] = $_POST['form_element6'];
$form_element0 = $_SESSION['form_element0'];
$form_element1 = $_SESSION['form_element1'];
$form_element2 = preg_replace("/\r/", "", $_SESSION['form_element2']);
$form_element2 = preg_replace("/\n/", "", $form_element2);
$form_element3 = $_SESSION['form_element3'];
$form_element4 = $_SESSION['form_element4'];
$form_element5 = preg_replace("/\r/", "", $_SESSION['form_element5']);
$form_element5 = preg_replace("/\n/", "", $form_element5);
$form_element6 = $_SESSION['form_element6'];
if(!$_SESSION['form_element0'] || !$_SESSION['form_element1'] || !$_SESSION['form_element4'] || !$_SESSION['form_element5'] || !$_SESSION['form_element6']) {
$_SESSION['formMessage'] = "		Please fill out all the required fields<br />Fields marked with * are required.\n";
Header("Location:../Contact.php");
exit();
} else {
$email="allie@fab-flowers.net";

//if (!eregi ("^([a-z0-9_]|\-|\.)+@(([a-z0-9_]|\-)+\.)+[a-z]{2,4}$", $email)) {
//unset($email);
//}

$from = stripslashes($form_element0)." <".stripslashes($form_element2).">";$subject= $form_element5;$message = "\nYour Name: $form_element0\n\nPreferred Contact Method: $form_element1\n\nYour Email: $form_element2\n\nYour Phone # (with area code): $form_element3\n\nEvent Date: $form_element4\n\nEvent Type: $form_element5\n\nRequested Services: $form_element6\n";
$headers="From: $from\n";if (file_exists($tmp_name)){
if(is_uploaded_file($tmp_name)){
$file = fopen($tmp_name,'rb');
$data = fread($file,filesize($tmp_name));
fclose($file);
$data = chunk_split(base64_encode($data));

}

$headers .= "MIME-Version: 1.0\n" .
"Content-Type: multipart/mixed;\n";
$headers .= " boundary=\"{$mime_boundary}\"";

$message = "This is a multi-part message in MIME format.\n\n" .
"--{$mime_boundary}\n" .
"Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" .
$message . "\n\n"; 

$message .= "--{$mime_boundary}\n" .
"Content-Type: {$type};\n" .
" name=\"{$name}\"\n" .
"Content-Transfer-Encoding: base64\n\n" .
$data . "\n\n" .
"--{$mime_boundary}--\n"; 
}

SESSION_UNREGISTER('form_element0');
SESSION_UNREGISTER('form_element1');
SESSION_UNREGISTER('form_element2');
SESSION_UNREGISTER('form_element3');
SESSION_UNREGISTER('form_element4');
SESSION_UNREGISTER('form_element5');
SESSION_UNREGISTER('form_element6');
//if (@mail($email, $subject, $message, $headers)) {$_SESSION["formMessage"] = "		".'Thank you, I will get in touch with you as soon as possible.'."
if (@mail($email, $subject, $message)) {$_SESSION["formMessage"] = "		".'Thank you, I will get in touch with you as soon as possible.'."
";
header("Location: ../Contact.php");
} else {
$_SESSION["formMessage"] = "I'm sorry, there seems to have been an error trying to send your email. Please try again.";
header("Location: ../Contact.php");
}
}
?>
