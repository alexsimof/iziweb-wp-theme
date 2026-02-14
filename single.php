<?php get_header(); ?>


<main id="primary" class="site-main">
		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
            
			get_template_part( 'template-parts/blog-post', get_post_type() );
			

		endwhile; // End of the loop.
		endif;
		?>

</main><!-- #main -->

<?php get_footer(); ?>