<?php
//namespace Controller;
require_once'\model\Usercheck.php';
require_once'\view\HtmlView.php';

class LoginController
{
	public function LoginCheck()
	{
		$View = new HtmlView();
		$msg = new Usercheck();
		
		if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE)
		{
			$loginform = $View->LoggedinView();
			return $loginform;
		}
		else
		{	
			$loginmessage = $msg->LoginCheck();
			$loginform = $View->LoginView();
			return $loginform . 
			$loginmessage ;
		}
	}
}