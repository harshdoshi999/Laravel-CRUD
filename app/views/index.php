<?php include("includes/header.php"); ?>
<?php include("includes/assets.php"); ?>


<div class="container">
	<title>Lara - Login</title>
	<div class="page-header" id="banner">
		<div class="row">
			<div class="col-lg-12">
				<h2 style="color:blue">All Users:-</h2><hr>
				<?php
					if(isset($data['msg'])){
						echo '<p class="alert alert-success col-sm-5">{$data["msg"]}</p>';
					}
					echo "
					<table class='table table-striped table-hover '>
					  	<thead>
					    	<tr>
						      	<th>#</th>
						      	<th>Title</th>
						      	<th>Description</th>
						      	<th>Actions</th>
					    	</tr>
					  	</thead>
					  	<tbody>
					";

					//Display all Users
					$rows = sizeof($users);
					if($rows == 0){
						echo "
						<tr>
							<td colspan='4' style='text-align:center'>No result found!!!</td>
						</tr>";
					} else{
						foreach ($users as $key=>$user) {
							// echo $user->email."<br>";
							$num = $key + 1;
							echo "<tr>
					      		<td>{$num}</td>
					      		<td>{$user->email}</td>
					      		<td>{$user->password}</td>";
							?>
					      		<td>
									<a href='<?php echo URL::to('view/'.$user->id) ?>' class='btn btn-primary'>View</a>
									<a href='<?php echo URL::to('edit/'.$user->id) ?>' class='btn btn-warning'>Edit</a>
									<a href='<?php echo URL::to('delete/'.$user->id) ?>' class='btn btn-danger'>Delete</a>
					      		</td>
					    	</tr>
							<?php
						}
					}
					echo "
						</tbody>
					</table> 
					";
				?>
			</div>
		</div>
	</div>
</div>