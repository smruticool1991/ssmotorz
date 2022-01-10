<?php 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $number = $_POST['number'];
 $model = $_POST['model'];
 $subject = "Email From ssmotorz.in";
$message = "
<html>
<head>
<title>Enquiry</title>
</head>
<body>
<p>Enquiry</p>
<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Number</th>
<th>Model</th>
</tr>
<tr>
<td>{$name}</td>
<td>{$email}</td>
<td>{$number}</td>
<td>{$model}</td>
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