<style>
#staff-fullpage { clear: both; height: 800px; background-color: #333333; width: 100%; }
.staff-display-window { display: inline-block;  width: 280px; height: 350px; margin: 20px; font-size: 10pt; text-align: center; vertical-align: top; background-color: #fff; }
.contact-team { clear: both; background: url('Images/meet.jpg'); height: 127px; vertical-align: top; line-height: 127px; color: #fff;  padding-left: 50px; top: 0; font-size: 14pt; }
.contact-teampage { clear: both; background-color: #fff; text-align: center;  }
.contact-baseplate { clear: both; background: url('Images/baseplate.jpg'); height: 73px; vertical-align: top;  }
.contact-description { clear: both; font-size: 18pt; text-align: center; background-color: #fff; vertical-align: top;  border-bottom: 1px solid #ebebeb; height: 150px; line-height: 150px;  }
</style>
<?php

class staff extends database
{
    public static function callToPage()
    {
         ?>
         <div id="staff-fullpage">
	<div class="body-content">
                           <div class="contact-team">Meet The Team</div>
                           <div class="contact-description">We do everything with our core values of honesty, hard work , and trust. </div>
                           <div class="contact-teampage">
                               <br><b> Project Management Team </b><br>
			
			<?php 
			
			$baseCode = self::init()->prepare ( "SELECT staffImage, staffName, staffTitle, staffEmail FROM staff " );
			if (! $baseCode->execute ()) {
				echo "Execute failed: (" . $baseCode->errno . ") " . $baseCode->error;
			}
			$baseCode->bind_result ( $staffImage, $staffName, $staffTitle, $staffEmail);
			
			while ( $checkRow = $baseCode->fetch () ) {

				echo '<div class="staff-display-window">';
				echo '<img src="Images/'.$staffImage.'" width=240><br>';
				echo $staffName.'<br>';
				echo $staffTitle.'<br>';
				echo $staffEmail.'<br>';
				echo '</div>';
			}
			
			?>
			
			
			</div>
                           <div class="contact-baseplate"></div>
		</div>
             </div>

		<?php 
		
	}
	
	public static function callToPrometheus()
	{
		
	}
	
	public static function callToFunction()
	{
		?>
		
		<style>
		#staff-content { background: url("/Images/staffbackground.jpg"); height: 500px; width: 100%; clear: both;  text-align: center; }
		#staff-window { border: 1px solid #000; border-radius: 15px; width: 170px; height: 190px; display: inline-block; margin: 10px; margin-top: 300px;  text-align: center; }
		.staff-image { height: 120px; width: 100%; clear: both; }
		.staff-image img { height: 120px; overlow: none; border-radius: 15px 15px 0 0; border-bottom: 1px solid #000; }
		</style>
		
		<div id="staff-content">
			<div class="body-content">

				<!-- First Staff Member -->
				<div id="staff-window">
					<div class="staff-image"><img src="Images/andrew.jpg" alt="FEATURED IMAGE"></div>
					<div class="staff-information">
						<h3>Andrew Jeffries</h3>
						Web-Development
					</div>
				</div>

				<!-- First Staff Member -->
				<div id="staff-window">
					<div class="staff-image"><img src="Images/simon.jpg" alt="FEATURED IMAGE"></div>
					<div class="staff-information">
						<h3>Simon Mitchell</h3>
						Web-development
					</div>
				</div>
				
								<!-- First Staff Member -->
				<div id="staff-window">
					<div class="staff-image"><img src="Images/mat.jpg" alt="FEATURED IMAGE"></div>
					<div class="staff-information">
						<h3>Mathew Norman</h3>
						General Manager
					</div>
				</div>
				


			</div>
		</div>
		
		<?php 
	}
}