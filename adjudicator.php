<?php 
	$title = 'Adjudicator Portal | Documents';
	include "header.php";

	include "verifylogin.php"
?>

	<?php include "login_button.php" ?>

	<div class="container row">
		<div class="sixteen columns header">
			<div class="title">Welcome to the Adjudicator Portal</div>
		</div>
	</div>

	<div class="container row">
		<a href="events.php">
			<div class="tile eight columns">
				<img src="/images/Calendar.png" class="tileImg"></img>
				<div id="calDate"><?php echo date('j');?></div>
				<div class="tileText">My Events</div>
			</div>
		</a>
		<a href="documents.php">
			<div class="tile eight columns">
				<img src="/images/Document.png" class="tileImg"></img>
				<div class="tileText">Documents</div>
			</div>
		</a>
	</div>
	<div class="container row">
		<a href="settings.php">
			<div class="tile eight columns">
				<img src="/images/Gear.png" class="tileImg"></img>
				<div class="tileText">Settings</div>
			</div>
		</a>
		<a href="">
			<div class="tile eight columns">
				
			</div>
		</a>
	</div>

<?php include "footer.php" ?>