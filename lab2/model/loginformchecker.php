<?php
	require_once '\view\login.php';
	
class validateuser
{
	public function loginformchecker()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$user = $_POST['username'];
			$pass = $_POST['password'];

			if($user == null || $pass == null)
			{
				$loginmessage = "Username and Password is required!";
				return $loginmessage;
			}
			if($user == "Admin" && md5($pass) =="dc647eb65e6711e155375218212b3964")
			{
				$_SESSION['login'] = true;
				$_SESSION['user'] = $_POST['username'];
			}
			else
			{
				$loginmessage = "Invalid Username or Password!";
				return $loginmessage;
			}
		}
	}
}
