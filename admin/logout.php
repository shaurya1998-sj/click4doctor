<?php session_start();
	$_SESSION["userName"] = null;
	$_SESSION["userId"] = null;
//	$_SESSION["type"] = null;
session_unset();
	echo '<script >window.location.href="index.php";</script>'

?>