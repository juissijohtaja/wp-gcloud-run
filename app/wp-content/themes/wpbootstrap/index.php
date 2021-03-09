<?php get_header(); ?>

<div class="container py-4 mt-3">
	<?php while(have_posts()) : the_post(); ?>
		<div class="row">
			<div class="col-md-6">
				<a class="text-dark" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'blog-thumb', array( 'class' => 'featurette-image img-fluid mx-auto' ) ); ?>
				</a>
			</div>
			<div class="col-md-6 pl-md-5">
				<h2 class="mt-3 mt-md-4">
					<a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<p class="lead"><?php the_excerpt(); ?></p>
			</div>
		</div>
		<hr class="my-4">
		<?php endwhile; wp_reset_query(); ?>
		<?php the_posts_pagination( ); ?>
</div> 

<?php get_footer(); ?>