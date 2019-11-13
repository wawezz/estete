<?php get_header()?>
<div class="container p-3">
    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div class="d-flex justify-content-center mb-5">
                <?php if (has_post_thumbnail()) :
                    the_post_thumbnail('large');
                else :
                    echo '<img src="'.get_template_directory_uri().'/assets/images/no-image.jpg" class="wp-post-image" />';
                endif; ?>
            </div>
            <h2><a href="<?php the_permalink()?>" class="text-dark"><?php the_title()?></a></h2>
            <div class="font-weight-bold mb-4">
                <?php
                    $terms = get_the_terms( get_the_ID(), 'cities' );
                            
                    if ( $terms && ! is_wp_error( $terms ) ) : 
    
                        $cities_links = array();
    
                        foreach ($terms as $term) {
                            $cities_links[] = $term->name;
                        }
                        
                        echo implode(", ", $cities_links);
    
                    endif; ?>
            </div>
            <?php the_content()?>
        
        <?php endwhile;
    endif; ?>
</div>
<?php get_footer()?>