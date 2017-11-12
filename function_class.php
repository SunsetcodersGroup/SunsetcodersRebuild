<?php

$dbConnection = databaseConnection();

function get_head() {
    $filename = 'header.php';

    if (file_exists($filename)) {
        include_once (dirname(__FILE__) . '/' . $filename);
    }
}

function call_page() {

    global $dbConnection;
    unset($getPageName);
	$moduleArray = array();
	
    $page = $_SERVER['REQUEST_URI'];
    $halfValue = explode('.php/', $page);

    if (!empty($halfValue[1])) {
        $getPageName = $halfValue[1];
    }

    $pageName = (empty($getPageName)) ? "Home" : $getPageName;

    if(mysqli_query($dbConnection,"DESCRIBE  pages ")){
    
     	$pageRef = $dbConnection->prepare("SELECT pages.pageID, moduleCode FROM pages INNER JOIN page_content ON pages.pageID=page_content.pageID && pageName='$pageName' ORDER BY rowID ");
    	$pageRef->execute();
    	$pageRef->bind_result($pageID, $moduleCode);
    	
    	while ($checkRow = $pageRef->fetch()) {

    		$moduleArray[] = $moduleCode;
    	}	
    } 
    
    foreach ($moduleArray as &$value) {
    	call_to_module($value);
    }
}

function call_to_module($moduleName) {

    global $dbConnection;

    	if ($baseCode = $dbConnection->prepare("SELECT settingsFilename FROM settings WHERE settingsName=?")) {

            $baseCode->bind_param('s', $moduleName);
            $baseCode->execute();
            $baseCode->bind_result($settingsFilename);
            $baseCode->fetch();

            $filepath = 'Prometheus/prom_modules/' . $settingsFilename;

        }
        
        include_once ($filepath);
        
        $moduleClass = new $moduleName($dbConnection);
        $moduleClass->callToFunction();
    
}
