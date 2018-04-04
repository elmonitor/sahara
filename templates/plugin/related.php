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
<div class="related col-md-12">
    <div id="owl-demo45" class="owl-carousel">
        <?php while(osc_has_items()) { ?>
        <div class="item productbox">
            <?php if( osc_images_enabled_at_items() ) { ?>
            <?php if(osc_count_item_resources()) { ?> <a href="<?php echo osc_item_url(); ?>"><img class="lazyOwl" data-src="<?php echo osc_resource_thumbnail_url(); ?>" alt="<?php echo osc_esc_html(osc_item_title()) ; ?>" title="<?php echo osc_esc_html(osc_item_title()) ; ?>"></a>
            <?php } else { ?> <a href="<?php echo osc_item_url(); ?>" class="overlay-background-color" title="<?php echo osc_esc_html(osc_item_title()) ; ?>">&nbsp;</a> <a href="<?php echo osc_item_url(); ?>"><img class="lazyOwl" data-src="<?php echo osc_current_web_theme_url('images/no_photo.gif') ; ?>" alt="<?php echo osc_esc_html(osc_item_title()) ; ?>" title="<?php echo osc_esc_html(osc_item_title()) ; ?>"></a>
            <?php } ?>
            <?php } ?>
            <div class="producttitle aribudin">
                <a href="<?php echo osc_item_url(); ?>">
                    <?php echo osc_item_title(); ?></a>
            </div>
            <div class="productprice">
               <?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { ?><span class="pricetext"><?php echo osc_format_price(osc_item_price()); ?></span>
                <?php } ?> </div>
        </div>
        <?php } ?> </div>
</div>
<script src="<?php echo osc_current_web_theme_js_url('owl.carousel.js') ; ?>"></script> 
<script>
$("#owl-demo45").owlCarousel({
    items : 1,
    itemsDesktop : [1182,1],
    itemsDesktopSmall : [986,4],
    itemsTablet: [750,3],
    itemsTabletSmall: [430,2],
    itemsMobile : [280,1],
<?php if(osc_get_preference('sect12_view', 'sahara_theme') == "1") { ?>
     autoPlay: 5000,
    autoplay: true,
<?php } ?>
    lazyLoad : true,
    navigation : true,
     navigationText: [
      "<i class='fa fa-chevron-left'></i>",
      "<i class='fa fa-chevron-right'></i>"
      ],
  }); 
</script>