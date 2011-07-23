<?php
/**
 * Template Name: 联系我们

 */

get_header(); ?>

		<div id="main">
			<div class="homeleft" role="main">
				<div class="companyintro">
					<h1><img src="/images/gongsijianjie.gif"></h1>
					<div class="featuredimg">
						<img src="/images/pic.jpg">
					</div>
					<?php 
						$page_id = 7;
						$page_data = get_page( $page_id );
						$content = apply_filters('the_content', $page_data->post_content);
						echo $content; // Output Content
					?>
					<a href="#">Read More</a>
				</div>
				<div class="newproduct">
					<h1><img src="/images/xinpinjieshao.gif"></h1>
				</div>
				<div class="newscenter">
					<h1><img src="/images/xinwenzhongxin.gif"></h1>
					<div class="newsblock">
						<h2>俄称中国造船业完成量明显增加</h2>
						<p>据俄罗斯军工新闻网3月29日报道，2011年1月至2月中国造船厂建成的船只数量同比增长了7.8%，完成的船舶吨位总和为840万吨……</p>
					</div>
				</div>
			</div><!-- #content -->
			<?php get_sidebar(); ?>
		</div><!-- #container -->
		<div class="clear"></div>

<?php get_footer(); ?>
