<?php include("includes/header.php"); ?>
<?php include("includes/assets.php"); ?>


<div class="container">
	<title>Lara - Login</title>
	<div class="page-header" id="banner">
		<div class="row">
			<div class="col-lg-12">
				<h2 style="color:blue">User ID:-<?php echo $user->id ?></h2><hr>
				<p><span><b>Email:</b></span><?php echo $user->email ?></p>
				<p><span><b>Password:</b></span><?php echo $user->password ?></p>
				<a onclick="history.go(-1)" style="cursor:pointer" class="btn btn-primary">Back</a>
			</div>
		</div>
	</div>
</div>