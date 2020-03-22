<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inventory Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
    form { 
       
        left: 20%;
        right: 20%;
        top: 30%;
       
        position: fixed;
        padding: 5%;
        margin:auto;
        }
        
    </style>
</head>


<body>
    <!--NAV BAR-->
	<nav class="navbar  sticky-top">
	<!--<img src="" alt="">-->
		<span id ="s1"  class="text-white"><h2>Inventory Management System</h2></span>
    </nav>
    
    <!--LOGIN FORM-->
	
	<h1 class="text-center">Login Form</h1>
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
                <center>
				<form action="validation.php" method="post">
				<div class="row">
					<div class="col-md-3">Email :
                    </div>
					<div class="form-group col-lg-9">
						<input type="text" class="form-control" id="email" placeholder="Type your email" name="email" required>
					</div>
					</div>
					<div class="row">
					<div class="col-md-3">Password :</div>
					<div class="form-group col-lg-9">
						<input type="password" class="form-control" id="password" placeholder="Type your password" name="password" required>
					</div>
					</div>
					<div>
                        <input class="btn text-white" id="login" type="submit" name="create" value="Login" href"#">  
                        <input class="btn text-white" id="login" type="submit" name="create" value="New User? Register" href="register1.php">
                    </div>
                    <a href=" ">Forgot Password?</a>
                </form>
            </center>
			</div>
            </div>
</body>
</html>