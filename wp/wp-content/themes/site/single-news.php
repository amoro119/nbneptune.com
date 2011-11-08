<?php
/**
 * 

 */

get_header(); ?>

		<div id="main">
			<div class="homeleft" role="main">
				<div class="content">
				<h3><?php _e("<!--:en--><img src='/images/title_news_en.gif'><!--:--><!--:zh--><img src='/images/title_news.gif' /><!--:-->"); ?></h3>
				<h4 class="title"><?php the_title(); ?></h4>
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
				</div>
			</div><!-- #content -->
			<?php get_sidebar(); ?>
		</div><!-- #container -->
		<div class="clear"></div>

<?php get_footer(); ?>