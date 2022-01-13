<html>
	<head>
		<title> User Login and Registration </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        
	</head>

	<body>
	   
		<div class="container">
            <!--<video class="myVideo" autoplay muted loop ><source src="welcome.mp4" type="video/mp4"></video>-->
			<div class="login-box">
			<div class="row">
			
				<div class="col-md-6 login-left">
					<h2> Login Here </h2>
					<form action="validation.php" method="post"> 

						<div class="form-group">
							<label> Username </label>
							<input type="text" name="user" class="form-control" reqired>
						</div>

						<div class="form-group">
							<label> Password </label>
							<input type="password" name="password" class="form-control" reqired>
						</div>

						<button type="submit" class="btn btn-primary"> Login </button> 
					</form>
				</div>


				<div class="col-md-6 login-right">
					<h2> Register Here </h2>
					<form action="registration.php" method="post"> 

						<div class="form-group">
							<label> Username </label>
							<input type="text" name="user" class="form-control" reqired>
						</div>

						<div class="form-group">
							<label> Password </label>
							<input type="password" name="password" class="form-control" reqired>
						</div>

						<button type="submit" class="btn btn-primary"> Register </button> 
					</form>
				</div>

			</div>
			</div>
		</div>
	</body>
</html>