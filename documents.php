
<?php 
	$title = 'Adjudicator Portal | Documents';
	include "header.php";

	include "verifylogin.php"
?>

	<?php include "logout_button.php" ?>

	<div class="container row">
		<div class="sixteen columns header">
			<div class="title short">Documents</div>
		</div>
	</div>

	<div class="container">
		<div class="sixteen columns listHeader">
			<div class="listHeaderText">General Event Info</div>
		</div>
	</div>
	<div class="container row">
		<a href="documents/Schedule.pdf">
			<div class="sixteen columns listElement">
				<div class="listElementText">Schedule</div>
			</div>
		</a>
		<a href="documents/Shuttles.pdf">
			<div class="sixteen columns listElement">
				<div class="listElementText">Shuttle Info</div>
			</div>
		</a>
		<a href="documents/Regulations.pdf">
			<div class="sixteen columns listElement">
				<div class="listElementText">Regulations</div>
			</div>
		</a>
	</div>

	<div class="container">
		<div class="sixteen columns listHeader">
			<div class="listHeaderText">Tutorials and Guides</div>
		</div>
	</div>
	<div class="container row">
		<a href="documents/RecorderInstructions.pdf">
			<div class="sixteen columns listElement">
				<div class="listElementText">Audio Recorder Instructions</div>
			</div>
		</a>
	</div>

<?php include "footer.php" ?>