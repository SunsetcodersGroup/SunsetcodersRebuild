<?php

$dbConnection = databaseConnection ();

/*
 * Make sure header.php exists
 * if so use it as a header in the website
 */
function get_head() {
	$filename = 'header.php';
	
	if (file_exists ( $filename )) {
		include_once (dirname ( __FILE__ ) . '/' . $filename);
	} 
}

function call_page() {
	
	global $dbConnection;
	
	$getPageID= $_SERVER['QUERY_STRING'];
	$getPageID= ($getPageID=="") ? 'Home' : $getPageID;
		
	foreach (glob("prometheus/prom_modules/*.php") as $filename) {
		require_once $filename;
	}
	
	$pageRef = $dbConnection->prepare ( "SELECT pageName, rowID, moduleCode FROM page_content WHERE pageName='$getPageID' ORDER BY rowID"  );
	if (! $pageRef->execute ()) {
		echo "Execute failed: (" . $pageRef->errno . ") " . $pageRef->error;
	  } 
	$pageRef->bind_result ( $pageID, $rowID, $moduleCode);
	
	while ( $checkRow = $pageRef->fetch () ) {
		
		if ($getPageID!='Home')
		$moduleCode::callToPage();
		else
		$moduleCode::callToFunction ();
		
	} 
}

function get_foot() {
	$filename = 'footer.php';
	
	if (file_exists ( $filename )) {
		include_once (dirname ( __FILE__ ) . '/' . $filename);
	} 
}
