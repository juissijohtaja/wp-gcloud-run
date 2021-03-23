<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="site">
			<header class="masthead">
				<div class="topnav">
					<div class="brand">
						<a class="sitename" href="/">
							<?php echo get_bloginfo( 'name' ); ?>
						</a>
					</div>

					<!-- Collapse button -->
					<button class="navbar-toggler second-button" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
						<div class="animated-icon2"><span></span><span></span><span></span><span></span></div>
					</button>

					<!-- Collapsible content -->
					<div class="collapse navbar-collapse" id="navbar">
						<!-- Links -->
						<nav class="primary-nav">
							<?php
								wp_nav_menu(array(
									// 'menu' => 'primary',
									'container' => '',
									'theme_location' => 'primary',
									'items_wrap' => '<ul id="primary-menu" class="menu">%3$s</ul>'
								));
							?>
						</nav>
						<!-- Links -->
					</div>
					<!-- Collapsible content -->

				</div>
				<!-- Topnav -->

				


			</header><!-- .masthead -->

