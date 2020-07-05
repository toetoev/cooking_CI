<?php
	$id = $meal['meals_id'];
	$name = $meal['meals_name'];
	$link = $meal['meals_youtubelink'];
	$photo = $meal['meals_photo'];
	$instruction = $meal['meals_instruction'];
	$ingredient = $meal['meals_ingredients'];
	$category = $meal['categories_name'];
	$country = $meal['countries_name'];
	$cat_id = $meal['categories_id'];
	$cou_id = $meal['countries_id'];
?>

<div class="container-fluid">
	<form action="<?= base_url('meal/update')?>" method="post"  enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?=$id?>">
		<div class="form-group">
			<label for="name">Name :</label>
			<div class="col-sm-10">

				<input type="text" name="name" class="form-control" id="name" value="<?= $name;?>">
				<div class="text-danger">
					<?=form_error('name');?>
					
				</div>
			</div>
		</div>

		<div class="form-group">
			<label for="photo">Photo :</label>
			
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
						Old Photo
					</a>
					<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
						New Photo
					</a>
				</div>
			</nav>

			<div class="tab-content mt-3" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<input type="hidden" name="oldphoto" value="<?=$photo?>">
					<img src="<?=$photo?>" alt="" class="img-fluid w-50 h-50"> 
				</div>
				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><input type="file" name="newphoto" id="photo">
				</div>
			</div>
		</div>

		<div class="form-group">
			<label for="category">Category:</label>
			<div class="col-sm-10">
				<select class="form-control" id="category" name="category">
					<?php 
						foreach($categories as $categorydb) : 
						$id = $categorydb->categories_id;
						$name = $categorydb->categories_name;
					?>
					<option value="<?=$id?>"
						<?php
							if ($id == $cat_id):
						?>
						SELECTED
					<?php endif;?>
					>
					<?=$name?>
					</option>
				<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="country">Country:</label>
			<div class="col-sm-10">
				<select class="form-control" id="country" name="country">
					<?php 
						foreach($countries as $countrydb) : 
						$id = $countrydb->countries_id;
						$name = $countrydb->countries_name;
					?>
					<option value="<?=$id?>"
						<?php
							if ($id == $cou_id):
						?>
						SELECTED
					<?php endif;?>
					>
					<?=$name?>
					</option>
				<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="video">Youtube Video :</label>
			<div class="col-sm-10">
				<input type="text" name="video" class="form-control" id="video" value="<?= $link;?>">
			</div>
		</div>

		<div class="form-group">
			<label for="instruction">Instruction :</label>
			<div class="col-sm-10">
				<input type="text" name="instruction" class="form-control" id="instruction" value="<?= $instruction;?>">
			</div>
		</div>

		<div class="form-group row">
				<div class="col-sm-2">
					<p> <b> Ingredients:</b> </p>
				</div>

				<div class="col-sm-10" style="overflow-y: scroll; height: 270px">
					
					<div class="row">
						<?php 
			            	foreach($ingredients as $ingredient):

			            	$i_id = $ingredient->ingredients_id;
			              	$i_name = $ingredient->ingredients_name;
			              	$i_photo = $ingredient->ingredients_photo;
			            ?>
						
						<div class="col-lg-3 col-md-3 col-sm-6 card-group form-group">
							<div class="card">
								<div class="card-header">
	    							<h5 class="card-title text-center">
	    								<input class="form-check-input" type="checkbox" id="<?= $i_id ?>ingredients" name="ingredients[]" value="<?= $i_name ?>">
    							
		    							<label class="form-check-label" for="<?= $i_id ?>ingredients">
		      								<?= $i_name; ?> 
		    							</label>
	    							</h5>
								</div>

								<div class="card-body text-center">
								    <img src="<?= $i_photo ?>" class="card-img-top img-fluid" style="width: 100px; height: 100px;">
								</div>

								<div class="card-footer">
							    	<div class="form-row">

									    <div class="col">
									    	<input type="text" class="form-control" placeholder="Amount" name="amount[]">
									    </div>

									    <div class="col">
									    	<input type="text" class="form-control" placeholder="Unit" name="unit[]">
									    </div>
									</div>
							    </div>
							</div>
						</div>

					<?php endforeach; ?>

					</div>
				</div>
				
		</div>

	
		<button class="btn btn-primary" type="submit">
			<i class="fa fa-upload"></i>
			Upload
		</button>
	</form>
</div>