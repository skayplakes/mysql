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

		echo "
			<div class='container-fluid'>	
				<div class='row'>
					<div class='col-xs-4'>
						<div class='item_image'>
							<img src=images/$Images width='200px'>
						</div>
					</div>
					<div class='col-xs-8'>
						<h3>$Name</h3>
						<h5>$Price</h5>
						<p>$Description</p>
						<p>$Category</p>
					</div>
				</div>

				<h2><p>Are you sure you want to delete this item?</p></h2>

				<form method='post' action=''>
					<button class='btn btn-danger' type='submit' name='yes'>YES</button>
					<button class='btn btn-default' type='submit' name='no'>NO</button>
				</form>
			</div>";

		if (isset($_POST['yes'])) {

			// $sql = "UPDATE earphones SET Name = '$name', Price = '$price', Description = '$description', Category = '$category', Images = '$image' WHERE id='$id'";

			$sql = "DELETE FROM earphones WHERE id='$id'";

			mysqli_query($connect,$sql);

			header('location: content.php');
		}

		if (isset($_POST['no'])) {
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


