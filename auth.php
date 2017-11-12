<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


if (session_status() == PHP_SESSION_NONE)
    session_start();

function databaseConnection() {
    
	$authConfig = Array("host" => "localhost", "user" => "client_admin", "password" => "uFoy2ERJU57p", "catalogue" => "sunsetcoders_website");

    $mysqli = mysqli_connect($authConfig["host"], $authConfig["user"], $authConfig["password"], $authConfig["catalogue"]);


    return $mysqli;
}

## Client Browser Information for webstatus

$agent = $_SERVER['HTTP_USER_AGENT'];
$clientIP = $_SERVER['REMOTE_ADDR'];
$dateTime = date("Y-m-d H:i:s");


$name = 'NA';
$Referrer= 'NA';

if (preg_match('/MSIE/i', $agent) && !preg_match('/Opera/i', $agent)) {
	$name = 'Internet Explorer';
} elseif (preg_match('/Firefox/i', $agent)) {
	$name = 'Mozilla Firefox';
} elseif (preg_match('/Chrome/i', $agent)) {
	$name = 'Google Chrome';
} elseif (preg_match('/Safari/i', $agent)) {
	$name = 'Apple Safari';
} elseif (preg_match('/Opera/i', $agent)) {
	$name = 'Opera';
} elseif (preg_match('/Netscape/i', $agent)) {
	$name = 'Netscape';
}

class authentication
{
    public static function getDB()
    {
    	$dbConfig = Config::getInstance()->get('db');
    	$db = new PDO(
    			'mysql:host=127.0.0.1;dbname=sunsetcoders_website',
    			$dbConfig['user'],
    			$dbConfig['password']
    			);
    	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    	
    	
        $authConfig = Array("host" => "localhost", "user" => "client_admin", "password" => "uFoy2ERJU57p", "catalogue" => "sunsetcoders_website");
        $mysqli = mysqli_connect($authConfig["host"], $authConfig["user"], $authConfig["password"], $authConfig["catalogue"]);

        return $mysqli;
    }
}

$dbConnnection = databaseConnection ();

if(!mysqli_query($dbConnnection,"DESCRIBE  users ")){

		include_once 'Prometheus/prom_setup/setup.php';
}

#$currentLocation = getLocationInfoByIp($clientIP);


#if ($clientIP!='120.146.222.154')
#{
#	$insertRow = $dbConnnection->prepare ( "INSERT INTO webstats (client_ip, browser_type, userCountry, referer, dateTime ) VALUES ('$clientIP', '$name', '$currentLocation', '$Referrer', '$dateTime')" );
#	$insertRow->execute ();
#	$insertRow->close ();
#}

function getLocationInfoByIp($ip){
	
	$ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
	
	if($ip_data && $ip_data->geoplugin_countryName != null){
		
		$result['country'] = $ip_data->geoplugin_countryCode;
		
	}
	
	return $result['country'];
	
}
