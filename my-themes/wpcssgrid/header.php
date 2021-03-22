<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="site">
			<header class="masthead">
					<?php echo get_bloginfo( 'name' ); ?>
					<!-- Links -->
					<?php
								wp_nav_menu(array(
									// 'menu' => 'primary',
									'container' => '',
									'theme_location' => 'primary',
									'items_wrap' => '<ul id="primary-menu" class="navbar-nav ml-auto my-2 my-sm-0">%3$s</ul>'
								));
							?>
						<!-- Links -->
			</header><!-- .masthead -->