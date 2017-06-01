<?php
	include("../connection.php");
	session_destroy();
	header("location:../prelogin.php?msg=logged out");
?>