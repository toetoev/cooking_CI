<?php
	$id = $category['categories_id'];
	$name = $category['categories_name'];
	$photo = $category['categories_photo'];
	$description = $category['categories_description'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Category Detail</title>
</head>
<body>
	<div class="container-fluid">
		<h1 class="h3 mb-2 text-gray-800">
			Category Details
		</h1>
		<div class="card shadow border-dark" style="width: 18rem;">
 			<img src="<?=$photo ?>" class="img-fluid">

			<div class="card-body">
			    <h4 class="card-title"><b><?=$name; ?></b></h4>
			    <div class="row">
			    	<div class="col-lg-10 col-md-8 col-sm-12">
			    		<p class="card-text">
			    			<b>Description :</b>
			    			<?=$description;?>
			    		</p>
			    	</div>
			    </div>
			    <a href="<?=base_url('category')?>" class="btn btn-primary mt-3">Go Back</a>
			</div>
		</div>
	</div>
</body>
</html>