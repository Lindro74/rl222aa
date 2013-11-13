<?php
//namespace Model;

require_once'\view\HtmlView.php';
require_once'\controller\LoginController.php';

class Usercheck
{
	public function LoginCheck()
	{
		$htmlview = new HtmlView();
		$htmlloginview = $htmlview->loginView();
		$Controll = new LoginController();

		$_SESSION['login'] = FALSE;

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
				$this->controll->LoginCheck();
			}
			else
			{
				$loginmessage = "Invalid Username or Password!";
				return $loginmessage;
			}
		}
	}
}