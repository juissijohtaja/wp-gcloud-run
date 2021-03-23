		<footer class="colophon grid">
			<?php
				wp_nav_menu(array(
					// 'menu' => 'footer',
					'container' => '',
					'theme_location' => 'footer',
					'items_wrap' => '<ul id="footer-menu" class="">%3$s</ul>'
				));
			?>
			<?php dynamic_sidebar( 'footer-1' ) ?>
		</footer>

		<?php wp_footer(); ?>

		</div> <!-- site -->

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

