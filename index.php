<?php get_header() ?>
<div class="container p-3">
    <div class="row text-center">
        <?php 
        $args = array(
            'post_type'=> 'properties',
        //    'areas'    => 'painting',
            'orderby'        => 'name',
            'order'    => 'ASC',
            'posts_per_page' => -1            
            );              

        $the_query = new WP_Query( $args );
        if($the_query->have_posts() ) : 
            while ( $the_query->have_posts() ) : 
                $the_query->the_post(); ?>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                        <div class="card-body">
                            <h4 class="card-title"><?php the_title()?></h4>
                            <p class="card-text"><?php the_excerpt()?></p>
                        </div>
                        <div class="card-footer">
                            <a href="<?php the_permalink() ?>" class="btn btn-primary">Find Out More!</a>
                        </div>
                    </div>
                </div>
            <?php endwhile;
        else :
            echo '<div class="col-12">'.__('There are no posts!', 'estete-theme').'</div>';
        endif;
        ?>
    </div>
</div>
<?php get_footer(); ?>