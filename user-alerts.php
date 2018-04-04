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
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
<head>
    <?php osc_current_web_theme_path('common/head.php'); ?>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow" /> 
</head>
<body>
    <?php osc_current_web_theme_path('header.php'); ?>
    <div class="container">
        <div class="veraari">
            <div class="col-md-3">
                <div class="profile-userpic">
                    <?php osc_current_web_theme_path( 'templates/plugin/avatar.php') ; ?>
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <?php echo osc_user_name(); ?> 
                    </div>
                </div>
                <?php echo osc_private_user_menu( get_user_menu() ); ?>
                <div class="ads"> <div class="ada">
                    <?php echo osc_get_preference('ads-member', 'sahara'); ?> 
                </div></div>
            </div>
            <div class="col-md-9">
                <div class="wraps">
                         <h4 class="titless"><?php _e("Manage your alerts", 'sahara'); ?></h4>

                    <div class="panel-body">
                        <?php if(osc_count_alerts()==0 ) { ?>
                        <h3><?php _e("You do not have any alerts yet", 'sahara'); ?></h3>
                        <?php } else { ?>
                        <?php while(osc_has_alerts()) { ?>
                        <div class="useralert">
                            <div>
                                <?php _e("Alert", 'sahara'); ?> |
                                <a onclick="javascript:return confirm('<?php echo osc_esc_js(__('This action can\'t be undone. Are you sure you want to continue?', 'sahara')); ?>');" href="<?php echo osc_user_unsubscribe_alert_url(); ?>">
                                    <?php _e("Delete this alert", 'sahara'); ?> </a>
                            </div>
                        </div>
<?php if(osc_get_preference('defaultShowAs@all', 'sahara_theme')=="list" ) { ?>
<?php while ( osc_has_items() ) { ?>
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
                       <?php } else { ?>
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
                        <?php } ?>
                        <?php if(osc_count_items()==0 ) { ?> 0
                        <?php _e("Listings", 'sahara'); ?>
                        <?php } ?>
                        <?php } ?>
                        <?php } ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php osc_current_web_theme_path('footer.php'); ?> 
</body>
</html>