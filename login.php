<?php session_start(); ?>
<?php 
	$title = 'UWEC Jazz Fest Login';
	include "header.php";
?>
	
<div class="container row">
	<div class="container row">
		<div class="sixteen columns header">
			<div class="title">Member Login</div>
		</div>
	</div>
	<form name="form1" class="sixteen columns loginForm" method="post" action="checklogin.php">
		<div class="container row">
			<div class="sixteen columns center-content">
				<div>Username:</div>
				<div>
					<input name="myusername" type="text" id="myusername" autofocus>
				</div>
			</div>
			<div class="sixteen columns center-content">
				<div>Password:</div>
				<div>
					<input name="mypassword" type="password" id="mypassword">
				</div>
			</div>
			<div class="sixteen columns">
				<input type="submit" name="Submit" value="Login" id="loginSubmit">
			</div>
		</div>
	</form>
</div>

<?php include "footer.php" ?>