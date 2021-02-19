	</div> <!-- main container END -->

	<div class="navbar navbar-default navbar-fixed-bottom bg-dark">
		<div class="container">
			<?php
				wp_nav_menu(array(
					// 'menu' => 'footer',
					'container' => '',
					'theme_location' => 'footer',
					'items_wrap' => '<ul id="footer-menu" class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>'
				));
			?>
		</div>
		<?php
			dynamic_sidebar( 'footer-1' )
		?>
	</div> 

<?php wp_footer(); ?>
</body>
</html>

