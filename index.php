<?php get_header()?>
<div class="container p-3">
    <div class="row filter mb-2">
        <div class="col-12 justify-content-end">
            <i class="fas fa-filter filter-icon"></i>
            <div class="jumbotron filter-body flex-column">
                <h3 class="mb-3">
                    <?php _e('Filter by City', 'estete-theme')?>
                </h3>
                <select class="filter-city custom-select" multiple>
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
    <div class="loading-spin mb-2">
        <i class="fas fa-spinner fa-spin"></i>
    </div>
    <div class="row text-center properties-list">
    </div>
</div>

<script>
(function () {
    getProperties();
});
</script>

<?php get_footer()?>