<?php session_start();
	unset($_SESSION['admin']['status']);
	unset($_SESSION['admin']['user']);
	header("location:../index.php");
?>