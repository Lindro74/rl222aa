<?php
	require_once '\view\dateform.php';
	
	class loggedin
	{
		public function welcome()
		{
		$mydate = new showdate();
		$showdate = $mydate->HTMLdate();
		
		return
			'<h1>Laborationskod rl222aa</h1><br>
			Successful login! Welcome' . $_SESSION['user'] . '
			'. $showdate .''; 
		}
	}
