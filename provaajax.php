<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>  
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script>
$(document).ready(function(){
    $("#usr").blur(function(){
     var username= $("#usr").val();
$.ajax({
    url: 'check.php',
    type: "POST",
    data: "nome="+username,
    success: function(response) {
  
        if(response== '0'){
		$("#usr").css("backgroundColor","green");
		}
		 if(response!='0'){
		$("#usr").css("backgroundColor","red");
		}}
		});
		return false;
		});
		})
</script>
</head>
<body>
<form action="login.php" method="post">
		     <div class="container-fluid">
			    <div class="indexaccesso row">
				  <div class="col-4">
				    <div class="form-group row">
					   <label for="usr" class="col-form-label">Username:</label>
					   <div>
					     <input name="usr" type="text" id="usr" class="form-control">
					   </div>
					</div>
				  </div>
				  <div class="col-4">
				    <div class="form-group row">
					   <label for="pwd" class="col-form-label">Password:</label>
					   <div>
					     <input name="pwd" type="password" id="pwd" class="form-control">
					   </div>
					</div>
				  </div>
				  
				  <div class="col-1">
				    <button type="submit" class="btn btn-warning">ACCEDI</button>
				  </div>
				  <div class="col-1">
					 <a href="registrazione.php"  class="btn btn-warning">REGISTRATI</a>
				  </div>
				</div>
			 </div>
		  </form>


</body>
</html>



