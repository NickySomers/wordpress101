<?php get_header(); ?>

	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	
		<h2><?php the_title(); ?></h2>
		<div><?php the_content(); ?></div>
		<a href="<?php the_permalink(); ?>">Bekijk post</a>
		<hr>
	 <?php endwhile; else : ?>

	 	<p>Geen posts gevonden</p>

	 <?php endif; ?>
	
<?php get_footer(); ?>