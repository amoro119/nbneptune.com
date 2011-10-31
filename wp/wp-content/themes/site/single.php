<?php if ( in_category( 'news' ) ) {
 include(TEMPLATEPATH . '/single-news.php');
}
else if ( in_category( 'zizhi' ) ) {
 include(TEMPLATEPATH . '/single-zizhi.php');
}
 else{include(TEMPLATEPATH . '/single-other.php');}
?>

