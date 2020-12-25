  $(function() {
  $("#formvalidato").validate({
    rules: {
    pawd: {
        required: true,
        minlength: 5
      }
	  email: {
        required: true,
        email: true
      }
       cemail: {
        required: true,
        cemail: true,equalTo:"#email"
      }
	 },
    messages: {
      email:{required:"mettila sta email",
      email: "Please enter a valid email address"
    }
	pawd:{required:"mettila password",
      pawd: "almeno 5"
    }
		},
    submitHandler: function(form) {
      form.submit();
    }
  });
});