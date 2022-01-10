<!--------modal1-------->
<div class="modal" id="myModal">
  <div class="modal-dialog mt-5">
    <div class="modal-content ">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Book <span id="model_value"></span></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      	<form method="post" id="form1">
        <div class="form-group">
        	<input type="name" name="name1" id="name1" class="form-control" placeholder="*Enter your name">
        	<p class="text-danger" id="error_name1">* please enter your name.</p>
        </div>
        <div class="form-group mt-2">
        	<input type="email" name="email1" id="email1" class="form-control" placeholder="Enter your email">
        	<p class="text-danger" id="error_email1">* please enter your email address.</p>
        </div>
        <div class="form-group mt-2">
        	<input type="name" name="number1" id="number1" class="form-control" placeholder="*Enter your mobile number">
        	<p class="text-danger" id="error_number1">* please enter your mobile number</p>
        </div>
        <div class="form-group mt-2">
        	<input type="hidden" name="model1" id="model1" class="form-control">
        </div>
        <div class="form-group mt-2">
        	<input type="textarea" name="address1" id="address1" class="form-control" placeholder="*Enter your address">
        	<p class="text-danger" id="error_address1">* please enter your address</p>
        </div>
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer mx-auto w-100">
        <button type="button" id="book" class="btn btn-success w-50 mx-auto"><span class="spinner-border spinner-border-sm d-none mr-2" id="book-spin"></span>BOOK NOW</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--------modal2-------->
<footer style="background-color: #e5e5e5;" class="p-3">
<p class="text-center p-0 m-0">© 2020 SSMOTORZ Developed By <span class="text-danger"><a href="http://digicover.co.in" target="_blank" class="text-danger text-decoration-none">Digicover Comunications Pvt. Ltd</a></span></p><p class="text-center p-0 m-0 mt-2">
	<a href="https://www.facebook.com/S-S-Motorz-103697391549055" target="_blank" class="pr-3 text-secondary"><i class="fa fa-facebook" style="font-size: 22px;"></i></a>
	<a href="#" class="pr-3 text-secondary"><i class="fa fa-twitter" style="font-size: 22px;"></i></a>
	<a href="#" class="pr-3 text-secondary"><i class="fa fa-linkedin" style="font-size: 22px;"></i></a>
	<a href="#" class="pr-3 text-secondary"><i class="fa fa-youtube" style="font-size: 22px;"></i></a>
	<a href="#" class="pr-2 text-secondary"><i class="fa fa-whatsapp" style="font-size: 22px;"></i></a>
