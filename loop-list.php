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
<?php if(osc_get_preference('sect1_view', 'sahara_theme')=="1" ) { ?>
                <div class="catalog">
                    <div class="pull-left warna"><i class="fa fa-star"></i>
                        <?php _e("Premium Ads", 'sahara'); ?> </div>
                    <div class="pull-right">
                        <a href="<?php echo osc_search_show_all_url();?>">
                            <?php _e("See all Ads", 'sahara'); ?> </a>
                    </div>
                </div>
                <?php osc_get_premiums($max=osc_get_preference('popularads_num_ads', 'sahara')) ; if( osc_count_premiums()> 0 ) { ?>
                <?php while ( osc_has_premiums() ) { ?>
                    <div class="list-product premi">
                         <div class="product-kiri">
<div class="label-premium hidden-vera-up"><?php _e("Premium", 'sahara'); ?><b></b></div>
                                <div class="ribbon ribbon-green">
                                <div class="banner">
                                    <div class="text"><?php _e("Premium", 'sahara'); ?></div>
                                </div></div>
                               <?php if( osc_count_premium_resources() ) { ?> 
                                      <a class="arve" href="<?php echo osc_premium_url() ; ?>"><img class="gambars" src="<?php echo osc_resource_thumbnail_url() ; ?>" alt="<?php echo osc_esc_html(osc_premium_title()) ; ?>" title="<?php echo osc_esc_html(osc_premium_title()) ; ?>"></a>
                                <?php } else { ?> 
                                      <a href="<?php echo osc_premium_url() ; ?>"><img class="gambars" src="<?php echo osc_current_web_theme_url('images/no_photo.gif') ; ?>" alt="<?php echo osc_esc_html(osc_premium_title()) ; ?>" title="<?php echo osc_esc_html(osc_premium_title()) ; ?>"/></a>
                                <?php } ?>
                          </div>
                          <div class="product-tengah">
                              
                              <h3 class="judul"><a href="<?php echo osc_premium_url() ; ?>"><?php echo osc_premium_title(); ?> </a></h3>
                              <?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled(osc_premium_category_id()) ) { ?>
                             <div class="pricemini pricolor hidden-xs-up">
		              <?php echo osc_format_price(osc_premium_price(), osc_premium_currency_symbol()); ?>
	                     </div>   
                            <?php } ?>
                              <div class="kontens"><p><?php echo osc_highlight( strip_tags( osc_premium_description() ) ); ?></p></div>
                              <div class="loc"><?php if(osc_premium_city()!='' ) { ?><span class="lokas"><strong><i class="fa fa-map-marker"></i></strong>
                              <?php echo osc_premium_city(); ?></span>
                              <?php } ?>
                              <?php if(osc_premium_region()!='' ) { ?>&middot;
                              <span class="lokas2"><?php echo osc_premium_region(); ?></span>
                              <?php } ?> <span class="catt"><strong><i class="fa fa-book"></i></strong> <?php echo osc_premium_category($locale = ""); ?></span> <span class="datt"><strong><i class="fa fa-calendar"></i></strong> <?php echo osc_format_date(osc_premium_pub_date()); ?></span></div>
<?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled(osc_premium_category_id()) ) { ?>
<div class="tags price-wrap  hidden-xs-down">
		<span class="tag-head"><p class="post-price"><?php echo osc_format_price(osc_premium_price(), osc_premium_currency_symbol()); ?></p></span>
	</div>
 <?php } ?>
                         </div>
                    </div>
              <?php } ?>
              <?php } ?>
    <?php } ?>       
    <?php if(osc_get_preference('sect2_view', 'sahara_theme')=="1" ) { ?>
                <div class="catalog topper">
                    <div class="pull-left warna"><i class="fa fa-tag"></i>
                        <?php _e("Latest Listings", 'sahara'); ?> </div>
                    <div class="pull-right">
                        <a href="<?php echo osc_search_show_all_url();?>">
                            <?php _e("See all Ads", 'sahara'); ?> </a>
                    </div>
                 </div>
                 <?php osc_query_item(array( "results_per_page"=> osc_get_preference('latest_num_ads', 'sahara'))); if( osc_count_custom_items() == 0) { ?>
                     <div class="list-product">
                     <p class="empty"><?php _e("No Latest Listings", 'sahara'); ?> </p>
                     </div>
                  <?php } else { ?>
                  <?php while ( osc_has_custom_items() ) { ?>
                      <div class="<?php osc_run_hook("highlight_class"); ?> list-product news reguler">
                      <div class="product-kiri">
<?php if( osc_item_is_premium() ) { ?>
<div class="label-premium  hidden-vera-up"><?php _e("Premium", 'sahara'); ?><b></b></div>
<?php } ?>
                           <?php if( osc_item_is_premium() ) { ?> <div class="ribbon ribbon-green">
                                <div class="banner">
                                    <div class="text"><?php echo osc_esc_html(__('Premium','sahara')); ?></div>
                                </div></div><?php } ?>
                           <?php if( osc_images_enabled_at_items() ) { ?>
                           <?php if(osc_count_item_resources()) { ?>
                               <a class="arve" href="<?php echo osc_item_url(); ?>"><img class="gambars" src="<?php echo osc_resource_thumbnail_url(); ?>" alt="<?php echo osc_esc_html(osc_item_title()) ; ?>" title="<?php echo osc_esc_html(osc_item_title()) ; ?>"></a>
                          <?php } else { ?> 
                                <a href="<?php echo osc_item_url(); ?>"><img class="gambars" src="<?php echo osc_current_web_theme_url('images/no_photo.gif') ; ?>" alt="<?php echo osc_esc_html(osc_item_title()) ; ?>" title="<?php echo osc_esc_html(osc_item_title()) ; ?>"/></a>
                          <?php } ?>
                          <?php } ?>
                     </div>
                     <div class="product-tengah">
                            <h3 class="judul"><a alt="<?php echo osc_esc_html(osc_item_title()) ; ?>" title="<?php echo osc_esc_html(osc_item_title()) ; ?>" href="<?php echo osc_item_url(); ?>"><?php echo osc_item_title(); ?></a></h3>
                            <?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { ?>
                            <div class="pricemini pricolor hidden-xs-up">
		              <?php echo osc_format_price(osc_item_price()); ?>
	                     </div>   
	                     <?php } ?>
                            <div class="kontens"><p><?php echo osc_highlight( strip_tags( osc_item_description() ) ); ?></p></div>
                            <div class="loc"><?php if(osc_item_city()!='' ) { ?><span class="lokas"><strong><i class="fa fa-map-marker"></i></strong>
                            <?php echo osc_item_city(); ?></span>
                            <?php } ?>
                            <?php if(osc_item_region()!='' ) { ?>&middot;
                            <span class="lokas2"><?php echo osc_item_region(); ?></span>
                            <?php } ?> <span class="catt"><strong><i class="fa fa-book"></i></strong> <?php echo osc_item_category($locale = ""); ?></span> <span class="datt"><strong><i class="fa fa-calendar"></i></strong> <?php echo osc_format_date(osc_item_pub_date()); ?></span></div>
<?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { ?>
 <div class="tags price-wrap  hidden-xs-down">
		<span class="tag-head"><p class="post-price"><?php echo osc_format_price(osc_item_price()); ?></p></span>
	</div>                           
<?php } ?>
                      </div>
                      </div>
            
            <?php } ?>
            <?php } ?>
<a class="btn btn-primary full1" href="<?php echo osc_search_show_all_url();?>"><strong><?php _e("See all listings", 'sahara'); ?> &raquo;</strong></a>
            <?php } ?>