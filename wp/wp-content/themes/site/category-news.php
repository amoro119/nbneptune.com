<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<div id="main">
			<div class="homeleft" role="main">
				<div class="content">
				<h3><?php _e("<!--:en--><img src='/images/title_news_en.gif'><!--:--><!--:zh--><img src='/images/title_news.gif' /><!--:-->"); ?></h3>
				<div class="news">
				<ul  class="newslist">
					<?php $posts = query_posts($query_string . '&orderby=date'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li>
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a><span class="date"><?php the_time('Y-m-j') ?></span>
					</li>
					<?php endwhile; endif;wp_reset_query(); ?>
			</ul>
			<?php wp_pagenavi(); ?>
				</div>
				<div class="clear"></div>
				</div>
			</div><!-- #content -->
			<?php get_sidebar(); ?>
		</div><!-- #container -->
		<div class="clear"></div>

<?php get_footer(); ?>
