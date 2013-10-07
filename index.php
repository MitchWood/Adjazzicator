<?php

if(!session_is_registered(myusername)){
	header('location: login.php') ;
} else {
	header('location: adjudicator.php') ;
}

?>