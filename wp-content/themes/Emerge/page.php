<?php get_header(); ?> 

<div class="container">
<?php if ( have_posts() ) : while ( have_posts()  ) : the_post(); ?>

			<p><?php the_content(); ?></p>

			<?php endwhile; else: ?>

			<p>Sorry this page does not exist!</p>

		<?php endif; ?>
</div>



<?php get_footer(); ?>