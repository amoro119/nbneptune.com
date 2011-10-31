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
				<h3><img src="/images/title_zizhi.gif" alt="" /></h3>
				<div class="peijian">
				<ul  class="productlist">
					<?php $posts = query_posts($query_string . '&orderby=date'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li>
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail');?></a>
					<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
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
