<?php get_header(); ?>

<div class="container py-4 mt-5">
	<?php while(have_posts()) : the_post(); ?>
		<div class="row featurette">
			<div class="col-md-6">
				<?php the_post_thumbnail( 'blog-thumb', array( 'class' => 'featurette-image img-fluid mx-auto' ) ); ?>
			</div>
			<div class="col-md-6 pl-md-5">
				<h2 class="featurette-heading ">
					<a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<p class="lead"><?php the_excerpt(); ?></p>
			</div>
		</div>
		<hr class="featurette-divider">
		<?php endwhile; wp_reset_query(); ?>
		<?php the_posts_pagination( ); ?>
</div> 

<?php get_footer(); ?>