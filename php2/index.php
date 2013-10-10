<?php
	session_start();

	require_once '\Controller\LoginController.php';
	require_once '\view\DateView.php';
	
		$returnedValue = new LoginController();
		$htmlview = $returnedValue->LoginCheck();

		$DateView = new Dateview();
		$HtmlDate = $DateView->Dateviewer();

		echo "
		<!doctype html>
			<html lang='sv'>
		
		<head>
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
			<title>PHP labbar</title>
		</head>
		<body>
			<h1>Laborationskod rl222aa</h1>
		";

		echo $htmlview;
		echo"<br>" . $HtmlDate ."";

	var_dump($_SESSION['login']);