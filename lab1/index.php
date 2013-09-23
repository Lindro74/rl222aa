<!doctype html>
<html lang="sv">
	<?php
		setlocale(LC_ALL, 'sv_SE');
		session_start();
		
	?>	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="basic.css">
		<meta name="robots" content="noindex, nofollow">
		<title>Lab. 01</title>
	</head>
	
		<body>
			<h1>Laborationskod rl222aa</h1>
			<div id="login">
			<form action="?login" method="post">
			Username: <input type="text" name="username" class="name">
			Password: <input type="password" name="password" class="name">
			<input type="submit" value="Log in" name="submit" class="name">
			<input type="checkbox" name="remember" value="yes" class="name"> Remember me
			</form>
			</div>
			
			<?php
				
				if(isset($_POST['submit']))
				{	
					$user = $_POST['username'];
					$pw = $_POST['password'];
				
					if($user == null || $pw == null)
					{
						$_SESSION["loggedin"] = false;
						$message = '<div id="message">';
						$message .= 'A username and a password is required!';
						$message .= '</div>';
						echo $message;
					}
		
					elseif($user == "Admin" && md5($pw) =="dc647eb65e6711e155375218212b3964") 
					{
						$_SESSION["loggedin"] == "loggedin";

						if(isset($_SESSION["loggedin"]))
						{
							$welcome = '<div id="welcome">';
							$welcome .= 'Welcome ' . $user . '!';
							$welcome .= '</div>';
							echo $welcome;
						}
						else
						{
							$welcome = '<div id="welcome">';
							$welcome .= 'Access dinied!';
							$welcome .= '</div>';
							$_SESSION["loggedin"] = true;
							echo $welcome;
						}

						if(isset($_POST['remember']))
						{	
							$welcome = '<div id="welcome">';
							$welcome .= 'Welcome ' . $user . ', I remember you !';
							$welcome .= '</div>';
							echo $welcome;		
						}
					
						else
						{
							
						}
						 
						$logout = '<div id="bye">';
						$logout .= '<a href="index.php?action=logout">';
						
						if(isset($_GET['action']))
						{
							session_unset(["loggedin"]);
							session_write_close();	
							echo $_GET['action'];
						}
						
						$logout .= 'Logout</a>';
						$logout .= '</div>';
					
						echo $logout;
					}
				
					elseif($user != "Admin" || md5($pw)!="dc647eb65e6711e155375218212b3964")
				 	{
				 		$message =  '<div id="message">';
						$message .= 'Incorrect username or password!';
						$message .= '</div>';
						echo $message;
					}
				}
					date_default_timezone_set ("Europe/Stockholm");
					$today = date("j F  Y. ");
					$dag = explode(";", "Måndag;Tisdag;Onsdag;Torsdag;Fredag;Lördag;Söndag" ); 
					$date = date("d");
					$mytime = date("H:m:s");
					$weekday = date("l, ", strtotime($date));
					$info = '<div id="info">';
					$info .= $dag[date("N")] .' den ' . $today . 'Klockan är: [' . $mytime . ']';
					$info .='</div>';
				
					echo $info;


			?>
			
		</body>
</html>


