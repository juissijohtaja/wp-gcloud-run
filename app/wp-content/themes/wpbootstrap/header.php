<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>
	<body>

		<!--Navbar-->
		<nav class="navbar navbar-expand-md navbar-dark mb-4" style="background-color: #272643">
			<div class="container-fluid">
				<!-- Navbar brand -->
				<a class="navbar-brand" href="/"><?php echo get_bloginfo( 'name' ); ?></a>

				<!-- Collapse button -->
				<button class="navbar-toggler second-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent23"
								aria-controls="navbarSupportedContent23" aria-expanded="false" aria-label="Toggle navigation">
					<div class="animated-icon2"><span></span><span></span><span></span><span></span></div>
				</button>

				<!-- Collapsible content -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent23">

					<!-- Links -->
					<?php
							wp_nav_menu(array(
								// 'menu' => 'primary',
								'container' => '',
								'theme_location' => 'primary',
								'items_wrap' => '<ul id="primary-menu" class="navbar-nav me-auto my-2 my-sm-0">%3$s</ul>'
							));
						?>
					<!-- Links -->

				</div>
				<!-- Collapsible content -->
			</div>
		</nav>
		<!--/.Navbar-->
		
		<div class="container"> <!-- main container START -->