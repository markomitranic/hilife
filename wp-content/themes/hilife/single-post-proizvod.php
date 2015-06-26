 <?php 
/*
Template Name: Single_Post (Datum) Template
*/

?> 

<?php get_header(); ?>



<!-- CONTENT -->
<nav>
<div class="submenu">
	<ul>
	<li>O Waterpiku</li>
	<li>Irigatori</li>
	<li>Cetkice</li>
	<li>Kompletna Nega</li>
	<li>Uskoro</li>
	</ul>
</div>
</nav>

<main class="content">
<article id="product_page">
	<div class="pure-g">
	<section class="pure-u-1 pure-u-md-4-24 product-page-column product-page-column-picker">
		<div class="pure-g product-image-picker-grid">
			<div class="pure-u-1 pure-u-md-2-3">
				<div class="pure-g">
					<div class="pure-u-1-4 pure-u-md-1 image-picker-option" data-action="changeImage"><a href="http://hilife.rs/img/waterpik_product_images/product_page/image1.png"><img src="http://hilife.rs/img/waterpik_product_images/product_page/image1.png" alt=""></a></div>
					<div class="pure-u-1-4 pure-u-md-1 image-picker-option" data-action="changeImage"><a href="http://hilife.rs/img/waterpik_product_images/product_page/image2.jpg"><img src="http://hilife.rs/img/waterpik_product_images/product_page/image2.jpg" alt=""></a></div>
					<div class="pure-u-1-4 pure-u-md-1 image-picker-option" data-action="changeImage"><a href="http://hilife.rs/img/waterpik_product_images/product_page/image3.jpg"><img src="http://hilife.rs/img/waterpik_product_images/product_page/image3.jpg" alt=""></a></div>
					<div class="pure-u-1-4 pure-u-md-1 image-picker-option" data-action="changeImage"><a href="http://hilife.rs/img/waterpik_product_images/product_page/image4.jpg"><img src="http://hilife.rs/img/waterpik_product_images/product_page/image4.jpg" alt=""></a></div>
				</div>
			</div>
			<div class="pure-u-1 pure-u-md-1-3 product-page-column-accessories">

				<div class="pure-g">
					<div class="pure-u-1-8 pure-u-md-1 image-picker-option" data-action="changeImage"><a href="http://hilife.rs/img/waterpik_product_images/product_page/image6.jpg"><img src="http://hilife.rs/img/waterpik_product_images/product_page/image6.jpg" alt=""></a></div>
					<div class="pure-u-1-8 pure-u-md-1 image-picker-option" data-action="changeImage"><a href="http://hilife.rs/img/waterpik_product_images/product_page/image6.jpg"><img src="http://hilife.rs/img/waterpik_product_images/product_page/image6.jpg" alt=""></a></div>
					<div class="pure-u-1-8 pure-u-md-1 image-picker-option" data-action="changeImage"><a href="http://hilife.rs/img/waterpik_product_images/product_page/image6.jpg"><img src="http://hilife.rs/img/waterpik_product_images/product_page/image6.jpg" alt=""></a></div>
					<div class="pure-u-1-8 pure-u-md-1 image-picker-option" data-action="changeImage"><a href="http://hilife.rs/img/waterpik_product_images/product_page/image6.jpg"><img src="http://hilife.rs/img/waterpik_product_images/product_page/image6.jpg" alt=""></a></div>
					<div class="pure-u-1-8 pure-u-md-1 image-picker-option" data-action="changeImage"><a href="http://hilife.rs/img/waterpik_product_images/product_page/image6.jpg"><img src="http://hilife.rs/img/waterpik_product_images/product_page/image6.jpg" alt=""></a></div>
					<div class="pure-u-1-8 pure-u-md-1 image-picker-option" data-action="changeImage"><a href="http://hilife.rs/img/waterpik_product_images/product_page/image6.jpg"><img src="http://hilife.rs/img/waterpik_product_images/product_page/image6.jpg" alt=""></a></div>
					<div class="pure-u-1-8 pure-u-md-1 image-picker-option" data-action="changeImage"><a href="http://hilife.rs/img/waterpik_product_images/product_page/image6.jpg"><img src="http://hilife.rs/img/waterpik_product_images/product_page/image6.jpg" alt=""></a></div>
					<div class="pure-u-1-8 pure-u-md-1 image-picker-option" data-action="changeImage"><a href="http://hilife.rs/img/waterpik_product_images/product_page/image6.jpg"><img src="http://hilife.rs/img/waterpik_product_images/product_page/image6.jpg" alt=""></a></div>
				</div>
			</div>
		</div>
	</section>
	<script>
	// SKRIPT ZA HVATANJE DATA AKCIJA
		var actions = {};
		$(document.body).on('click', '[data-action]', function () {
		    var action = $(this).data('action');
			window.imageSource = $('img', this).attr('src');
		    if (actions.hasOwnProperty(action)) {
		        actions[action].apply(this, arguments);
		    } else if (console.error) {
		        console.error('Action ' + action + ' does not exist. Called by ', this);
		    }
		});
	// AKCIJA ZA TOGLOVANJE MODALNOG PROZORA
	actions.changeImage = function (e) {
	    e.preventDefault();
	    $('#product-image-hero-img').attr('src', imageSource);
	    $('#product-image-hero').css('background-image', 'url('+imageSource+')');
	    //HREF $('a, #product-image-hero').attr('href', 'imageSource');
	    

	};

	</script>
	<section class="pure-u-1 pure-u-md-10-24 product-page-column product-page-column-hero">
		<div id="product-image-hero">
			<img id="product-image-hero-img" src="img/waterpik_product_images/product_page/image1.png" alt="IME SLIKE">
		</div>
	</section>
	<section class="pure-u-1 pure-u-md-10-24 product-page-column product-page-column-text">
		<header><h1>WP-670 :: White Aquarius Professional Designer Series Water Flosser</h1></header>
		<div class="product-page-content">
		<p>The Waterpik® Aquarius™ Designer Series is the Easy and More Effective Way to Floss!™ Now available in Pearly White, with upgraded features and a satin chrome finish.</p>
		<p>It's the perfect way to add a little color to your life!</p>
		<p>The Aquarius™ Designer Series includes on/off water control on the handle, an LED information panel, 7 water flosser tips, and an all-new tip storage case. New pulse-modulation technology gives you customized water pulsation for the best possible cleaning with even more comfort. It provides maximum plaque removal (Floss Mode) and enhanced gum stimulation (Hydro-Pulse Massage Mode). The convenient 1-minute timer with a 30-second pacer ensures thorough water flossing of all areas.</p>
		<p>Waterpik® Water Flossers are clinically proven to be more effective than traditional dental floss and Sonicare® Air Floss (Model HX8181) for reducing plaque, gingivitis, and gum disease. And it's perfect for anyone with braces or implants, and those with crowns, bridges, and veneers.</p>

		<h2>Product Benefits</h2>
		<ul>
			<li>Effective Plaque Removal: Clinically Proven To Remove Up To 99.9% Of Plaque From Treated Areas In 3 Seconds</li>
			<li>Healthier Gums: Clinically Proven Up To 50% More Effective Than Traditional Dental Floss</li>
			<li>Ideal For Implants: Clinically Proven Up To 2X As Effective For Improving Gum Health Around Implants Vs. String Floss Using The Plaque Seeker® Tip</li>
			<li>Essential For Braces: Clinically Proven Up To 3X As Effective For Removing Plaque Around Braces Vs. String Floss Using The Orthodontic Tip</li>
			<li>Removes Plaque And Debris Deep Between Teeth And Below The Gumline Where Brushing And Traditional Flossing Can't Reach</li>
			<li>Leaves Your Mouth Feeling Incredibly Fresh And Clean</li>
			<li>Massages And Stimulates Gums To Enhance Circulation And Keep Your Gums Healthy</li>
			<li>Healthier Gums In Just 14 Days Guaranteed</li>
			<li>Great For People With Implants, And Those With Crowns, Bridges, And Veneers</li>
		</ul>

		<h2>Product Features</h2>
		<ul>
			<li>All New White And Satin Chrome Finish!</li>
			<li>7 Unique Tips For All Dental Needs</li>
			<li>Advanced Pressure Control System With 10 Settings</li>
			<li>On/Off Water Control On Handle</li>
			<li>2 Modes - Floss Mode And Hydro-Pulse Massage Mode</li>
			<li>1-Minute Timer With 30-Second Pacer</li>
			<li>LED Mode Indicators</li>
			<li>Enhanced Pressure Performance With 10% More Water Pressure</li>
			<li>Compatible With 120VAC/60Hz Outlets, For Use In North America Only</li>
			<li>Three-Year Warranty</li>
		</ul>

		<h2>Product Manuals</h2>
		<ul>
			<li><a href="https://www.waterpik.com/oral-health/pdfs/WP-660-instruction-manual">Owners Manual (PDF) Eng/Fr</a></li>
			<li><a href="https://www.waterpik.com/oral-health/pdfs/WP-660-quick-start_guide">Quick Start Guide (PDF) Eng/Fr</a></li>
		</ul>
		</div>
	</section>

	


</section>
</article>
</main>



 <?php get_footer(); ?>