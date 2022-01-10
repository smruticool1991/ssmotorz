<!DOCTYPE html>
<html>
<head>
	<title>SSMOTORZ</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Popper JS -->
<!-- XZOOM JQUERY PLUGIN  -->
<style type="text/css">
	.main{
		width: 100%; 
		height: 100vh; 
		background-color: rgba(0,0,0,0.8); 
		position: absolute; 
		top: 0; 
		left: 0; 
		position: fixed; 
		z-index: 999;
		transition: 0.6s;
	}
	.child{
		width: 450px; 
		min-height: 380px; 
		position: absolute; 
		top: 50%; 
		left: 50%;
		border-radius: 10px; 
		padding: 20px; 
		transition: 0.6s;
	}
	.form{
		background-color: #e6e6e6; 
		border-radius: 50px;
	}
	.form1{
		background-color: #e6e6e6; 
		border-radius: 25px;
	}
	p{
		font-family: sans-serif;
		color: #51668a;
		margin-bottom: 4px;
	}
	h5{
	    font-size: 18px;
	    font-weight: 500;
	    color: #2d4f8c;
	}
	@media only screen and (max-width: 450px){
	    .child{
	        width: 90%;
	    }
	}
</style>
</head>
<body>
<div id="book_message" style="position: relative; z-index: 2000" class="d-none">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh;position: fixed; z-index: 2000;">
        <p class="display-4 text-center py-2 bg-success text-white" style="font-size: 30px;">Thanks for your Booking. Get in touch you shortly.</p>
    </div>
</div>   
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <!-- Brand -->
  <a class="navbar-brand ml-4" href="/"><img src="image/ss.png" class="img-fluid" style="width: 156px; height: 50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav ml-auto mr-5">
    <li class="nav-item">
      <a class="nav-link" href="/">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.php">About</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        E-Scooter
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="ipraiseplus.php">IPraise Plus</a>
        <a class="dropdown-item" href="praisepro.php">PraisePro</a>
        <a class="dropdown-item" href="ridgeplus.php">RidgePlus</a>
        <a class="dropdown-item" href="lite.php">Lite</a>
        <a class="dropdown-item" href="r30.php">R-30</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="message.php">Owners’ Message</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">Contact</a>
    </li>
  </ul>
</div>
</nav>
<div style="width: 100%; height: 400px; background-image: url(image/okinawa.jpg);background-position: top; background-repeat: no-repeat; background-size: cover;">
	
</div>