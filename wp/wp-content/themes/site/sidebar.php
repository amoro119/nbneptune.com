<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<div class="side">
	<?php if(qtrans_getLanguage()=='en'): ?>
		<div class="homeproduct sideen">
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'menu' => '边栏产品列表' ) ); ?>
		</div>
    <?php endif; ?>
    <?php if(qtrans_getLanguage()=='zh'): ?>
		<div class="homeproduct">
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'menu' => '边栏产品列表' ) ); ?>
		</div>
    <?php endif; ?>
				
				<div>
					<a href="/?page_id=13"><img src="/images/kehuzhongxin.jpg"></a>
					<a href="#"><img src="/images/qiyewenhua.jpg"></a>
					<a href="/?cat=10"><img src="/images/rongyuzizhi.jpg"></a>
				</div>
</div>