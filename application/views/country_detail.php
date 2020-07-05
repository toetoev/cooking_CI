<?php
	$id = $country['countries_id'];
	$name = $country['countries_name'];
	$photo = $country['countries_photo'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Country Detail</title>
</head>
<body>
	<div class="container-fluid">
		<h1 class="h3 mb-2 text-gray-800">
			Country Details
		</h1>
		<div class="card shadow border-dark" style="width: 18rem;">
 			<img src="<?=$photo ?>" class="img-fluid">

			<div class="card-body">
			    <h4 class="card-title"><b><?=$name; ?></b></h4>
			    <a href="<?=base_url('country')?>" class="btn btn-primary mt-3">Go Back</a>
			</div>
		</div>
	</div>
</body>
</html>