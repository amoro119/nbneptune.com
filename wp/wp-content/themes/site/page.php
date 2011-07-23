<?php
/**
 * 

 */

get_header(); ?>

		<div id="main">
			<div class="homeleft" role="main">
				<div class="content">
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
				</div>
			</div><!-- #content -->
			<?php get_sidebar(); ?>
		</div><!-- #container -->
		<div class="clear"></div>

<?php get_footer(); ?>