<?php get_header(); ?>

<div class="container py-4">
	<?php while(have_posts()) : the_post(); ?>
		<div class="my-4 px-4 py-3 bg-light">
			<img class='mr-3 img-fluid post-thumb d-md-flex' src='<?php the_post_thumbnail_url('thumbnail' ); ?>'/>
			<p class='text-muted'><?php the_date(); ?>, <?php comments_number() ?></p>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p><?php the_excerpt(); ?></p>
			<p><a href="<?php the_permalink(); ?>">Read more</a></p>
		</div>
	<?php endwhile; wp_reset_query(); ?>
	<?php the_posts_pagination( ); ?>
</div> 

<?php get_footer(); ?>