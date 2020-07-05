<?php
	$id=$category['categories_id'];
	$name=$category['categories_name'];
	$photo=$category['categories_photo'];
	$description=$category['categories_description'];
?>

<div class="container-fluid">
	<form action="<?= base_url('category/update')?>" method="post"  enctype="multipart/form-data">
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
					<img src="<?=base_url($photo)?>" alt="" class="img-fluid w-50 h-50"> 
				</div>
				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><input type="file" name="newphoto" id="photo">
				</div>
			</div>
		</div>
		<div class="form-group w-100">
			<label for="description">Description :</label>
			<textarea class="form-group form-control" name="description" id="description"><?= $description;?></textarea>
		</div>
		<button class="btn btn-primary" type="submit">
			<i class="fa fa-upload"></i>
			Upload
		</button>
	</form>
</div>