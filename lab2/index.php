<?php
	session_start();

	require_once'\controll\islogedin.php';

	$viewlogin = new controll();
	$view = $viewlogin->islogged();
	
	echo"
	<!doctype html>
			<html lang='sv'>
		
		<head>
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
			<title>PHP labbar</title>
		</head>";
	
	echo $view;
var_dump($_SESSION);