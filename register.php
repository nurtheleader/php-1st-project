<?php  
	include 'database.php';
	$db = new database();

	if (isset($_POST['submit'])) {
		$user_name = $_POST['user_name'];
		$full_name = $_POST['full_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$db->formData($user_name, $full_name, $email, $password);
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<style type="text/css">
		.row{
			margin: 0px!important;
		}
	</style>
</head>
<body>

	<div class="row mt-5">
		<div class="container">
			<div class="col-md-6 offset-md-3">
				<form class="form-group" method="POST" action="">
					<br><br><br><h2>Register Now</h2><br>
					<input type="text" name="user_name" placeholder="Pick a username" class="form-control" required><br>
					<input type="text" name="full_name" placeholder="Enter your full name" class="form-control" required><br>
					<input type="email" name="email" placeholder="Enter your email address" class="form-control" required><br>
					<input type="password" name="password" placeholder="Create a strong password" class="form-control" required><br>
					<input class="btn btn-success" type="submit" name="submit" value="Register">
				</form>
			</div>
		</div>
	</div>

</body>
</html>