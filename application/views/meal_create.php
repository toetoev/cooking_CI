<div class="container-fluid">
	<form action="<?=base_url('meal/store')?>" method="post" enctype="multipart/form-data">

		<div class="form-group">
			<label for="name">Meal Name:</label>
			<input type="text" name="name" id="name" class="form-control">
			
			<div class="text-danger">
				<?=form_error('name');?>
			</div>
		</div>

		<div class="form-group row">
			<label for="photo" class="col-sm-2 col-form-label">  
				<b> Photo </b> 
			</label>

			<div class="col-sm-10">
				<input type="file" name="photo" id="photo">
			</div>
		</div>

		<div class="form-group">
			<label for="category">Category:</label>
			<select class="form-control" id="category" name="category">
				<?php 
					foreach($categories as $category) : 
					$id = $category->categories_id;
					$name = $category->categories_name;
				?>
				<option value="<?=$id?>">
					<?=$name?>
				</option>
			<?php endforeach; ?>
			</select>
		</div>

		<div class="form-group">
			<label for="country">Country:</label>
			<select class="form-control" id="country" name="country">
				<?php 
					foreach($countries as $country) : 
					$id = $country->countries_id;
					$name = $country->countries_name;
				?>
				<option value="<?=$id?>">
					<?=$name?>
				</option>
			<?php endforeach; ?>
			</select>
		</div>

		<div class="form-group">
			<label for="video">Youtube Video:</label>
			<input type="text" name="video" id="video" class="form-control">
		</div>

		<div class="form-group">
			<label for="instructions">Instructions:</label>
			<input type="text" name="instruction" id="instructions" class="form-control">
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
			<i class="fa fa-save"></i>
			Save
		</button>
	</form>
</div>
