<?php
    /*
     *       Sahara Multipurpose Osclass Themes
     *       
     *       Copyright (C) 2017 OSCLASS.me
     * 
     *       This is Sahara Multipurpose Osclass Themes with Single License
     *  
     *       This program is a commercial software. Copying or distribution without a license is not allowed.
     *         
     *       If you need more licenses for this software. Please read more here <http://www.osclass.me/osclass-me-license/>.
     */
?>
<form action="<?php echo osc_base_url(true); ?>" method="get" role="search" class="nocsrf">
    <input type="hidden" name="page" value="search" />
    <fieldset>
        <div class="col-md-2">
            <div class="row">
                <input type="text" name="sPattern" class="depan form-control" placeholder="<?php echo osc_esc_html(__(osc_get_preference('keyword_placeholder', 'sahara'), 'sahara')); ?>" value="" /> </div>
        </div>
        <div class="col-md-2">
            <?php if ( osc_count_categories() ) { ?>
            <div class="row">
                <div class="cell selector">
                    <?php osc_categories_select('sCategory', null, __('Select a category', 'sahara')) ; ?> </div>
            </div>
            <?php } ?> </div>
        <div class="col-md-2">
            <div class="row">
                <div class="cell selector">
                    <?php sahara_countries_select('sCountry', 'sCountry', __('Select a country', 'sahara'));?> </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="row">
                <div class="cell selector">
                    <?php sahara_regions_select('sRegion', 'sRegion', __('Select a region', 'sahara')) ; ?> </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="row">
                <div class="cell selector">
                    <?php sahara_cities_select('sCity', 'sCity', __('Select a city', 'sahara')) ; ?> </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="row">
                <input type="submit" class="btn btn-primary depans" value="<?php echo osc_esc_html(__('Search','sahara')); ?>"> </div>
        </div>
    </fieldset>
</form>
<script>
$("#sCategory").addClass("form-control dpn", true);
</script>