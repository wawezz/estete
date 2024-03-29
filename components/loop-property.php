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
            <div class="p-1 font-weight-bold mt-2">
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
        </div>
        <div class="card-footer">
            <a href="<?php the_permalink()?>" class="btn btn-primary"><?php _e('more', 'estete-theme')?></a>
        </div>
    </div>
</div>