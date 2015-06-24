

<!-- FOOTER -->

<footer class="footerwrap">
<div class="footer"><div class="pure-g">
	<div class="pure-u-1 pure-u-md-3-5">
	<?php

		// Get the nav menu based on $menu_name (same as 'theme_location' or 'menu' arg to wp_nav_menu)
	    // This code based on wp_nav_menu's code to get Menu ID from menu slug

	    $menu_name = 'footer_nav';

	    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
		$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = '<ul id="menu-' . $menu_name . '">';
		foreach ( (array) $menu_items as $key => $menu_item ) {
		    $title = $menu_item->title;
		    $url = $menu_item->url;
		    $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
		}
		$menu_list .= '</ul>';
	    } else {
		$menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
	    }
	    // $menu_list now ready to output
	    echo $menu_list;
	?>

	</div>
	<div class="pure-u-1 pure-u-md-1-5"><p>Pratite nas</p>
		<ul class="footer-social">
		<li class="footer-social-icon-fb"></li>
		<li class="footer-social-icon-tw"></li>
		<li class="footer-social-icon-pin"></li>
		<li class="footer-social-icon-in"></li>
		</ul>
	</div>
	<div class="pure-u-1 pure-u-md-1-5"><p>Primajte novosti na e-mail</p>
		<div class="footer-email"><span class="footer-email-label">E-Mail</span><span class="footer-email-icon"></span></div>
	</div>
</div></div>


<div class="copyright"><p>Copyright &copy 2015 HiLiFE. All right reserved.<br>Design by <a href="http://www.nomaddash.com" target="_blank">Nomad Dash</a></p></div>



</footer>



<script>
//Da MOBILNI HEADER MENI OTVARA I ZATVARA

(function (window, document) {
document.getElementById('toggle').addEventListener('click', function (e) {
    document.getElementById('tuckedMenu').classList.toggle('custom-menu-tucked');
    document.getElementById('toggle').classList.toggle('x');

});
})(this, this.document);
</script>



</body>
</html>