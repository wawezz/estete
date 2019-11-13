<?php get_header()?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template align-items-center d-flex flex-column mb-5">
                <h1><?php _e('Oops!', 'estete-theme')?></h1>
                <h2>
                    <?php _e('404 Not Found', 'estete-theme')?>
                </h2>
                <div class="error-details">
                    <?php _e('Sorry, an error has occured, Requested page not found!', 'estete-theme')?>
                </div>
                <div class="error-actions mt-4">
                    <a href="/" class="btn btn-primary btn-lg">
                        <i class="fas fa-home"></i>
                        <?php _e('Take Me Home', 'estete-theme')?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>