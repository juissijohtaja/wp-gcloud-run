<?php get_header(); ?>

<main id="content" class="main-content"> <!-- main content START -->
	<?php while(have_posts()) : the_post(); ?>
		<div class="halfleft">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'blog-thumb', array( 'class' => 'xxx' ) ); ?>
			</a>
		</div>
		<div class="halfright">
			<h3>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h3>
			<div><?php the_excerpt(); ?></div>
		</div>
	<?php endwhile; wp_reset_query(); ?>
	<?php the_posts_pagination( ); ?>
</main> <!-- main content END -->

<?php get_footer(); ?>