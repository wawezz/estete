<?php get_header()?>
<div class="container p-3">
    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
    
            <h2 class="text-dark mb-4"><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
            <?php the_content()?>
        
        <?php endwhile;
    endif; ?>
</div>
<?php get_footer()?>