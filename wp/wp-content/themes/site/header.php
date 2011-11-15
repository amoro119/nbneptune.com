<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
  <div id="container">
    <div id="header">
        <div class="logo">
           <a href="/"><?php _e("<!--:en--><img src='/images/logo_en.gif'><!--:--><!--:zh--><img src='/images/logo.gif'><!--:-->"); ?></a>
        </div>
        <div id="access" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
			  <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
			  <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</div><!-- #access -->
		<div class="clear"></div>
		<div class="topbar">
			<ul>				
			   <li><?php _e("<!--:en-->&nbsp;&nbsp;&nbsp;&nbsp;Ningbo Neptune Life-saving Equipment Co., Ltd.&nbsp;&nbsp;&nbsp;&nbsp;TEL:0086-574-83551500&nbsp;&nbsp;&nbsp;&nbsp;FAX:0086-574-83551510<!--:--><!--:zh-->&nbsp;&nbsp;&nbsp;&nbsp;宁波海神救生设备有限公司&nbsp;&nbsp;&nbsp;&nbsp;联系电话 : 0574-83551500&nbsp;&nbsp;&nbsp;&nbsp;传真 : 0574-83551510,0574-83551520<!--:-->"); ?></li> 	   
			</ul>
				<?php echo qtrans_generateLanguageSelectCode('both'); ?>
		</div>
		<div class="clear"></div>
    </div>