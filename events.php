<?php 
	$title = 'Adjudicator Portal | Documents';
	include "header.php";

	include "verifylogin.php"
?>

	<?php include "login_button.php" ?>

	<div class="container row">
		<div class="sixteen columns header short">
			<div class="title short">Events</div>
		</div>
	</div>

	<div class="container">
		<div class="sixteen columns listHeader ">
			<div class="listHeaderText"><?php echo date('M d');?></div>
		</div>
	</div>
	<div class="container row">
		<div class="sixteen columns listElement">
			<div class="listElementText">Event One</div>
		</div>
		<div class="sixteen columns listElement">
			<div class="listElementText">Event Two</div>
		</div>
		<div class="sixteen columns listElement">
			<div class="listElementText">Event Three</div>
		</div>
		<div class="sixteen columns listElement">
			<div class="listElementText">Event Four</div>
		</div>
	</div>

	<div class="container">
		<div class="sixteen columns listHeader">
			<div class="listHeaderText">Dec 12</div>
		</div>
	</div>
	<div class="container row">
		<div class="sixteen columns listElement">
			<div class="listElementText">Event One</div>
		</div>
		<div class="sixteen columns listElement">
			<div class="listElementText">Event Two</div>
		</div>
		<div class="sixteen columns listElement">
			<div class="listElementText">Event Three</div>
		</div>
		<div class="sixteen columns listElement">
			<div class="listElementText">Event Four</div>
		</div>
	</div>

<?php include "footer.php" ?>