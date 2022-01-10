<?php 
 $name3 = $_POST['name3'];
 $email3 = $_POST['email3'];
 $number3 = $_POST['number3'];
 $sub3 = $_POST['subject3'];
 $mes3 = $_POST['message3'];
 echo $name3;
 $subject = "Contact Email From ssmotorz.in";
$message = "
<html>
<head>
<title>Contact</title>
</head>
<body>
<p>Contact Section Email</p>
<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Number</th>
<th>Subject</th>
<th>Message</th>
</tr>
<tr>
<td>{$name3}</td>
<td>{$email3}</td>
<td>{$number3}</td>
<td>{$sub3}</td>
<td>{$mes3}</td>
</tr>
</table>
</body>
</html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <info@ssmotorz.in>' . "\r\n";
mail('sales.ssmotorz@gmail.com', $subject, $message, $headers);
?>