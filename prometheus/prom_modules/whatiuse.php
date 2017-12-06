
<style>
#whatiuse-background { 

clear: both; 
    width: 100%;  
    height: 150px;
    text-align: center; 
font-size: 0;
}

@keyframes whatiuse-backgroundseq { 
	100% { opacity: 1; }
}
#whatiuse-background img {
	animation: whatiuse-backgroundseq .5s forwards;
}
#whatiuse-background img:nth-child(1) {
	animation-delay: .5s;
}
#whatiuse-background img:nth-child(2) {
	animation-delay: 1s;
}
#whatiuse-background img:nth-child(3) {
	animation-delay: 1.5s;
}
    
    

#whatiuse-background img {
	width: 33.33%; 
	opacity: 0;
}

.use-image-window { display: inline-block; margin: 15px;}
.use-image-window img { height: 100px; width: 100px; }

#bootstrap { background-image: url('Images/bootstrap.png');  height: 100px; width: 100px; }
#bootstrap:hover{ background-image: url('Images/bootstraporange.png'); }

#css { background-image: url('Images/css.png');  height: 100px; width: 100px; }
#css:hover{ background-image: url('Images/cssorange.png'); }

#php { background-image: url('Images/php.png');  height: 100px; width: 100px; }
#php:hover{ background-image: url('Images/phporange.png'); }

#html { background-image: url('Images/html.png');  height: 100px; width: 100px; }
#html:hover{ background-image: url('Images/htmlorange.png'); }

#mysql { background-image: url('Images/mysql.png');  height: 100px; width: 100px; }
#mysql:hover{ background-image: url('Images/mysqlorange.png'); }

#git { background-image: url('Images/git.png');  height: 100px; width: 100px; }
#git:hover{ background-image: url('Images/gitorange.png'); }


</style>
<?php

class whatiuse
{
	public static function callToFunction()
	{
	
		?>
		
		<div id="whatiuse-background">
			<div class="body-content">
				 <div class="use-image-window" id="bootstrap"></div>
				 <div class="use-image-window" id="css"></div> 
				 <div class="use-image-window" id="php"> </div>
				 <div class="use-image-window" id="html"> </div>
                                                                            <div class="use-image-window" id="mysql"> </div>
                                                                            <div class="use-image-window" id="git"> </div>
			</div>
		</div>
		
		<?php 
	}
	
	public static function callToPage()
	{

		?>
		
		<div id="whatiuse-background">
			<div class="body-content">
				 <div class="use-image-window" id="bootstrap"></div>
				 <div class="use-image-window" id="css"></div> 
				 <div class="use-image-window" id="php"> </div>
				 <div class="use-image-window" id="html"> </div>
                                                                            <div class="use-image-window" id="mysql"> </div>
                                                                            <div class="use-image-window" id="git"> </div>
			</div>
		</div>
		
		<?php 
	}
	
}