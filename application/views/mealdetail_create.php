<div class="container-fluid">
	<form action="<?=base_url('mealdetail/store')?>" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="name">Meal Detail Name:</label>
			<input type="text" name="name" id="name" class="form-control">
			
			<div class="text-danger">
				<?=form_error('name');?>
			</div>
		</div>
		<div class="form-group">
			<label for="amount">Amount:</label>
			<input type="text" name="amount" id="amount" class="form-control">
		</div>
		<div class="form-group">
			<label for="meal">Meal:</label>
			<select class="form-control" id="meal" name="meal">
				<?php 
					foreach($meals as $meal) : 
					$id = $meal->meals_id;
					$name = $meal->meals_name;
				?>
				<option value="<?=$id?>">
					<?=$name?>
				</option>
			<?php endforeach; ?>
			</select>
		</div>
		<button class="btn btn-primary" type="submit">
			<i class="fa fa-save"></i>
			Save
		</button>
	</form>
</div>
