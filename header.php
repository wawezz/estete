<!DOCTYPE html>
<html lang="<?php language_attributes()?>">

<head>

    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description')?>">
    <meta name="author" content="<?php bloginfo('name')?>">

    <title><?php bloginfo('name')?></title>
    <?php wp_head()?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

 
<body <?php body_class()?>>
 
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo home_url()?>"><?php bloginfo('name')?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php wp_nav_menu([
                'theme_location'  => 'header_menu',
                'menu'            => '', 
                'container'       => 'div', 
                'container_class' => 'collapse navbar-collapse', 
                'container_id'    => 'navbarResponsive',
                'menu_class'      => 'navbar-nav ml-auto', 
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ]) ?>
        </div>
    </nav>
</header>