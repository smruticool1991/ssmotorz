<?php 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $number = $_POST['number'];
 $model = $_POST['model'];
 $address = $_POST['address'];
 $subject = "{$model} booked by {$name}";
$message = "
<html>
<head>
<title>Book Electric Bike</title>
</head>
<body>
<p>Book Electric Bike</p>
<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Number</th>
<th>Model</th>
<th>Address</th>
</tr>
<tr>
<td>{$name}</td>
<td>{$email}</td>
<td>{$number}</td>
<td>{$model}</td>
<td>{$address}</td>
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