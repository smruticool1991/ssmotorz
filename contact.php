<?php
include('header.php');
?>
<div id="con_message" style="position: relative; z-index: 2000">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh;position: fixed; z-index: 2000;">
        <p class="display-4 text-center py-2 bg-success text-white" style="font-size: 30px;">Thanks for your message. Get in touch you shortly.</p>
    </div>
</div>    
<div class="container py-4">
	 <h2 class="text-center mb-4">Contact Us</h2>
	<div class="row">
		<div class="col-md-6 col-12">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14962.461935188301!2d85.89358361839605!3d20.35749759940163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a190bd322ae411d%3A0xa1e0d144710d9d8b!2sOKINAWA%20S%20S%20MOTORZ!5e0!3m2!1sen!2sin!4v1604165087618!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
		<div class="col-md-6 col-12">
			 <h4 class="text-center mb-3">Send Us A Message</h4>
		     <form method="post" id="form3">	 
			 <div class="form-group">
			 	<input type="text" name="name3" id="name3" class="form-control form" placeholder="Name*">
			 	<p class="text-danger" id="error_name3">* please enter your name.</p>
			 </div>
			 <div class="form-group">
			 	<input type="email" name="email3" id="email3" class="form-control form" placeholder="Email">
			 	<p class="text-danger" id="error_email3">* please enter your email address.</p>
			 </div>
			 <div class="form-group">
			 	<input type="number" name="number3" id="number3" class="form-control form" placeholder="Number">
			 	<p class="text-danger" id="error_number3">* please enter your mobile number</p>
			 </div>
			 <div class="form-group">
			 	<input type="text" name="subject3" id="subject3" class="form-control form" placeholder="Subject">
			 	<p class="text-danger" id="error_subject3"> Min: 3 , max: 50 characters.</p>
			 </div>
			 <div class="form-group">
			 	<textarea type="text" name="message3" id="message3" class="form-control form1" placeholder="Message" rows="7"></textarea> 
			 	<p class="text-danger" id="error_message3"> Min: 5 , max: 100 characters.</p>
			 </div>
			 <div class="form-group text-center">
			 	<button name="submit3" id="submit3" type="submit" class="btn btn-primary px-5" style="border-radius: 50px;"><span class="spinner-border spinner-border-sm d-none" id="spin3"></span>Send Email</button>
			 </div>
			 </form>
		</div>
	</div>
</div>
<?php
include('footer.php');
?>