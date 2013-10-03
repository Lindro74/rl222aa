<?php

	require_once '\model\loginformchecker.php';
	require_once '\view\dateform.php';
	
	class userlogin
	{
		public function login()
		{
			$logginmessage = new validateuser();
			$errormessage = $logginmessage->loginformchecker();
			
			$mydate = new showdate();
			$showdate = $mydate->HTMLdate();
			
			return
				'<h1>Laborationskod rl222aa</h1><br>
				<form action="?login" method="POST">
				Username: <input type="text" name="username">
				Password: <input type="password" name="password">
				<input type="submit" value="Log in" name="submit">
				<input type="checkbox" name="remember" value="yes"> Remember me
				</form>
				<p>' . $errormessage . '</p>
				<p>' . $showdate . '</p>
				';
		}
	}
