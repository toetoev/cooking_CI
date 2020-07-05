<div class="container-fluid">
	<form action="<?=base_url('country/store')?>" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="name">Country Name:</label>
			<input type="text" name="name" id="name" class="form-control">
			
			<div class="text-danger">
				<?=form_error('name');?>
			</div>
		</div>
		<div class="form-group">
			<label for="photo">Photo:</label>
			<input type="file" name="photo" id="photo">
		</div>
		<button class="btn btn-primary" type="submit">
			<i class="fa fa-save"></i>
			Save
		</button>
	</form>
</div>