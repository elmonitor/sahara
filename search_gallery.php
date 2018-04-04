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
<style>
.owl-pagination {
    display: none;
}</style>
<?php osc_get_premiums($max = osc_get_preference('premiumads_search_ads', 'sahara')) ;
    if( osc_count_premiums() > 0 ) { ?>
                                        <div class="catalogi"><h4><?php _e("Premium listings", 'sahara'); ?></h4></div>
<div class="product-pages">
                                        <div id="owl-demo33" class="owl-carousel">
                                            <?php while ( osc_has_premiums() ) { ?>
                                            <div class="item premi productbox caption">
<div class="label-premium"><?php _e("Premium", 'sahara'); ?><b></b></div>
                                                <?php if( osc_count_premium_resources() ) { ?> <span class="hiden cat-label cat-label-label2"><i class="fa fa-<?php echo saharas_category_icon( osc_premium_category_id() ); ?> warna"></i></span><a href="<?php echo osc_premium_url() ; ?>"><img class="lazyOwl" data-src="<?php echo osc_resource_thumbnail_url() ; ?>" alt="<?php echo osc_esc_html(osc_premium_title()) ; ?>" title="<?php echo osc_esc_html(osc_premium_title()) ; ?>"></a>
                                                <?php } else { ?> <span class="hiden cat-label cat-label-label2"><i class="fa fa-<?php echo saharas_category_icon( osc_premium_category_id() ); ?> warna"></i></span><a href="<?php echo osc_premium_url() ; ?>">
                                                     <img class="lazyOwl" data-src="<?php echo osc_current_web_theme_url('images/no_photo.gif') ; ?>" alt="<?php echo osc_esc_html(osc_premium_title()) ; ?>" title="<?php echo osc_esc_html(osc_premium_title()) ; ?>"/></a>
                                                <?php } ?>
                                                <div class="productprice">
                                                    <?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled(osc_premium_category_id()) ) { ?>
                                                    <div class="pricetext">
                                                        <?php echo osc_format_price(osc_premium_price(), osc_premium_currency_symbol()); ?>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="producttitle aribudin">
                                                    <a href="<?php echo osc_premium_url() ; ?>">
                                                        <?php echo osc_premium_title(); ?>
                                                    </a>
                                                </div>
                                                <div class="centered">
                                                    <?php if(osc_premium_city()!='' ) { ?><strong><i class="fa fa-map-marker"></i></strong>
                                                    <?php echo osc_premium_city(); ?>
                                                    <?php } ?> &middot;
                                                    <?php if(osc_premium_region()!='' ) { ?>
                                                    <?php echo osc_premium_region(); ?>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <?php } ?> 
                                        </div></div>
                                        <?php } ?> 
<div class="catalogi"><h4><?php _e("Latest listings", 'sahara'); ?></h4></div>
<div class="product-pages">                                    
<?php while(osc_has_items()) { ?>
<div class="<?php osc_run_hook("highlight_class"); ?> item col-lg-3 col-md-4 col-sm-3 col-xs-4 four-6 three-12">
<?php if( osc_item_is_premium() ) { ?>
<div class="label-premium"><?php _e("Premium", 'sahara'); ?><b></b></div>
<?php } ?>
    <div class="col-items">
<span class="hiden cat-label cat-label-label2"><i class="fa fa-<?php echo saharas_category_icon( osc_item_category_id() ); ?> warna"></i></span>
        <?php if( osc_images_enabled_at_items() ) { ?>
        <?php if(osc_count_item_resources()) { ?> <a href="<?php echo osc_item_url(); ?>"><img class="img-responsiver" src="<?php echo osc_resource_thumbnail_url(); ?>" title="<?php echo osc_esc_html(osc_item_title()) ; ?>" alt="<?php echo osc_esc_html(osc_item_title()) ; ?>" /></a>
        <?php } else { ?> <a href="<?php echo osc_item_url(); ?>"><img class="img-responsiver" src="<?php echo osc_current_web_theme_url('images/no_photo.gif'); ?>" title="<?php echo osc_esc_html(osc_item_title()) ; ?>" alt="<?php echo osc_esc_html(osc_item_title()) ; ?>" /></a>
        <?php } ?>
        <?php } ?>
        <div style="text-align:center;" class="caption">
            <?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { ?>
            <p><strong><?php echo osc_format_price(osc_item_price()); ?></strong></p>
            <?php } ?>
            <div class="aribudin">
                <a href="<?php echo osc_item_url(); ?>"><?php echo osc_item_title(); ?></a>
            </div>
            <br>
            <div class="locale">
                <?php if(osc_item_city()!='' ) { ?><strong><i class="fa fa-map-marker"></i></strong>
                <?php echo osc_item_city(); ?>
                <?php } ?> &middot;
                <?php if(osc_item_region()!='' ) { ?>
                <?php echo osc_item_region(); ?>
                <?php } ?> 
            </div>
        </div>
    </div>
</div>
<?php } ?>
</div>