<?php

session_start();

require_once 'connection.php';

	if (isset($_POST['add_item'])) {
		
		$name = $_POST['name'];
		$price = $_POST['price'];
		$description = $_POST['description'];
		$category = $_POST['category'];
		$image = $_POST['image'];
		$sql = "INSERT INTO earphones (name,price,description,category,images) VALUES ('$name','$price','$description','$category','$image')";

		echo "Item added successfuly.";

		$result = mysqli_query($connect,$sql);

}
	    if (isset($_POST['show_item'])) {
	    	$sql = "SELECT * FROM earphones";
	    	$show = mysqli_query($connect,$sql);
	    	
	    	if (mysqli_num_rows($show) > 0) {
				while ($row = mysqli_fetch_assoc($show)) { 
					extract($row);
					echo $Name . ' ' . "<img src=images/$Images width=100px><br>";
				}
			}
		}


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<body>

	<div class="container-fluid">
		<form id="register" action="" method="POST">
			<fieldset style="width: 30%;">
				<legend><h1>ADD ITEMS</h1></legend>
					<div class="form-group">
						<input type="text" name="name" placeholder="Name">
					</div>
					<div class="form-group">
						<input type="text" name="price" placeholder="Price">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="4" placeholder="Description"></textarea>
					</div>
					<div class="form-group">
						<input type="text" name="category" placeholder="Category">
					</div>
					<div class="form-group">
						<input type="file" name="image" placeholder="Image">
					</div>
					<div class="form-group">
						<input class="btn btn-success" class="btn btn-default" type="submit" name="add_item" value="Add Item">
					</div>
					<div class="form-group">
						<input class="btn btn-success" class="btn btn-default" type="submit" name="show_item" value="Show Item">
					</div>	
			</fieldset>
		</form>	
	</div>




	<script src="jquery-3.2.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>