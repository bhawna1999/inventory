<?php

session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}

?>




<!DOCTYPE html>
<html>
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


<body >
	<nav class="navbar  sticky-top">
	<!--<img src="" alt="">-->
		<span id ="s1" class="text-white">
            <h2>Inventory Management System &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <a href="logout.php">Logout</a></h2>
        </span>
    </nav>
	<section>
		<div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">
			<h3 class="text-center">Details Of The Item</h3>
				<form action="#" class="needs-validation">
					<div class="row">
					<div class="col-lg-2">Item Name :</div>
					<div class="form-group col-lg-10">
					<input type="text" class="form-control" id="iname" placeholder="Item Name" name="iname" required>
					</div>
					</div>
					
					<div class="row">
					<div class="col-lg-2">Item Quantity :</div>
					<div class="form-group col-lg-10">
						<input type="number" class="form-control" id="qty" placeholder="Item Quantity" name="qty" required>
					</div>
					</div>
					
					<div class="row">
					<div class="col-lg-2">Item Status :</div>
					<div class="form-group col-lg-10">
							<input type="radio" id="add" name="status" value="add">
							<label for="add">Add</label><br>
							<input type="radio" id="delete" name="status" value="delete">
							<label for="delete">Delete</label><br>
							<input type="radio" id="update" name="status" value="update">
						<label for="update">Update</label><br>
					</div>
					</div>
					<div class="row">
					<div class="col-lg-2">Item Id :</div>
					<div class="form-group col-lg-10">
						<input type="text" class="form-control" id="i_id" placeholder="Item ID" name="i_id" required>
					</div>
					</div>
					<div class="row">
					<div class="col-lg-2">Item Number :</div>
					<div class="form-group col-lg-10">
						<input type="number" class="form-control" id="num" placeholder="Item Number" name="number" required>
					</div>
					</div>
					<div class="row">
					<div class="col-lg-2">Item Type :</div>
					<div class="form-group col-lg-10">
					<input type="radio" id="consumable" name="itype" value="consumable">
							<label for="consumable">Consumable Item</label><br>
							<input type="radio" id="non_consumable" name="itype" value="non_consumable">
							<label for="non_consumable">Non Consumable Item</label><br>
					</div>
					</div>
					<h3 class="text-center">Details Of The Store Keeper</h3>
					<div class="row">
					<div class="col-lg-2">Employee Name:</div>
					<div class="form-group col-lg-10">
						<input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
					</div>
					</div>
					<span><a class="btn text-white" href"#">Submit</a></span>
				</form>
            </div>
			</div>
	</section>
</body>
</html>