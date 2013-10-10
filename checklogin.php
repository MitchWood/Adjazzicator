<?php
session_start();

$host="mysql6.000webhost.com"; // Host name 
$username="a7159765_team1"; // Mysql username 
$password=""; // Mysql password 
$db_name="a7159765_Jazz"; // Database name 
$count=0;

// username and password sent from login form 
$user=$_POST['myusername']; 
$pass=$_POST['mypassword']; 

// To protect MySQL injection
$user = stripslashes($user);
$pass = stripslashes($pass);
// $user = mysql_real_escape_string($user);
// $pass = mysql_real_escape_string($pass);

// /* Create a new mysqli object with database connection parameters */
// $mysqli = new mysql($host, $username, $password, $db_name);

// if(mysqli_connect_errno()) {
// 	echo "Connection Failed: " . mysqli_connect_errno();
// 	exit();
// }

// /* Create a prepared statement */
// if($stmt = $mysqli -> prepare("SELECT firstName FROM users WHERE username=?
// AND password=?")) {

// 	/* Bind parameters */
// 	$stmt -> bind_param("ss", $user, $pass);

// 	/* Execute it */
// 	$stmt -> execute();

// 	/* Bind results */
// 	$stmt -> bind_result($result);

// 	/* Get number of returned rows */
// 	$count = $result->num_rows;

// 	/* Close statement */
// 	$stmt -> close();
// }

// /* Close connection */
// $mysqli -> close();

// // // Connect to server and select databse.
// mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
// mysql_select_db("$db_name")or die("cannot select DB");

// // username and password sent from login form 
// $myusername=$_POST['myusername']; 
// $mypassword=$_POST['mypassword']; 

// // To protect MySQL injection
// $myusername = stripslashes($myusername);
// $mypassword = stripslashes($mypassword);
// $myusername = mysql_real_escape_string($myusername);
// $mypassword = mysql_real_escape_string($mypassword);
// $sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
// $result=mysql_query($sql);

// // Mysql_num_row is counting table row
// $count=mysql_num_rows($result);
if(($user=="admin")&&($pass=="1234")) {
	$count=1;
}

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
	// set $username, $password and redirect to file "login_success.php"
	$_SESSION['username']="valid";
	$_SESSION['password']="valid;";
	header("location: adjudicator.php");
} else {
	$_SESSION['errorMsg']="Invalid Username or Password.";
	header("location: login.php");
}

?>