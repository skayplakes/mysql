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

	<link rel="stylesheet" type="text/css" href="store_layout.css">

</head>
<body>


<nav class="navbar">
	<?php require_once('partials/nav.php'); ?>
</nav>

<?php require_once('partials/modal.php'); ?>

<?php require('partials/sidebar.php'); ?>
	
<div class="content">
	<div class="container">
		<h1 style="text-align: center;">Best Earphones under Php 100</h1>
		<h4>These are the best in-ear headphones around right now.In our time, we've reviewed hundreds of pairs of in-ear headphones. For this feature, we've disregarded the vast majority to bring you only the best, and for every budget. So whether the purse strings are tight or loose, there's a pair for you.If you're looking for a new pair of in-ear headphones, this is the place to be. Read on, and happy listening.</h4>

	</div>

		<?php echo "<br>"; ?>

</div>

	<?php require_once('partials/footer.php'); ?>
	

	<script src="jquery-3.2.1.min.js"></script>

	<script>
		//modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}
	</script>
</body>
</html>