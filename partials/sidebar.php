<?php
	if(isset($_SESSION['username'])) {
		echo "
			<h3>Welcome back " . $_SESSION['username'] . "!</h3>
			<h3>User role is " . $_SESSION['role'] . ".</h3>";
	}
	
?>

<div class="sidebar container-fluid">
	<p>
		<a href="additems.php" class="btn btn-default btn-lg">Add New Item</a>
		
	</p>
</div>