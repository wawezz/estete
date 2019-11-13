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