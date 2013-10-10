<?php


require_once'\controller\LoginController.php';

class HtmlView
{
	public function loginView()
	{
		return'
				<form action="?login" method="POST">
				Username: <input type="text" name="username">
				Password: <input type="password" name="password">
				<input type="submit" value="Log in" name="submit">
				<input type="checkbox" name="remember" value="yes"> Remember me
				</form>
				</br>';
	}

	public function loggedinView()
	{
		$user = $_SESSION['user'];
		return'
				<p>Welcome!<br> '
				 .$user . ' is logged.
				 <br>
				 <a href=".\view\logout.php">Log Out</a>';
	}
}