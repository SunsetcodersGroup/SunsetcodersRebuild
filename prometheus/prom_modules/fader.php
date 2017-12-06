<style>

.fadein { position:relative; height:365px; width:100%;  text-align: center; padding-bottom: 50px; }
.fadein img { position:absolute; left:0; top:0; width: 100%; height: 360px; }

.fadelinks, .faderandom { position:relative; height:332px; width:500px; }
.fadelinks > *, .faderandom > * { position:absolute; left:0; top:0; display:block; }

.multipleslides { position:relative; height:332px; width:500px; float:left; }
.multipleslides > * { position:absolute; left:0; top:0; display:block; }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
$(function(){
	$('.fadein img:gt(0)').hide();
	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
});
</script>
<?php

class fader
{
	public static function callToFunction()
	{
		?>
<div class="fadein">
<img src="https://farm3.static.flickr.com/2610/4148988872_990b6da667.jpg">
<img src="https://farm3.static.flickr.com/2597/4121218611_040cd7b3f2.jpg">
<img src="https://farm3.static.flickr.com/2531/4121218751_ac8bf49d5d.jpg">
</div>

		<?php 
	}
}