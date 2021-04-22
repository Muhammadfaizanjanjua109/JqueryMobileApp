<!-- <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css"> -->
<link rel="stylesheet" href="validationcdn\site-demos.css">
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="validationcdn\jquery-1.11.1.min.js"></script>
	<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> -->
	<script src="validationcdn\jquery.validate.min.js"></script>
	<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script> -->
	<script src="validationcdn\additional-methods.min.js"></script>
<script>



jQuery.validator.setDefaults({
	  debug: true,
	  success: "valid"
	});
	$( "#okay" ).validate({
	  rules: {
		fname: {
		   required: true,
			minlength: 2
		},
		email: {
		  required: true,
		  email: true
		},
		age: {
		  required: true,
		  number: true,
         
		
		}
	  }
	});
</script>