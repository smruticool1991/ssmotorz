<?php
include("header.php");
?>
<div id="index_message" style="position: relative; z-index: 2000" class="d-none">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh;position: fixed; z-index: 2000;">
        <p class="display-4 text-center py-2 bg-success text-white" style="font-size: 30px;">Thanks for your message. Get in touch you shortly.</p>
    </div>
</div>
<?php
if(!isset($_COOKIE['cookie_name1'])) {
?>
<div class="main" id="main">
	<!--<div style="width: 100%; position: absolute; top: 0px; left: 0px; z-index: 1000; position: fixed;" class="thank d-none bg-success">-->
	<!--<p class="text-center text-white display-4 py-1 " style="font-size: 30px;">Thanks for your Message.</p>-->
 <!--   </div>-->
	<div class="bg-white child">
		<h3 class="text-secondary">Get A Quote:</h3>
	  <form>
		<div class="form-group">
			<input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
			<p class="text-danger" id="error_name">* please enter your name.</p>
		</div>
		<div class="form-group">
			<input type="text" id="email" name="email" class="form-control" placeholder="Email">
			<p class="text-danger" id="error_email">* please enter your email address.</p>
		</div>
		<div class="form-group">
			<input type="number" id="number" name="number" class="form-control" placeholder="Mobile Number">
			<p class="text-danger" id="error_number">* please enter your mobile number</p>
		</div>
		<div class="form-group">
			<select class="form-control" name="model" id="model">
				<option selected disabled>--Electric Bike Model--</option>
				<option>Ipraise Plus</option>
				<option>PraisePro</option>
				<option>Ridge Plus</option>
				<option>Lite</option>
				<option>R30</option>
			</select>
			<p class="text-danger" id="error_model">* please select your bile</p>
		</div>
		<button class="btn btn-primary w-100 mt-3" id="submit10" name="submit">
          <span class="spinner-border spinner-border-sm d-none" id="spin"></span>
            Enquiry Now
        </button>
	  </form>	
	</div>
</div>
<?php
}
?>
<div style="background-color: #fff; background-size: cover; "></div>
<div class="container mt-4">
	<h4 class="text-secondary">Electric Scooters</h4>
	<p class="text-justify mb-3" style="font-weight: 400;">
	    S S Motorz is a authorized electric scooters dealer of Okinawa Autotech Pvt. Ltd that was established in 2018 with a mission to establish the business shall sincerely and faithfully work to each other .The E Vision concept is one of the most definitive and aspirational product by an Indian company “OKINAWA Autotech Private Limited” the Electric scooter Manufacturer to offer world class design, technology and drive the EV revolution to build a sustainable future.
	</p>
</div>
<div class="container">
	<div class="row mx-auto">
		<div class="col-lg-4 col-md-6 col-12 mb-4 text-center" style="border: 1px solid #f1f8f8; box-shadow: 1px 5px 5px 5px #eee, 1px 5px 5px 5px #eee;">
			<a href="ipraiseplus.php" > <img src="image/praiseplus.png" class="img-fluid"></a>
			
			<div class="d-flex form-group mt-4">
			    <h5 class="m-0">Model- IPraise Plus</h5>				
				<a href="ipraiseplus.php" class="ml-auto btn btn-danger btn-sm">More Details</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-12 mb-4 text-center" style="border: 1px solid #f1f8f8; box-shadow: 1px 5px 5px 5px #eee, 1px 5px 5px 5px #eee;">
			<a href="praisepro.php" > <img src="image/praisepro.png" class="img-fluid"></a>
			<div class="d-flex form-group mt-4">
				<h5 class="m-0">Model- praisepro</h5>
				<a href="praisepro.php" class="ml-auto btn btn-danger btn-sm">More Details</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-12 mb-4 text-center" style="border: 1px solid #f1f8f8; box-shadow: 1px 5px 5px 5px #eee, 1px 5px 5px 5px #eee;">
			<a href="ridgeplus.php" > <img src="image/ridgeplus.png" class="img-fluid"></a>
			<div class="d-flex form-group mt-4">
				<h5 class="m-0">Model- ridgeplus</h5>
				<a href="ridgeplus.php" class="ml-auto btn btn-danger btn-sm">More Details</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-12 mb-4 text-center" style="border: 1px solid #f1f8f8; box-shadow: 1px 5px 5px 5px #eee, 1px 5px 5px 5px #eee;">
			<a href="lite.php" > <img src="image/lite.png" class="img-fluid"></a>
			<div class="d-flex form-group mt-4">
				<h5 class="m-0">Model- Lite</h5>
				<a href="lite.php" class="ml-auto btn btn-danger btn-sm">More Details</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-12 mb-4 text-center" style="border: 1px solid #f1f8f8; box-shadow: 1px 5px 5px 5px #eee, 1px 5px 5px 5px #eee;">
			<a href="r30.php"> <img src="image/r30.png" class="img-fluid"></a>
			<div class="d-flex form-group mt-4">
				<h5 class="m-0">Model- R-30</h5>
				<a href="r30.php" class="ml-auto btn btn-danger btn-sm">More Details</a>
			</div>
		</div>		
	</div>	
</div>
<?php
include('footer.php');
?>
