<?php get_header()?>
<div class="container p-3">
    <?php if (have_posts()) :
        while (have_posts()) : the_post(); 
                if (has_post_thumbnail()) :
                    the_post_thumbnail('thumbnail');
                else :
                    echo '<img src="'.get_template_directory_uri().'/images/no-image.jpg" class="wp-post-image" />';
                endif; ?>
            <h2 class="text-dark mb-4"><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
            <?php the_content()?>
        
        <?php endwhile;
    endif; ?>
</div>
<?php get_footer()?>