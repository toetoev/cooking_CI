<?php
	$id = $meal['meals_id'];
	$name = $meal['meals_name'];
	$photo = $meal['meals_photo'];
	$instruction = $meal['meals_instruction'];
	$ingredient = $meal['meals_ingredients'];
	$category = $meal['categories_name'];
	$country = $meal['countries_name'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Meal Detail</title>
</head>
<body>
	<div class="container-fluid">
		<h1 class="h3 mb-2 text-gray-800">
			Meal Details
		</h1>
		<div class="card shadow border-dark" style="width: 18rem;">
 			<img src="<?=$photo ?>" class="img-fluid"> 

			<div class="card-body">
			    <h4 class="card-title"><b><?=$name; ?></b></h4>
			    <p class="card-text">Instruction: <?=$instruction ?></p>
			    <p class="card-text">Ingredients: <?=$ingredient ?></p>
			    <p class="card-text">Category: <?=$category ?></p>
			    <p class="card-text">Country: <?=$country ?></p>
			    <p></p>
			    <a href="<?=base_url('meal')?>" class="btn btn-primary mt-3">Go Back</a>
			</div>
		</div>
	</div>
</body>
</html>