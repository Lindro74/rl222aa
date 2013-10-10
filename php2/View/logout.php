<?php

session_start();
session_destroy();

		echo "
		<!doctype html>
			<html lang='sv'>
		
		<head>
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
			<title>PHP labbar</title>
		</head>
		<body>
			<h1>Laborationskod rl222aa</h1>
		<br>
		User is logged out. Welcome back!<br>
		<a href='..\index.php'>Click here log in!</a>";