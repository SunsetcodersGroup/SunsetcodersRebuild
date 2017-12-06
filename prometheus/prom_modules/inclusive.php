<style>
#inclusive-background {
	width: 100%;
	clear: both;
	border-top: 15px #0a346f solid;
	border-bottom: 15px #0a346f solid;
	background-image: linear-gradient(left, #0050a1, #0050a1 30%, transparent 30%, transparent
		100%);
	background-image: -webkit-linear-gradient(left, #0050a1, #0050a1 30%, transparent 30%,
		transparent 100%);
}

</style>
<?php

$dbConnection = databaseConnection();

require_once dirname ( dirname ( __FILE__ ) ) . '/SunLibraryModule.php';

class inclusive extends SunLibraryModule {

	protected $dbConnection;
	
	const ModuleDescription = 'Inclusive. <br> Database drive, left and right sides left is Image, right is Database of Services that are included.';
	const ModuleAuthor = 'Sunsetcoders Development Team.';
	const ModuleVersion = '0.1';
	
	function __construct($dbConnection) {
		parent::__construct ( $dbConnection );
	}
	
	public function inclusive() {
	
	}
	
	public function callToFunction() {

		?>

		Hello World

		<?php
	}
	
	protected function assertTablesExist() {
	
		$val = mysqli_query ( $this->objDB, 'select 1 from `inclusive` LIMIT 1' );
		
		if ($val !== FALSE) {
		} else {
			$createTable = $this->objDB->prepare ( "CREATE TABLE inclusive (inclusiveID INT(11) AUTO_INCREMENT PRIMARY KEY, inclusiveHeader VARCHAR(100) NOT NULL, inclusiveSubheader VARCHAR(100) NOT NULL)" );
			$createTable->execute ();
			$createTable->close ();
    	}
    }
}
