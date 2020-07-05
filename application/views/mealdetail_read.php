<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Meal Details</h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary d-inline-block">Meal Details</h6>
			<a href="<?=base_url('mealdetail/create')?>" class="btn btn-success float-right">Add Row</a>
		</div>
		<div class="card-body">
			<?php if($this->session->flashdata('success')):?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>SUCCESS!</strong>
				<?=$this->session->flashdata('success')?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php endif; ?>
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
						<?php
							$i=0;
							foreach($mealdetails as $mealdetail):
							$id = $mealdetail->meals_id;
							$name = $mealdetail->meals_name;
							$i++;
						?>
						<tr>
							<td><?= $i?></td>
							<td><?= $name?></td>
							<td>
								<a href="<?=base_url('meal/detail/'.$id)?>" class="btn btn-outline-primary">
									<i class="fas fa-eye"></i>
									Detail
								</a>
								<a href="<?=base_url('meal/edit/'.$id)?>" class="btn btn-outline-warning"> 
									<i class="fa fa-edit"></i>
									Edit
								</a>
								<a href="<?=base_url('meal/delete/'.$id)?>" class="btn btn-outline-danger">
									<i class="fas fa-trash-alt"></i> 
									Delete
								</a>
							
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>