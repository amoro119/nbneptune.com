<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

	<div id="footer" role="contentinfo">
		<div class="copyright">
            <p>宁波海神救生设备有限公司&nbsp;&nbsp;&nbsp;&nbsp;联系电话 : 86-021-58947671-72-73&nbsp;&nbsp;传真 : 86-021-58945098&nbsp;&nbsp;沪ICP备07507270号</p>
        </div>
	</div><!-- #footer -->

</div><!-- #wrapper -->
 <!-- JavaScript at the bottom for fast page loading -->
  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
  <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>-->
   <!-- <script>window.jQuery || document.write("<script src='/js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>-->
  <script>document.write("<script src='/js/libs/jquery.backgroundPosition.js'>\x3C/script>")</script>

  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script type="text/javascript">
  (function($){
	$('#access ul li')
		.css( {backgroundPosition: "0 -113px"} )
		.mouseover(function(){
			$(this).stop().animate(
			{backgroundPosition:"(0 0)"},
			{duration:500})
		})
		.mouseout(function(){
			$(this).stop().animate(
				{backgroundPosition:"(0 -113)"},
				{duration:500})
		});
		})(jQuery);
	</script>
  <!-- end scripts-->


  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
  <![endif]-->
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
