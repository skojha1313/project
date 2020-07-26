<?php
// Fetching Values from URL.
$name = $_POST['name'];
$email = $_POST['emailId'];
$message = $_POST['comment'];
$contact = $_POST['mobile'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing E-mail.
// After sanitization Validation is performed
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
if (!preg_match("/^([6789]{1})?([0-9]{9})$/", $contact)) {
echo "<span>* Please Fill Valid Contact No. *</span>";
} else {
$subject = "Query to  Galleria-108";
// To send HTML mail, the Content-type header must be set.

$headers = "MIME-Version: 1.0 \r\n" ;
$headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
$header.= "X-Priority: 1\r\n"; 
$headers .= 'From:' . "info@galleria108gurgaon.com"; // Sender's Email
$template = '<div style="padding:50px; color:black; letter-spacing:2px; font-size:14px;">Hello ' . $name . ',<br/>'
. '<br/>Thank you...! For Contacting Us.<br/><br/>'
. '<br/>We have received following information: <br/><br/>'
.  '<strong>Name: </strong>' . $name . '<br/>'
. '<strong>Email: </strong>' . $email . '<br/>'
. '<strong>Contact No: </strong>' . $contact . '<br/>'
. '<strong>Message: </strong>' . $message . '<br/><br/>'
. 'This is a Contact Confirmation mail.<br/><br/>'
. '<br/>'
. 'We Will contact You as soon as possible .<br/> You can also call us on 91-8448981411. </div>';
$sendmessage = '<div style="background-color:#7E7E7E; color:black;">' . $template . '</div>';
// Message lines should not exceed 70 characters (PHP rule), so wrap it.
$sendmessage = wordwrap($sendmessage, 70);
// Send mail by PHP Mail Function.
mail('info@reboi.in, reboi.shailender@gmail.com',$subject, $template, $headers);
echo "success";
}
} else {
echo "<span>* invalid email *</span>";
}
?>