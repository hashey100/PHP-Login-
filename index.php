<?php
	$error = "";
	if(isset($_POST['username'],$_POST['password'])){
		$user = array(
						"user" => "admin",
						"pass"=>"M1dgetnose1!"
				);
		$username = $_POST['username'];
		$pass = $_POST['password'];
		if($username == $user['user'] && $pass == $user['pass']){
			session_start();
			$_SESSION['simple_login'] = $username;
			echo '{"error":0}';
		}else{
			echo '{"error":1}';
		}
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Include stylesheets for better appearance of login form -->

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<style type="text/css">
		body{padding-top:20px;background-color:#f9f9f9;}
	</style>

	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/login.js"></script>

</head>
<body>
	<div class="container">
		<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="text-center"></div><br>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Login</h3>
				</div>
				<div class="panel-body">
					<?php echo $error; ?>
					<form accept-charset="UTF-8" role="form" method="post" action="index.php">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
								<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		</div>
	</div>
</body>
</html>
