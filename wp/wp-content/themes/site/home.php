<?php
/**
 * Template Name: 首页

 */

get_header(); ?>
		<div class="slideshow">
		  <?php if (function_exists('wp_flash_img_show')) {wp_flash_img_show('default');} ?>
		</div>
		<div id="main">
			<div class="homeleft" role="main">
				<div class="companyintro">
					<h1><?php _e("<!--:en--><img src='/images/gongsijianjie_en.gif'><!--:--><!--:zh--><img src='/images/gongsijianjie.gif'><!--:-->"); ?></h1>
					<div class="featuredimg">
						<img src="/images/pic.jpg">
					</div>
					<p>
						<?php 
						$page_id = 7;
						$page_data = get_page( $page_id );
						$content = $page_data->post_excerpt;
						echo $content; // Output Content
					?>
					</p>					
					<a style="text-decoration:underline;color:#cf2500;padding-right:20px" href="/?page_id=7">查看详细</a>
					<div class="clear"></div>
				</div>
				<div class="newscenter">
					<div class="title relative"><?php _e("<!--:en--><img src='/images/xinwenzhongxin_en.gif'><!--:--><!--:zh--><img src='/images/xinwenzhongxin.gif'><!--:-->"); ?><a class="absolute" href="/?cat=5">更多新闻</a></div>
					<div class="newsblock">
					<ul  class="newslist">
					<?php $posts = query_posts($query_string . 'posts_per_page=5&orderby=date&cat=8'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li>
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a><span class="date"><?php the_time('Y-m-j') ?></span>
					</li>
					<?php endwhile; endif;wp_reset_query(); ?>
					</ul>

					</div>
				</div>
					<div class="newproduct">
					<div class="title relative"><?php _e("<!--:en--><img src='/images/xinpinjieshao_en.gif'><!--:--><!--:zh--><img src='/images/xinpinjieshao.gif'><!--:-->"); ?><a class="absolute" href="/?cat=6">更多新品</a></div>
					<?php wp_carousel(0); ?>
				</div>
			</div><!-- #content -->
			<?php get_sidebar(); ?>
		</div><!-- #container -->
		<div class="clear"></div>

<?php get_footer(); ?>
