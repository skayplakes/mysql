<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

<?php

require_once('connection.php'); 

	$sql = "SELECT * FROM earphones";

	$show = mysqli_query($connect,$sql);

	if (mysqli_num_rows($show) > 0) {
		while ($row = mysqli_fetch_assoc($show)) { 
			extract($row);

			echo "
				<div class='container-fluid'>
					<div class='row'>
						<div class='col-xs-4'>
							<div class='item_image'>
								<img src=images/$Images>
							</div>
						</div>
						<div class='col-xs-8 btn-group-vertical'>
							<h3>$Name</h3>
							<h5>$Price</h5>
							<p>$Description</p>
							<p>$Category</p>

							<a href='edit.php?id=$Id'><button class='btn btn-default btn-md'>Edit</button></a>

							<a href='delete.php?id=$Id'><button class='btn btn-danger btn-md'>Delete</button></a>
						</div>
					</div>
				</div>";
		}
	}

require('store_layout.php');

		
?>

</body>
</html>





