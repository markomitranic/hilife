<?php 
/*
Template Name: Home Template
*/

?> 


<?php get_header(); ?>




<!-- CONTENT -->

<!-- CAROUSEL PRELOAD -->

<style>
body:after{
    display:none;
    content: url(http://hilife.rs/wp-content/uploads/2015/06/slide1.jpg) url(http://hilife.rs/wp-content/uploads/2015/06/slide2.jpg) url(http://hilife.rs/wp-content/uploads/2015/06/slide3.jpg);
}
</style>
<!-- CAROUSEL -->
<div id="slidewrapper">
<div id="slide" class="slide1">
<img src="http://hilife.rs/wp-content/uploads/2015/06/slide1.jpg" style="visibility:hidden; width:100%;" alt=""></div></div>

<script type="text/javascript">
//Da zapocne ONLOAD carousel i proveri visinu
$(document).ready(function () {
slider();
//mora timeout na funkciju jer FF i Webkit ne renderuju sliku prve sekunde
setTimeout(function() {
	calcSlideHeight()
}, 100);
});
// funkcija menja slajdove jedan po jedan
function slider() {
	setTimeout(function() {
	$('#slide').removeClass("slide1");
	$('#slide').toggleClass("slide2");
	}, 5000); 
	setTimeout(function() {
	$('#slide').removeClass("slide2");
	$('#slide').toggleClass("slide3");
	}, 10000); 
	setTimeout(function() {
	$('#slide').removeClass("slide3");
	$('#slide').toggleClass("slide1");
	}, 15000);
	x = setTimeout("slider()", 15000); 
} 
</script>
<style>
.slide1 {
  background-image: url('http://hilife.rs/wp-content/uploads/2015/06/slide1.jpg');
}
.slide2 {
  background-image: url('http://hilife.rs/wp-content/uploads/2015/06/slide2.jpg');
}
.slide3 {
  background-image: url('http://hilife.rs/wp-content/uploads/2015/06/slide3.jpg');
}
</style>
<script>
//Funkcija koja proverava kada se menja velicina prozora i menja velicinu wrappera za slider
$( window ).resize(function() { calcSlideHeight(); });
function calcSlideHeight() {
	var slideheight = $('#slide').height();
	$('#slidewrapper').css("height", slideheight);
	//console.log(slideheight);

};
</script>


<div class="content">
<div id="homepage_logos"><div class="pure-g home">
	<section class="pure-u-1 pure-u-md-1-3">
	<img src="http://hilife.rs/wp-content/uploads/2015/06/waterpik_logo.png" class="companylogo" title="Waterpik" alt="Waterpik Logo">
	<header><h2>WATERPIK</h2></header>
	<p>Clinical research studies confirm that the Waterpik Water Flosser is the easy, more effective way to floss.</p>
	</section>
	<section class="pure-u-1 pure-u-md-1-3">
	<img src="http://hilife.rs/wp-content/uploads/2015/06/waterpik_logo.png" class="companylogo" title="Waterpik" alt="Waterpik Logo">
	<header><h2>WATERPIK</h2></header>
	<p>Clinical research studies confirm that the Waterpik Water Flosser is the easy, more effective way to floss.</p>
	</section>
	<section class="pure-u-1 pure-u-md-1-3">
	<img src="http://hilife.rs/wp-content/uploads/2015/06/waterpik_logo.png" class="companylogo" title="Waterpik" alt="Waterpik Logo">
	<header><h2>WATERPIK</h2></header>
	<p>Clinical research studies confirm that the Waterpik Water Flosser is the easy, more effective way to floss.</p>
	</section>
</div>
</div>
</div>

  
  <?php get_footer(); ?>