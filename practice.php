<?php //procedural process

	require 'connection.php';

	echo "<br>";
	
	$sql = "SELECT * FROM employees"; //$sql = "SELECT firstName,lastName FROM employees";

	$result = mysqli_query($connect, $sql);

	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) { //converts sql query into associative array

			// echo $row['firstName'] . ' ' . $row['lastName'] . '<br>';

			extract($row); //Use when *(all) is used
			echo $firstName . ' ' . $lastName . '<br>';
		} 	
	}

?>