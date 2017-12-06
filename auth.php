<?php
error_reporting ( E_ALL );
ini_set ( 'display_errors', 1 );

if (session_status () == PHP_SESSION_NONE)
	session_start ();

	echo '<link rel="stylesheet" type="text/css" href="css/style.css">';

function databaseConnection() {
	$authConfig = Array (
			"host" => "localhost",
			"user" => "client_admin",
			"password" => "uFoy2ERJU57p",
			"catalogue" => "sunsetcoders_website" 
	);
	
	$mysqli = mysqli_connect ( $authConfig ["host"], $authConfig ["user"], $authConfig ["password"], $authConfig ["catalogue"] );
	
	return $mysqli;
}

function datChange($datChange) {
	return date ( 'd/m/Y', strtotime ( $datChange ) );
}
function datReturn($datChange) {
	$tempValue = explode ( '/', $datChange );
	
	return $tempValue [2] . '-' . $tempValue [1] . '-' . $tempValue [0];
}

define('SERVER', 'localhost');
define('USERNAME', 'client_admin');
define('PASSWORD', 'uFoy2ERJU57p');
define('DATABASE', 'sunsetcoders_website');

class database
{
	private static $instance;
	private $connection;
	
	private function __construct()
	{
		$this->connection = new mysqli(SERVER,USERNAME,PASSWORD,DATABASE);
	}
	
	public static function init()
	{
		if(is_null(self::$instance))
		{
			self::$instance = new database();
		}
		
		return self::$instance;
	}
	
	
	public function __call($name, $args)
	{
		if(method_exists($this->connection, $name))
		{
			return call_user_func_array(array($this->connection, $name), $args);
		} else {
			trigger_error('Unknown Method ' . $name . '()', E_USER_WARNING);
			return false;
		}
	}
}


$dbConnection = databaseConnection ();

function databaseSetup() {
	

}

function processLogin() {
	
	global $dbConnection;
	
	$userUsername = filter_input ( INPUT_POST, 'setUsername' );
	$userPassword = filter_input ( INPUT_POST, 'setPassword' );
	
	if ($stmt = $dbConnection->prepare ( "SELECT userUsername, userPassword FROM users WHERE userUsername=? AND userPassword=? AND userStatus='Administrator' " )) {
		
		$stmt->bind_param ( "ss", $userUsername, $userPassword );
		$stmt->execute ();
		
		$stmt->bind_result ( $userUsername, $userPassword );
		$stmt->fetch ();
		
		if ($userUsername) {
			$_SESSION ['userUsername'] = $userUsername;
			$_SESSION ['userPassword'] = $userPassword;
			
			echo '<tr><td><center>Access Granted!</td></tr>';
		} else {
			echo '<tr><td><center>Access Denied!</td></tr>';
		}
	}
	echo '<tr><td><center><font color=black><b>Please Wait!!!!</td></tr>';
	echo '<meta http-equiv="refresh" content="1;url=index.php">';
}
function loginScreen() {
	echo '<center><table width=1024 height=400px;>';
	echo '<tr><td><br></td></tr>';
	echo '<tr><td><img src="Images/logo.png"></td></tr>';
	echo '<tr><td><br><br>&nbsp;<center>';
	
	echo '<form method="post" action="?id=processLogin">';
	echo '<table width=450 cellpadding=10 style="border-radius: 5px; border: 3px solid #615f5e;">';
	
	echo '<tr><td align=right style="color: #615f5e;"><b>USER NAME</td><td colspan=2 style="padding-right: 50px;"><center><input type="text" name="setUsername" placeholder="enter your username..." size=25></td></tr>';
	echo '<tr><td align=right style="color: #615f5e;"><b>PASSWORD</td><td colspan=2 style="padding-right: 50px;"><center><input type="password" name="setPassword" placeholder="****" size=25></td></tr>';
	echo '<tr><td ></td><td colspan=2 style="padding-right: 50px;"><center><input id="quoteSubmit" type="image" src="Images/login.png" alt="" onmouseover="javascript:this.src=\'Images/login-over.png\'" onmouseout="javascript:this.src=\'Images/login.png\'"/></td></tr>';
	echo '<tr><td colspan=3></td></tr>';
	echo '<tr><td colspan=2 align=right ><font style="font-weight:bold;  color: #615f5e;">Forgetten your password or username?</td><td width=85 style="padding-right: 50px;"><a href="?id=Recover"><img src="Images/recover.png"></a></td></tr>';
	echo '</table>';
	echo '</form>';
	
	echo '</td></tr>';
	echo '</table>';
}
function is_admin() {
	global $dbConnection;
	
	if ($stmt = $dbConnection->prepare ( "SELECT userUsername, userPassword FROM users WHERE userUsername=? AND userPassword=? AND userStatus='Administrator' " )) {
		
		$stmt->bind_param ( "ss", $_SESSION ['userUsername'], $_SESSION ['userPassword'] );
		$stmt->execute ();
		
		$stmt->bind_result ( $userUsername, $userPassword );
		$stmt->fetch ();
		
		if ($userUsername == TRUE)
			return TRUE;
	}
}



