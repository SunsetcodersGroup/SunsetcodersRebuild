<?php

class staff
{
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
				
								<!-- First Staff Member -->
				<div id="staff-window">
					<div class="staff-image"><img src="Images/dawn.jpg" alt="FEATURED IMAGE"></div>
					<div class="staff-information">
						<h3>Dawn Scott</h3>
						Social Media Manager
						</div>
				</div>

			</div>
		</div>
		
		<?php 
	}
}