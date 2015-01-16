<?php 
    session_start();
 	$db_user = 'root';
 	$db_pass = '';
 	$connection = mysqli_connect('localhost', $db_user, $db_pass, 'doodadify')or 
 	die('Failed to connect!'); 
?>