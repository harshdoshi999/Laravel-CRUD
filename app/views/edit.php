<?php include("includes/header.php"); ?>
<?php include("includes/assets.php"); ?>
<?php
	if($data['user']){
		$user = $data['user'];
	}
?>

<div class="container">
	<div class="page-header" id="banner">
		<div class="row">
			<div class="col-lg-6">
				<h2 style="color:blue">Update User:-</h2><hr>
				<div class="row col-lg-offset-0">
		      		<form action="<?php echo URL::to('/') ?>/update" class="form-horizontal" method="post">
		      			<input type="hidden" name="id" value="<?php echo $user->id ?>" />
		        		<fieldset>
		                  	<div class="form-group">
		                    	<div class="col-lg-9">
		                      		<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $user->email ?>">
		                    	</div>
		                  	</div>
		                  	<div class="form-group">
		                    	<div class="col-lg-9">
		                      		<input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $user->password ?>">
		                    	</div>
		                  	</div>
		                  	<div class="form-group">
			                    <div class="col-lg-8 col-lg-offset-0">
			                      	<input class="btn btn-success" type="submit" value="Update" />
			                      	<a onclick="history.go(-1)" style="cursor:pointer" class="btn btn-primary">Back</a>
			                    </div>
			                </div>
		               </fieldset>
		            </form>
		            <?php
		            	if(isset($data['msg'])){
		            		echo "<p class='alert alert-success col-sm-3'>".$data['msg']."</p>";
		            	}
		            ?>
	  			</div>
			</div>
		</div>
	</div>
</div>