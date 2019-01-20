<!DOCTYPE html>
<html>
<head>
	<title>SMS | <?php echo $title; ?></title>

	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- boostrap theme -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.min.css">

	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="custom/css/custom.css">	

	<!-- jquery -->
	<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
	<!-- boostrap js -->
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>


<div class="col-md-6 col-md-offset-3 vertical-off-4">
	<div class="panel panel-default login-form">
	  	<div class="panel-body">
	  		<form method="post" action="index.php/users/login" id="loginForm">
		    	<fieldset>
		    		<legend>
		    			Login to Dashboard
		    		</legend>

		    		<div id="message"></div>

					<div class="form-group">
				    	<label for="username">Username</label>
				    	<input type="text" class="form-control" id="username" name="username" placeholder=" Enter Username" autofocus>
				  	</div>
				  	<div class="form-group">
				    	<label for="password">Password</label>
				    	<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
				  	</div>					  						 
				  	
				  	<button type="submit" class="col-md-3 btn btn-success login-button">Login</button>					
		    	</fieldset>
		    </form>
	  	</div>
	</div>
</div>

<script type="text/javascript" src="custom/js/login.js"></script>

</body>
</html>