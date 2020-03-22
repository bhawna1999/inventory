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
</head>


<body>
    
    
	<nav class="navbar  sticky-top">
	<!--<img src="" alt="">-->
		<span id ="s1"  class="text-white"><h2 >Inventory Management System</h2></span>
    </nav>
	<section>
	<h3 class="text-center">Registration Form</h3>
	
		<div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">
				<form action="register.php" method="post">
					<div class="row">
					<div class="col-lg-3">First Name:</div>
					<div class="form-group col-lg-9">
						<input type="text" class="form-control" id="firstname" placeholder="Type your first name" name="firstname" required>
					</div>
					</div>
					<div class="row">
					<div class="col-lg-3">Last Name :</div>
					<div class="form-group col-lg-9">
						<input type="text" class="form-control" id="lastname" placeholder="Type your last name" name="lastname" required>
					</div>
					</div>
					<div class="row">
					<div class="col-lg-3">Email :</div>
					<div class="form-group col-lg-9">
						<input type="text" class="form-control" id="email" placeholder="Type your email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
					</div>
					</div>
					<div class="row">
					<div class="col-lg-3">Contact :</div>
					<div class="form-group col-lg-9">
						<input type="text" class="form-control" id="phonenumber" placeholder="Type your phone number" name="phonenumber" required>
					</div>
					</div>
					<div class="row">
					<div class="col-lg-3">Category:</div>
					<div class="form group col-lg-9">
						<input type="radio" id="keeper" name="category" value=" Store Keeper">
						<label for="keeper">Store Keeper</label><br>
						<input type="radio" id="incharge" name="category" value="Store Incharge">
						<label for="incharge">Store Incharge</label><br>
						<input type="radio" id="deo" name="category" value="DEO (Data Entry Operator)">
						<label for="deo">DEO (Data Entry Operator)</label>
					</div>
					</div>
					<div class="row">
					<div class="col-lg-3">Password :</div>
					<div class="form-group col-lg-9">
						<input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
					</div>
					</div>
					<div>
					<input class="btn text-white" id="register" type="submit" name="create" value="Sign Up" href"#">
                      <input class="btn text-white" id="login" type="submit" name="create" value="Existing User? Login" href="index.html">  
                    </div>
				</form>
			
	</section>
</body>
</html>