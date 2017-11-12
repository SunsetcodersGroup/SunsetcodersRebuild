<style>
#whatwedo-background { width: 100%; text-align: center; clear: both; height: 475px;  }
.whatwedo-row { display: inline-block; border: 1px solid #000; text-align: center; clear: both; width: 150px; padding: 10px; height: 300px; vertical-align: top; }
.whatwedo-header h1 { text-align: center; font-size: 30pt; text-transform: uppercase; }
.whatwedo-subheader h2 { text-align: center; font-size: 18pt; text-transform: uppercase; }
.whatwedo-image { float: left; width: 49%; }
.whatwedo-content { float: right; width: 49%; }
.whatwedo-content p { text-align: left; font-size: 10pt; font-style: italic; }
.whatwedo-content h5 { font-size: 12pt; text-align: left; text-transform: uppercase; }

.whatwedo-title-window h2 { height: 30px; clear:both; text-transform: uppercase; font-size: 12pt; }
.whatwedo-image-window { height: 150px; clear: both;  }
@media only screen and (max-width: 1024px) {
	.sampleBox {
		width: 700px;
		font-size: 26pt;
	}
}

</style>

<?php
$dbConnection = databaseConnection ();

class whatwedo  {

	
	const ModuleDescription = '<i>Database Driven, What We Do List..</i>';
	const ModuleAuthor = 'Sunsetcoders Development Team.';
	const ModuleLayout = '2';
	const ModuleClassification = 'Services';
	const ModuleVersion = '0.2';
	
	public static function callToPromethues() {
		
		echo 'What We Do Administration';
	}
	
	public static function callToFunction() {
	
	?>
	<span class="lineOut" id="Services"></span>
	<div id="whatwedo-background">
		<div class="body-content">
			<div class="whatwedo-header"><h1>Our Website Progress</h1></div>
			
			<div class="whatwedo-row">
				<div class="whatwedo-title-window"><h2>Client Meeting</h2></div>
				<div class="whatwedo-image-window"><img src="Images/client-meeting.jpg" width="155"></div>
				<div class="whatwedo-content-window">Meetings with the client to discuss your dream website. Information Gathering </div>
			</div>
			
			<div class="whatwedo-row">
				<div class="whatwedo-title-window"><h2>Planning</h2></div>
				<div class="whatwedo-image-window"><img src="Images/planning.jpg" width="155"></div>
			 	<div class="whatwedo-content-window">Our Design team puts together an designs your dream website. </div>
			 </div>
			 
			 <div class="whatwedo-row">
				<div class="whatwedo-title-window"><h2>Client feedback.</h2></div>
				<div class="whatwedo-image-window"><img src="Images/client-meeting.jpg" width="155"></div>
				<div class="whatwedo-content-window">Once the client is satisfied with the design and layout of the website production begins.  </div>
			</div>
			
			<div class="whatwedo-row">
				<div class="whatwedo-title-window"><h2>Development</h2></div>
				<div class="whatwedo-image-window"><img src="Images/software-development.jpg" width="155"></div>
			 	<div class="whatwedo-content-window">Our Seasoned Developers make your dream website. </div>
			 </div>
			 
			 <div class="whatwedo-row">
				<div class="whatwedo-title-window"><h2>Implementation.</h2></div>
				<div class="whatwedo-image-window"><img src="Images/upload.png" width="155"></div>
			 	<div class="whatwedo-content-window">Upload and testing. </div>
			 </div>
	
		</div>
	</div>
	<?php
	}
	
}
