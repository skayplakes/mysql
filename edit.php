<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
	
<body>

<?php

	require_once('connection.php');

	$id = $_GET['id'];

	$sql = "SELECT * FROM earphones WHERE id=$id";

	$result = mysqli_query($connect,$sql);

	if (mysqli_num_rows($result)>0) {
		while ($row=mysqli_fetch_assoc($result)) {
			extract($row);
		}
		echo "<div class='container-fluid'>
				<form action='' method='POST'>
					<fieldset style=width: 30%;'>
						<legend><h1>EDIT ITEMS</h1></legend>
							<div class='form-group'>
								Name: <input type='text' name='name' placeholder='Name' value='$Name'>
							</div>
							<div class='form-group'>
								Price: <input type='text' name='price' placeholder='Price' value='$Price'>
							</div>
							Description: 
							<div class='form-group'>
								<textarea class='form-control' name='description' rows='4' placeholder='Description'>$Description</textarea>
							</div>
							<div class='form-group'>
								Category: <input type='text' name='category' placeholder='Category' value='$Category'>
							</div>
							<div class='form-group'>
								Image: <input type='file' name='image' placeholder='Image' value='$Images'>
							</div>
							<div class='form-group'>
								<button class='btn btn-success' class='btn btn-default' type='submit' name='update'>Update</button>
								<button class='btn btn-default' type='submit' name='cancel'>Cancel</button>
							</div>
					</fieldset>
				</form>	
			</div>";

		if (isset($_POST['update'])) {
			$name = $_POST['name'];
			$price = $_POST['price'];
			$description = $_POST['description'];
			$category = $_POST['category'];
			$image = $_POST['image'];

			$sql = "UPDATE earphones SET Name = '$name', Price = '$price', Description = '$description', Category = '$category', Images = '$image' WHERE id='$id'";

			mysqli_query($connect,$sql);

			header('location: content.php');
		}

		if (isset($_POST['cancel'])) {
			header('location: content.php');
		}

	}


	// while ($row = mysqli_fetch_assoc($result)) {
	// 	extract($row);
	// 	$id = $row['Id'];
	
		

		// $result = mysqli_query($connect,$sql);

		// if ($result) {
		// 	header('location: content.php');
		// }

		


?>



</body>
</html>