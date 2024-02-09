<?php

	session_start();
	unset($_SESSION['mailto']);
	unset($_SESSION['password']);
	header("Location:index.php");



?>