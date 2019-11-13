<?php get_header()?>
<div class="container p-3">
    <header class="jumbotron my-4">
        <h2 class="display-4"><?php _e('A Warm Welcome!', 'estete-theme')?></h2>
        <p class="lead"><?php _e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.', 'estete-theme')?></p>
    </header>
    <div class="row filter">
        <span class="glyphicon glyphicon-plus"></span>
    </div>
    <div class="row text-center">
        <?php 
        $args = array(
            'post_type'=> 'properties',
        //    'areas'    => 'painting',
            'orderby'        => 'name',
            'order'    => 'ASC',
            'posts_per_page' => -1            
            );              

        $the_query = new WP_Query($args);
        if($the_query->have_posts()) : 
            while ($the_query->have_posts()) : 
                $the_query->the_post(); ?>
                <div class="card-wrapp col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <?php if (has_post_thumbnail()) :
                            the_post_thumbnail('medium');
                        else :
                            echo '<img src="'.get_template_directory_uri().'/images/no-image.jpg" class="wp-post-image" />';
                        endif; ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php the_title()?></h4>
                            <p class="card-text"><?php the_excerpt()?></p>
                        </div>
                        <div class="card-footer">
                            <a href="<?php the_permalink()?>" class="btn btn-primary"><?php _e('more', 'estete-theme')?></a>
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
<?php get_footer()?>