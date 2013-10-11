
<?php 
	$title = 'Adjudicator Portal | Events';
	include "header.php";

	include "verifylogin.php"
?>
	
	
	<?php include "top_Buttons.php" ?>

	<div class="container row">
		<div class="sixteen columns header">
			<div class="title">Events</div>
		</div>
	</div>

	<div class="container">
		<div class="sixteen columns listHeader ">
			<div class="listHeaderText"><?php echo date('M d');?></div>
		</div>
	</div>
	<div class="container row">

		<?php 
			$id = "event1";
			$school = "Someville High School";
			$director = "John Doe";
			$class = "AA";
			$type = "Sightreading";
			$location = "Room 215";
		?>
		<div class="sixteen columns listElement" id="<?php echo $id ?>" onclick="showDetails('<?php echo $id ?>','<?php echo $school ?>','<?php echo $director ?>','<?php echo $class ?>','<?php echo $type ?>','<?php echo $location ?>')">
			<div class="listElementText">Event One</div>
		</div>
		<div id="eventDetailsevent1"></div>

		<?php 
			$id = "event2";
			$school = "North High School";
			$director = "Jane Doe";
			$class = "AA";
			$type = "Sightreading";
			$location = "Room 225";
		?>
		<div class="sixteen columns listElement" id="<?php echo $id ?>" onclick="showDetails('<?php echo $id ?>','<?php echo $school ?>','<?php echo $director ?>','<?php echo $class ?>','<?php echo $type ?>','<?php echo $location ?>')">
			<div class="listElementText">Event Two</div>
		</div>
		<div id="eventDetailsevent2"></div>

		<?php 
			$id = "event3";
			$school = "Memorial High School";
			$director = "William OKeafe";
			$class = "A";
			$type = "Sightreading";
			$location = "Room 113";
		?>
		<div class="sixteen columns listElement" id="<?php echo $id ?>" onclick="showDetails('<?php echo $id ?>','<?php echo $school ?>','<?php echo $director ?>','<?php echo $class ?>','<?php echo $type ?>','<?php echo $location ?>')">
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
		<?php 
			$id = "event4";
			$school = "Someville High School";
			$director = "John Doe";
			$class = "AA";
			$type = "Sightreading";
			$location = "Room 215";
		?>
		<div class="sixteen columns listElement" id="<?php echo $id ?>" onclick="showDetails('<?php echo $id ?>','<?php echo $school ?>','<?php echo $director ?>','<?php echo $class ?>','<?php echo $type ?>','<?php echo $location ?>')">
			<div class="listElementText">Event Four</div>
		</div>
		<div id="eventDetailsevent4"></div>

		<?php 
			$id = "event5";
			$school = "North High School";
			$director = "Jane Doe";
			$class = "AA";
			$type = "Sightreading";
			$location = "Room 225";
		?>
		<div class="sixteen columns listElement" id="<?php echo $id ?>" onclick="showDetails('<?php echo $id ?>','<?php echo $school ?>','<?php echo $director ?>','<?php echo $class ?>','<?php echo $type ?>','<?php echo $location ?>')">
			<div class="listElementText">Event Five</div>
		</div>
		<div id="eventDetailsevent5"></div>
		
	</div>


	<script>
		function showDetails(eventID, school, director, eventClass, type, location) {
	        var $eventDetails = $("#eventDetails" + eventID);
	        if($eventDetails.html() == "") {
	        	var string = [
	        					'<div class="eventDetail">',
									'<b>School: </b>' + school,
								'</div>',
								'<div class="eventDetail">',
									'<b>Director: </b>' + director,
								'</div>',
								'<div class="eventDetail">',
									'<b>Class: </b>' + eventClass,
								'</div>',
								'<div class="eventDetail">',
									'<b>Event Type: </b>' + type,
								'</div>',
								'<div class="eventDetail">',
									'<b>Location: </b>' + location,
								'</div>',
								'<div class="center-content">',
									'<a href="" class="enterEventButton">Enter Event</a>',
								'</div>'
							 ].join(' ');
	            var $frame = $(string);
	            $eventDetails.animate({height:'320'});
	            $eventDetails.html($frame);
	        } else {
	        	$eventDetails.animate({height:'0'});
	            $eventDetails.html("");
	            
	        }
	    }
    </script>

<?php include "footer.php" ?>