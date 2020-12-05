<?php 
	include 'main_header.php';
	require_once '../controllers/UsersController.php';
?>

<!--sign up starts -->
<div class="center-login">
	<h1 class="text text-center">Sign Up</h1>
	<form action="" method="POST" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name</h4> 
			<input type="text" name="name" value="<?php echo $name; ?>" class="form-control">
			<h6 style="color:red;"><?php echo "* ".$err_name; ?></h6>
		</div>
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" name="username" value="<?php echo $username; ?>" class="form-control">
			<h6 style="color:red;"><?php echo "* ".$err_username; ?></h6>
		</div>
		<div class="form-group">
			<h4 class="text">Email</h4> 
			<input type="text" name="email" value="<?php echo $email; ?>" class="form-control">
			<h6 style="color:red;"><?php echo "* ".$err_email; ?></h6>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name="password" class="form-control">
			<h6 style="color:red;"><?php echo "* ".$err_password; ?></h6>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" name="signup" value="Sign Up" class="form-control">
		</div>
</div>

<!--sign up ends -->
<?php include 'main_footer.php';?>