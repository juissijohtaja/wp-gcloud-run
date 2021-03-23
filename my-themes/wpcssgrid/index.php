<?php get_header(); ?>

<main id="content" class="main-content"> <!-- main content START -->
	<?php while(have_posts()) : the_post(); ?>
		<div class="row">
			<div class="col-md-6">
				<a class="text-dark" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'blog-thumb', array( 'class' => 'featurette-image img-fluid mx-auto' ) ); ?>
				</a>
			</div>
			<div class="col-md-6 pl-md-5">
				<h2 class="mt-3 mt-md-0 mt-lg-4">
					<a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<div class="mt-3"><?php the_excerpt(); ?></div>
			</div>
		</div>
		<hr class="my-4">
	<?php endwhile; wp_reset_query(); ?>
	<?php the_posts_pagination( ); ?>
</main> <!-- main content END -->

<?php get_footer(); ?>