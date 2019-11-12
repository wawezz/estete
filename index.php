<?
get_header();
 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
 
        <h2><a href="<?the_permalink()?>"><?the_title()?></a></h2>
		<?the_content()?>
	
	<? endwhile;
else :
	echo '<p>There are no posts!</p>';
endif;
 
get_footer();
?>