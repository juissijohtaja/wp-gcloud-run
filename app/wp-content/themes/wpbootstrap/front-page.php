<?php get_header(); ?>

<article id='homepage-hero' class='bg-dark py-5 px-5 my-4 text-center'>
	<h1 class='display-4 mt-5 mb-4 text-light'><?php the_title(); ?></h1>
	<?php while(have_posts()) : the_post(); ?>
		<div class='mt-2 mb-1 text-light'><?php the_content(); ?></div>
	<?php endwhile; wp_reset_query(); ?>
</article>

<div class="row row-cols-1 row-cols-md-2 g-4 my-4">
	<?php
		$latest_blog_posts = new WP_Query( array( 'posts_per_page' => 4 ) );
		if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post();
		?>
		<div class="col">
			<div class="card">
				<img class='card-img-top' src='<?php the_post_thumbnail_url('medium_large' ); ?>'/>
				<div class="card-body">
					<h5 class="card-title"><a class='text-dark' href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
					<p class="card-text"><?php the_excerpt(  ); ?></p>
				</div>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>

	<?php
		// dynamic_sidebar( 'sidebar-1' )
	?>

<?php get_footer(); ?>