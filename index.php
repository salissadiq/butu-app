<?php  
error_reporting(0);
	require_once 'functions.php';
	if(loggedIn()) {
		header('location: dashboard');
	}
	
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
<link href="logo.png" rel="icon" type="image/jpg" />
<head>
	<title>BUTU Travel & Tours LTD</title>
	<style>
		body{
			background-image: url(lock.jpeg);
			background-size: cover;
			background-repeat: no-repeat;
		}
		.card{
			background-color: rgba(255, 255, 255, 0.8);
		}
	</style>
</head>
<body>
	<nav class="navbar bg-danger" style="color: white">
  		<a class="navbar-brand" ><i class="fa fa-plane"></i> Butu Travels & Tours LTD</a>
	</nav>

		<div class="container">
		<div class="row pt-5">
		  <div class="col-md-8 col-lg-4 col-sm-4 col-xs-4 mx-auto">
		  	<div id="feedback"></div>
		    <div class="card rounded-0">
		      <div class="card-header bg-danger">
		        <h3 class="mb-0 " style="color: white">Sign in here <i class="fa fa-lock"></i> </h3>
		      </div>
		      <div class="card-body">
		        <form class="form" method="post">
		          <div class="form-group">
		              <label for="username">Username</label>
		              <div class="input-group">
		                <div class="input-group-prepend rounded-0">
		                  <span class="input-group-text"><i class="fa fa-user"></i></span>
		                </div>
		                <input type="text" name="username" class="form-control rounded-0" id="username" placeholder="Username" required>
		              </div>
		          </div>

		          <div class="form-group">
		            <label for="password">Password</label>
		              <div class="input-group">
		                <div class="input-group-prepend rounded-0">
		                  <span class="input-group-text"><i class="fa fa-lock"></i></span>
		                </div>
		                <input type="password" name="password" class="form-control rounded-0" id="password" placeholder="Password" required>
		              </div>
		          </div>
		          <button type="button" id="signin" class="btn btn-outline-danger float-right rounded-0">Sign in <i class="fa fa-sign-in"></i></button>
		        </form>
		      </div>
		    </div>
		  </div>
		</div>
		</div>


<script src="jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
		$('#signin').click(function() {
			var username = $('#username').val()
			var password = $('#password').val()

			$.ajax({
				url: 'login.php',
				type: 'post',
				data: {username: username, password:password},
				success: function(data) {
					$('#feedback').html(data)
				}
			})
		})
	})
</script>
</body>
</html>