</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script>
		$(document).ready(function(){
			    $('#error_name').hide();
				$('#error_email').hide();
				$('#error_number').hide();
				$('#error_model').hide();
			$('#submit10').on('click', function(event) {
				event.preventDefault();
				var name = $('#name').val();
				var email = $('#email').val();
				var number = $('#number').val();
				var model = $('#model').val();
				 var reg_name = /^[a-zA-Z ]{3,30}$/;
				 var reg_email = /^([a-zA-Z0-9_.]{2,30})+\@([a-zA-Z]{2,10})+\.([a-zA-Z]{2,10})$/;
				 var reg_number = /^[0-9]{10}$/;
				 $('#error_name').hide();
				 $('#error_email').hide();
				 $('#error_number').hide();
				 $('#error_model').hide();
				 if(!name.match(reg_name)) {
				 	$('#error_name').show();
			     }else if(!email.match(reg_email)){
                $('#error_email').show();
				 }else if(!number.match(reg_number)){
				 	$('#error_number').show();
				 }else if(model == null){
				 	$('#error_model').show();
				 }else{
				$.ajax({
					url: 'mail',
					type: 'post',
					data: {name: name, email: email, number: number, model: model},
					beforeSend: function(){
                       $('#spin').removeClass('d-none');
					},
					success: function(data){
						$('#spin').addClass('d-none');
					},
					complete: function(){
					    $('.main').addClass('d-none');
                       $('#index_message').removeClass('d-none').fadeIn(1000).fadeOut(3000);
                       document.cookie = "cookie_name1 = cookie_vale1";
					},
					error: function(){
					    alert('error in submit form!');
					}
				});
			   }
			});
			// modal1
 			    $('#error_name1').hide();
 				$('#error_email1').hide();
 				$('#error_number1').hide();
 				$('#error_address1').hide();
			$('#book').on('click', function(event) {
 				event.preventDefault();
 				var name = $('#name1').val();
 				var email = $('#email1').val();
 				var number = $('#number1').val();
 				var model = $('#model1').val();
 				var address = $('#address1').val();
 				var reg_name = /^[a-zA-Z ]{3,30}$/;
 				var reg_email = /^([a-zA-Z0-9_.]{2,30})+\@([a-zA-Z]{2,10})+\.([a-zA-Z]{2,10})$/;
 				var reg_number = /^[0-9]{10}$/;
 				var reg_address = /^[a-zA-z0-9, ]{3,50}$/;
 				$('#error_name1').hide();
 				$('#error_email1').hide();
 				$('#error_number1').hide();
 				$('#error_address1').hide();
 				if (!name.match(reg_name)) {
 					$('#error_name1').show();
				}else if(!email.match(reg_email)){
                     $('#error_email1').show();
 				}else if(!number.match(reg_number)){
 					$('#error_number1').show();
 				}else if(!address.match(reg_address)){
 					$('#error_address1').show();
 				}else{
 				$.ajax({
 					url: 'mail1',
					data: {name: name, email: email, number: number, model: model, address: address},
 					type: 'post',
 					beforeSend: function(){
                       $('#book-spin').removeClass('d-none');
 					},
 					success: function(data){
 						$('#book-spin').addClass('d-none');
                       $('#myModal').modal('hide');
                       $('#form1').trigger('reset');
 					},
 					complete: function(){
 					    $('#book_message').removeClass('d-none').fadeIn(1000).fadeOut(3000);
 					}
 				})
 			   }
 			});
 			//contact mail function
 			$('#con_message').hide();
 			$('#error_name3').hide();
 			$('#error_email3').hide();
 			$('#error_number3').hide();
 			$('#error_subject3').hide();
 			$('#error_message3').hide();
 			$('#submit3').on('click', function(event) {
 				event.preventDefault();
 				var name3 = $('#name3').val();
 				var email3 = $('#email3').val();
 				var number3 = $('#number3').val();
 				var subject3 = $('#subject3').val();
 				var message3 = $('#message3').val();
 				var reg_name = /^[a-zA-Z ]{3,30}$/;
 				var reg_email = /^([a-zA-Z0-9_.]{2,30})+\@([a-zA-Z]{2,10})+\.([a-zA-Z]{2,10})$/;
 				var reg_number = /^[0-9]{10}$/;
				var reg_subject = /^[a-zA-Z ]{3,50}$/;
 				var reg_message = /^[a-zA-Z0-9 ]{5,100}$/;
 				$('#error_name3').hide();
 			    $('#error_email3').hide();
 			    $('#error_number3').hide();
 			    $('#error_subject3').hide();
 			    $('#error_message3').hide();
 				if (!name3.match(reg_name)) {
 					$('#error_name3').show();
 				}else if(!email3.match(reg_email)){
                    $('#error_email3').show();
 				}else if(!number3.match(reg_number)){
 					$('#error_number3').show();
				}else if(!subject3.match(reg_subject)){
 					$('#error_subject3').show();
 				}else if(!message3.match(reg_message)){
 					$('#error_message3').show();
 				}else{
				$.ajax({
 					url: 'contact-mail',
 					data: {name3: name3, email3: email3, number3: number3, subject3: subject3, message3: message3},
 					type: 'post',
 					beforeSend: function(){
                       $('#spin3').removeClass('d-none');
 					},
 					success: function(data){
 					    console.log(data);
 					   $('#spin3').addClass('d-none');
                       $('#con_message').show().fadeOut(3000);
                       $('#form3').trigger('reset');
 					}
 				});
			   }
 			});
			
 			$('#modall').on('click', function(){
               $('#model_value').text('Ipraiseplus');
              $('#model1').val('Ipraiseplus');
			});
 			$('#modall1').on('click', function(){
               $('#model_value').text('PraisePro');
              $('#model1').val('praisepro');
 			});
			$('#modall2').on('click', function(){
               $('#model_value').text('RidgePlus');
              $('#model1').val('ridgeplus');
 			});
			$('#modall3').on('click', function(){
               $('#model_value').text('Lite');
               $('#model1').val('lite');
 			});
 			$('#modall4').on('click', function(){
               $('#model_value').text('R30');
               $('#model1').val('r30');
 			});
			$('#main').addClass('d-none');
			function slick(){
 				$('#main').removeClass('d-none').fadeIn('slow');
				$('.child').css('transform', 'translate(-50%, -50%)').fadeIn('slow');

 			}
 			setTimeout(slick , 1000);
			$('#image a').on('click', function(e){
 			e.preventDefault();
			var a = $(this).children('img').attr('src');
			$('#main-img').attr('src', a);

		  });
		})
	</script>
</body>
</html>