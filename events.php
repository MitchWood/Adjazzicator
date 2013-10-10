
<?php 
	$title = 'Adjudicator Portal | Documents';
	include "header.php";

	include "verifylogin.php"
?>
	

	<?php include "logout_button.php" ?>

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

		<?php 
			$school = "Someville High";
			$director = "John Doe";
			$class = "AA";
			$type = "Sightreading";
			$location = "Room 215";
		?>
		<div class="sixteen columns listElement" id="event1" onclick="showDetails('event1')">
			<div class="listElementText">Event One</div>
		</div>
		<div id="eventDetailsevent1"></div>

		<?php 
			$school = "Someville High";
			$director = "John Doe";
			$class = "B";
			$type = "Sightreading";
			$location = "Room 225";
		?>
		<div class="sixteen columns listElement" id="event1" onclick="showDetails('event2')">
			<div class="listElementText">Event Two</div>
		</div>
		<div id="eventDetailsevent2"></div>

		<?php 
			$school = "Someville High";
			$director = "John Doe";
			$class = "AA";
			$type = "Sightreading";
			$location = "Room 215";
		?>
		<div class="sixteen columns listElement" id="event1" onclick="showDetails('event3')">
			<div class="listElementText">Event Three</div>
		</div>
		<div id="eventDetailsevent3"></div>
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
		
	</div>


	<script>
		function showDetails(eventID) {
	        var $eventDetails = $("#eventDetails" + eventID);
	        if($eventDetails.html() == "") {
	        	// alert('<?php echo $school ?>');
	        	var string = [
	        					'<div class="eventDetail">',
									'<b>School: </b>' + '<?php echo $school ?>',
								'</div>',
								'<div class="eventDetail">',
									'<b>Director: </b>' + '<?php echo $director ?>',
								'</div>',
								'<div class="eventDetail">',
									'<b>Class: </b>' + '<?php echo $class ?>',
								'</div>',
								'<div class="eventDetail">',
									'<b>Event Type: </b>' + '<?php echo $type ?>',
								'</div>',
								'<div class="eventDetail">',
									'<b>Location: </b>' + '<?php echo $location ?>',
								'</div>',
								'<div class="center-content">',
									'<a href="" class="enterEventButton">Enter Event</a>',
								'</div>'
							 ].join('\n');

	            var $frame = $(string);
	            $eventDetails.html($frame);
	            $eventDetails.animate({height:'320'});
	        } else {
	            $eventDetails.html("");
	            $eventDetails.animate({height:'0'});
	        }
	    }
    </script>

<?php include "footer.php" ?>