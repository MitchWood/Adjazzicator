
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
	<form name="form1" class="sixteen columns center-content loginForm" method="post" action="checklogin.php">
		<!-- Error message div -->
		<?php
			if(isset($_SESSION["errorMsg"])) {
				$message=$_SESSION["errorMsg"]; ?>
				<div class="error">
					<?php echo($message); ?>
				</div>
				<?php 
				unset($_SESSION["errorMsg"]);
			}
		?>
		<!-- Inputs and submit button -->
		<div class="row">
			<div class="full-width center-content">
				<div>Username:</div>
				<div>
					<input name="myusername" type="text" id="myusername" autofocus>
				</div>
			</div>
			<div class="full-width center-content">
				<div>Password:</div>
				<div>
					<input name="mypassword" type="password" id="mypassword">
				</div>
			</div>
			<div class="full-width">
				<input type="submit" name="Submit" value="Login" id="loginSubmit">
			</div>
		</div>
	</form>
</div>

<?php include "footer.php" ?>