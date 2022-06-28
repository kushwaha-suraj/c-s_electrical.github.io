<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Enquiry Form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var name 	= $('#name').val();
			var email	= $('#email').val();
			var mob 		= $('#mob').val();
			var location = $('#location').val();
			var product 	= $('#product').val();
			var message 	= $('#message').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {name: name,email: email,mob: mob,location: location,product: product, message: message},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
</body>
</html>