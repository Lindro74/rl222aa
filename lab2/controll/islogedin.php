<?php
	
	require_once '\view\login.php';
	require_once '\view\logedin.php';
	
	class controll
	{
		public function islogged()
		{
				if(isset($_SESSION['login']) && $_SESSION['login'] == true)
				{
					$userlogedin = new loggedin();
					$userwelcome = $userlogedin->welcome();
					return $userwelcome;
				}
				else
				{
					$loginform = new userlogin();
					$userloginform = $loginform->login();
					return $userloginform;		
				}
		}
	}
