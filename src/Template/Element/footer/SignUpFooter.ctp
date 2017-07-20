<script>
	jQuery(document).ready(function(){
		jQuery("#signup-page").validate({
			rules: {
				fname: "required",
				lname: "required",
				password: {
					required: true,
					minlength: 5
				},
				conf_password: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true
				},
				employer: {
					required:true
				}
			},
			messages: {
				fname: "Please enter your firstname",
				lname: "Please enter your lastname",
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				conf_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				employer: {
					required: "Please enter your employer"
				},
				email: "Please enter a valid email address"
			},
			submitHandler: function() {
				//alert("submitted!");
				 form.submit()
			}
		});
	});
</script>
