<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="/"><?php echo get_bloginfo( 'name' ); ?></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<?php
						wp_nav_menu(array(
							// 'menu' => 'primary',
							'container' => '',
							'theme_location' => 'primary',
							'items_wrap' => '<ul id="primary-menu" class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>'
						));
					?>
				</div>
			</div>
		</nav>
		
		<div class="container"> <!-- main container START -->