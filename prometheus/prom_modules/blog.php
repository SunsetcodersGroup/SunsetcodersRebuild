<style>
#blog-background {
	width: 100%;
	height: 90%;
	color: #000;
	clear: both;
	margin: 0 auto;
}

.blog-left-column {
	width: 140px;
	float: left;
	border: 1px solid #000;
	height: 600px;
	margin: 15px;
	text-align: center;
	background-color: #f1f1f1;
}


.blog-body-content {
	overflow: hidden;
	border: 1px solid #000;
	min-height: 600px;
	margin: 15px;
	padding: 15px;
		background-color: #f1f1f1;
}

.blog-right-column {
	border: 1px solid #000;
	width: 10%;
	float: right;
	height: 600px;
	margin: 15px;
		background-color: #f1f1f1;
		padding: 15px;
}

.subHeader
{
	font-weight: bold;
	
}

hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #e1e1e1;
    margin: 1em 0;
    padding: 0; 
}

@media only screen and (max-width: 1068px) {

.blog-right-column
{
display: none;

}

.site-logo
{
	width: 200px;
}

.blog-left-column {
	width: 240px;
	float: left;
	border: 1px solid #000;
	height: 100%;
	margin: 15px;
	text-align: center;
	background-color: #f1f1f1;
}

.blog-body-content {
	overflow: hidden;
	border: 1px solid #000;
	min-height: 600px;
	margin: 15px;
	padding: 15px;
		background-color: #f1f1f1;
		
		font-size: 24pt;
}



.closer
{
clear: both;
width: 100%;
height: 10px;
}
</style>
<?php
error_reporting ( E_ALL );
ini_set ( 'display_errors', 1 );

$dbConnection = databaseConnection ();

require_once dirname ( dirname ( __FILE__ ) ) . '/SunLibraryModule.php';

class blog extends SunLibraryModule {

	protected $dbConnection;
	const ModuleDescription = 'Blog. <br> Database drive, left and right sides left is Image, right is Database of Services that are included.';
	const ModuleAuthor = 'Sunsetcoders Development Team.';
	const ModuleVersion = '0.1';
	
	function __construct($dbConnection) {
		parent::__construct ( $dbConnection );
	}
	
	public function blog() {
	}
	
	public function callToFunction() {
		?>
		<div id="blog-background">

			<div class="blog-left-column"><img class="site-logo" src="Images/logo.png" alt="Logo Image"><br><br>FourRealMum Blog</div>
						<div class="blog-right-column">
			<div>Archives</div>
			<hr>
			<?php
				$stmt = $this->objDB->prepare ( "SELECT MONTH(blogDate) AS blogMonth, COUNT(*) AS monthCount FROM blog GROUP BY MONTH(blogDate)" );
				$stmt->execute ();
		
				$stmt->bind_result ( $blogMonth, $monthCount);
		while ( $checkRow = $stmt->fetch () ) {
			?>
				<div class="archive-month"> * <?php echo date('F', mktime(0, 0, 0, $blogMonth, 10));; ?> (<?php echo $monthCount; ?>)</div>

				<?php
		}
		?>
		</div>
			<div class="blog-body-content">
				<?php
				$stmt = $this->objDB->prepare ( "SELECT blogSubject, blogDate, blogContent FROM blog ORDER BY blogDate" );
				$stmt->execute ();
		
				$stmt->bind_result ( $blogSubject, $blogDate, $blogContent );
				while ( $checkRow = $stmt->fetch () ) {
					?>
					<div class="subHeader"><?php echo $blogSubject; ?> </div>
					<div><?php echo $blogDate; ?> </div>
					<div><?php echo $blogContent; ?> </div>
					<br><hr><br>
					
					<?php
					
				}
			?>
			</div>

</div>

<?php
	}
	protected function assertTablesExist() {
		$val = mysqli_query ( $this->objDB, 'select 1 from `blog` LIMIT 1' );
		
		if ($val !== FALSE) {
		} else {
			$createTable = $this->objDB->prepare ( "CREATE TABLE blog (blogID INT(11) AUTO_INCREMENT PRIMARY KEY, blogSubject VARCHAR(100) NOT NULL, blogDateTime VARCHAR(100) NOT NULL, blogPublish VARCHAR(100) NOT NULL, blogContent TEXT NOT NULL)" );
			$createTable->execute ();
			$createTable->close ();
		}
	}
}
