<?php 
	session_start(); 

	unset($_SESSION);

	session_destroy(); 

header('Location: /aw/p2/index.php');

?>

<!DOCTYPE html>