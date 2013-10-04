<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Adjudicator Portal | Home</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/base.css"/>
	<link rel="stylesheet" type="text/css" href="stylesheets/skeleton.css"/>
	<link rel="stylesheet" type="text/css" href="stylesheets/layout.css"/>
</head>
<body>
	
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