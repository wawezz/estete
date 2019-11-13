<?php get_header() ?>
<div class="container p-3">
    <?php 
    $args = array(
        'post_type'=> 'properties',
    //    'areas'    => 'painting',
        'order'    => 'ASC'
        );              

    $the_query = new WP_Query( $args );
    if($the_query->have_posts() ) : 
        while ( $the_query->have_posts() ) : 
            $the_query->the_post(); 
            the_title();
        endwhile;
    else :
        echo '<p>There are no posts!</p>';
    endif;
    ?>
</div>
<?php get_footer(); ?>