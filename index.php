<?php get_header()?>
<div class="container p-3">
    <div class="row filter mb-2">
        <div class="col-12 justify-content-end">
            <i class="fas fa-filter filter-icon"></i>
            <div class="jumbotron filter-body">
                <select class="custom-select" multiple>
                    <?php
                        $terms = get_terms(array(
                            'taxonomy' => 'cities',
                            'hide_empty' => false,
                        ));

                        foreach($terms as $term){
                            ?>
                                <option value="<?php echo $term->slug?>"><?php echo $term->name?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <?php 
        $args = array(
            'post_type'=> 'properties',
            'tax_query' => array(
                array (
                    'taxonomy' => 'cities',
                    'field' => 'slug',
                    'terms' => 'detroit',
                )
            ),
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
                            echo '<img src="'.get_template_directory_uri().'/assets/images/no-image.jpg" class="wp-post-image" />';
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