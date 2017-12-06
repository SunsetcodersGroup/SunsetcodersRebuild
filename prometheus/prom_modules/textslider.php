<style>
@keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}

#fullwidth {
	clear: both;
	width: 100%;
	border-bottom: 2px #fe750b solid;
	border-top: 2px #fe750b solid;	
	margin-top: 50px;
}
div#slider {
	background-color: #fff;
	overflow: hidden;


	height: 500px;

	
}

.container {
	margin: 0 auto;
	width: 950px;
	padding: 0px 10px;
	background: url(images/mainBG.gif) repeat-y;
}
div#slider figure img {
	width: 20%;
	float: left;
}

div#slider figure {
	position: relative;
	width: 500%;
	margin: 0;
	left: 0;
	text-align: left;
	animation: 20s slidy infinite;
	z-index: 1;
}

.overText {
	width: 100%;
	margin-top: -360px;
	z-index: 2;
	position: absolute;
	font-size: 1em;
}

.left-body-cut {
	float: right;
	margin: 0 auto;
	width: 512px;
}

.right-body-cut {
	text-align: right;
	float: left;
	margin: 0 auto;
	width: 512px;
}

.overBottom {
clear: both;
	position: relative;
	text-align: center;
	height: 150px;
	bottom: -20px;
	z-index: 2;
}

.text-content
{
padding-left: 60px;
}
</style>

<?php

require_once dirname ( dirname ( __FILE__ ) ) . '/SunLibraryModule.php';

class textslider {
	
	const ModuleDescription = 'TextSlider. <br> <i>Database Driver Slider, with permanent Text over the slides.</i>';
	const ModuleAuthor = 'Sunsetcoders Development Team.';
	const ModuleVersion = '0.1';
	
	public static function callToFunction() {
		
		global $dbConnection;
		
		?>
		<div id="fullwidth">
		<div class="container">
		<div id="slider">
			<figure>
		
			<?php 
			$baseCode = $dbConnection->prepare ( "SELECT imageToSlide FROM textslider ORDER BY sliderOrder" );
			$baseCode->execute ();
		
			$baseCode->bind_result ( $imageToSlide );
		
			while ( $checkRow = $baseCode->fetch () ) {
			
				echo '<img src="/Images/' . $imageToSlide . '" alt="">';
			}
			?>
			</figure>
		</div>
	</div>
	</div>
		<?php
	}
	
	protected function assertTablesExist() {
		
		$val = mysqli_query ( $this->objDB, 'select 1 from `textslider` LIMIT 1' );
		
		if ($val !== FALSE) {
		} else {
			$createTable = $this->objDB->prepare ( "CREATE TABLE textslider (sliderID INT(11) AUTO_INCREMENT PRIMARY KEY, imageToSlide VARCHAR(100) NOT NULL, sliderOrder DECIMAL(3,0) NOT NULL)" );
			$createTable->execute ();
			$createTable->close ();
		}
	}
	
}
