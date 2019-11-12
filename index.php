<?php
get_header();
 
if ( have_posts() ) :

else :
	echo '<p>There are no posts!</p>';
endif;
 
get_footer();
?>