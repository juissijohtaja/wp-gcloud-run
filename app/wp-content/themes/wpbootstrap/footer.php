	</div> <!-- main container END -->

	<div class="navbar navbar-default navbar-fixed-bottom bg-dark pt-4 pb-5">
		<div class="container">
			<?php
				wp_nav_menu(array(
					// 'menu' => 'footer',
					'container' => '',
					'theme_location' => 'footer',
					'items_wrap' => '<ul id="footer-menu" class="navbar-nav me-auto my-2 my-sm-0">%3$s</ul>'
				));
			?>
		</div>
		<?php
			dynamic_sidebar( 'footer-1' )
		?>
	</div> 

<?php wp_footer(); ?>

<!-- hamburger menu script -->
<script>
	$(document).ready(function () {
		$('.second-button').on('click', function () {
			$('.animated-icon2').toggleClass('open');
		});
	});
</script>

</body>
</html>

