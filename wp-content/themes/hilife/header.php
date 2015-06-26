<!DOCTYPE html>
<html lang="rs">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/wp-content/themes/hilife/css/pure0.6.0/pure-min.css">
	<!--[if lte IE 8]>
    <link rel="stylesheet" href="/wp-content/themes/hilife/css/pure0.6.0/grids-responsive-old-ie-min.css">
	<![endif]-->
	<!--[if gt IE 8]><!-->
	<link rel="stylesheet" href="/wp-content/themes/hilife/css/pure0.6.0/grids-responsive-min.css">
	<!--<![endif]-->
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/hilife/css/style.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/hilife/css/others.css">

</head>
<body>
<script src="/wp-content/themes/hilife/js/jquery-2.1.4.min.js"></script>

<!-- HEADER -->

<header>
<div class="custom-menu-wrapper">
    <div class="pure-menu custom-menu custom-menu-top">
        <a href="http://hilife.rs" class="pure-menu-heading custom-menu-brand" title="HiLife healthcare Serbia">
        <img src="/wp-content/themes/hilife/img/HiLife_healthcare_Serbia.png" alt="HiLife healthcare Serbia Logo" title="HiLife healthcare Serbia Logo"><h1 class="header_H1">HiLife</h1></a>
        <a href="#" class="custom-menu-toggle" id="toggle"><s class="bar"></s><s class="bar"></s></a>
    </div>
    <div class="pure-menu pure-menu-horizontal pure-menu-scrollable custom-menu custom-menu-bottom custom-menu-tucked" id="tuckedMenu">
        <div class="custom-menu-screen"></div>
        <nav>
		<?php

		// Get the nav menu based on $menu_name (same as 'theme_location' or 'menu' arg to wp_nav_menu)
		    // This code based on wp_nav_menu's code to get Menu ID from menu slug

		    $menu_name = 'header_nav';

		    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
			$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

			$menu_items = wp_get_nav_menu_items($menu->term_id);

			$menu_list = '<ul id="menu-' . $menu_name . '" class="pure-menu-list">';
			foreach ( (array) $menu_items as $key => $menu_item ) {
			    $title = $menu_item->title;
			    $url = $menu_item->url;
			    $menu_list .= '<li class="pure-menu-item"><a href="' . $url . '" class="pure-menu-link">' . $title . '</a></li>';
			}
			$menu_list .= '</ul>';
		    } else {
			$menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
		    }
		    // $menu_list now ready to output
		    echo $menu_list;
		?>
        </nav>
    </div>
</div>

<div class="header">
	<div class="header-wrapper">
		<div class="pure-g">
			<div class="pure-u-md-1-4">
				<a href="http://hilife.rs" class="pure-menu-heading custom-menu-brand" title="HiLife healthcare Serbia">
				<img src="/wp-content/themes/hilife/img/HiLife_healthcare_Serbia.png" alt="HiLife healthcare Serbia Logo" title="HiLife healthcare Serbia Logo">
				<h1 class="header_H1">HiLife</h1>
				</a>
			</div>
			<div class="pure-u-md-3-4">
				<nav>
				<?php

				// Get the nav menu based on $menu_name (same as 'theme_location' or 'menu' arg to wp_nav_menu)
				    // This code based on wp_nav_menu's code to get Menu ID from menu slug

				    $menu_name = 'header_nav';

				    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
					$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

					$menu_items = wp_get_nav_menu_items($menu->term_id);

					$menu_list = '<ul id="menu-' . $menu_name . '" class="big_header_menu">';
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
				</nav>
			</div>
		</div>
	</div>
</div>
</header>