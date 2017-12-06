<style>
<!--
#latestwork-background { clear: both; width: 100%; height: auto; text-align: center; border-top: 1px solid #000; border-bottom: 1px solid #000; }
.latest-window { display: inline-block; width: 350px; margin: 15px;  vertical-align: top; }
.latest-content h2 { font-size: 12pt; font-weight: 600; }

.latest-image { height: 660px; text-align: center; }
.latest-image img { width: 300px; }

-->
</style>


<?php

class latest extends database
{
	public static function callToPage()
	{
		?>
		
		<div id="latestwork-background">
				<h1>Some of our Work</h1>

				<?php

                $baseCode = self::init()->prepare ( "SELECT latestImage, latestTitle, latestLink, latestDescription FROM latestwork " );
                if (! $baseCode->execute ()) {
                   echo "Execute failed: (" . $baseCode->errno . ") " . $baseCode->error;
                }
                $baseCode->bind_result ( $latestImage, $latestTitle, $latestLink, $latestDescription);

                while ( $checkRow = $baseCode->fetch () ) {

                    echo '<div class="latest-window">';
                    echo '<div class="latest-image"><a href="'.$latestLink.'"><img src="Images/Website/'.$latestImage.'" alt="FEATURED IMAGE" ></a></div>';

                    echo '<div class="latest-content"><h2>'.$latestTitle.'</h2></div>';
                    echo '</div>';
                }
                ?>
			
		</div>
		
		<?php 
	}
}