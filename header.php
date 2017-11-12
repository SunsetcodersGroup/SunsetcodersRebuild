<style>
#header-background { width: 100%; clear: both; overflow: hidden; border-top: 2px solid #fe750b; height: 200px; }
.header-content { height: 100px; padding: 10px; }
.header-content button {   padding: 15px; margin-top: 25px; font-size: 16px; float: right; text-transform: uppercase; border: 1px solid #dadada; border-radius: 10px; background-color: #fff; }
.header-content a { pointer: cursor; }
.header-navigation { border-top: 1px solid #dadada; padding-top: 20px; }
.header-navigation a { text-decoration: none; color: #5a5a5a; text-transform: uppercase; margin-right: 20px; }
.menu-item {
  display: flex;
  justify-content: center;
  flex: 1;
  font-size: 20px;
  line-height: 30px;
  color: hsla(0, 0%, 80%, 1);
  background-color: hsla(0, 0%, 20%, 1);
  cursor: pointer;
}

</style>
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$('.menu-item').click(function() {
	var keyword = $(this).attr('ss');
	var scrollTo = $('#' + keyword);
	$('html, body').animate({
		scrollTop: scrollTo.offset().top
	}, 'slow');
});
});//]]>

</script>
<div id="header-background">
<div class="body-content">
<div class="header-content"><img src="Images/logoblack.png" height=80><a href="/Prometheus"><button>Login</button></a></div>
</div>
<div class="header-navigation">
	<div class="body-content">
		<a class="menu-item" ss="About" href="?About">About</a>
		<a href="?Services">Services</a>
		<a href="?Staff">Staff</a>
		<a href="?Contact">Contact</a>
	</div>
</div>

</div>

<?php
