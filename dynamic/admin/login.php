<?php 
#start session
session_start();

# Database connection here:
include('../config/connection.php');

if($_POST) { //check if email and password exist
	
	$query = "SELECT * FROM users WHERE email='$_POST[email]' AND password = SHA1('$_POST[password]')";
	$result = mysqli_query($dbc, $query);
	
	if(mysqli_num_rows($result) == 1) {
		
		$_SESSION['username'] = $_POST['email'];
		header('Location: index.php');
		
	}
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		
		<title>Admin Loginin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php include ('config/css.php');?>
		
		<?php include ('config/js.php');?>

	</head>
	
	<body>
	<div id="wrap">
		<?php //include(D_TEMPLATE.'/navigation.php'); ?>
		
		<div class="container">
		
		
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4" col-md-offset-4>
				
				<div class="panel panel-info">
					<div class="panel-heading">
						<strong>Login</strong>
					</div> <!-- end panel body-->
				<div class="panel-body">
					
					<?php 
					
						if ($_POST) {
							echo $_POST['email'];
							echo '<br>';
							echo $_POST['password'];
						}
					
					?>
					
					<form action="login.php" method="post" role="form">
				
				<form role="form">
					<div class="form-group">
						
						<label for="email">Email address</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
					
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					</div>
					<!--
					<div class="checkbox">
						<label>
							<input type="checkbox">
							Check me out </label>
					</div> -->
					
					<button type="submit" class="btn btn-default">
						Submit
					</button>
				</form>		
					</div><!-- end panel body-->		
				</div> <!-- end panel-->
			</div> <!--end col -->
			
			<div class="col-md-4"></div>
		</div> <!-- end row-->	
	</div> <!-- end container-->

	</div> <!-- end wrap-->
		
	<?php //include(D_TEMPLATE.'/footer.php');?>
		
	<?php //if($debug == 1) {include('widgets/debug.php'); }?>
		
	</body>
	
</html>