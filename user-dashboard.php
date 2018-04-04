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
                    <?php osc_current_web_theme_path('templates/plugin/avatar.php') ; ?></div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <?php echo osc_user_name(); ?> 
                    </div>
                </div>
                 <?php echo osc_private_user_menu( get_user_menu() ); ?>
                <div class="ads"><div class="ada">
                    <?php echo osc_get_preference('ads-member', 'sahara'); ?> 
                </div></div>
            </div>
            <div class="col-md-9">
                <div class="wraps">
 <?php if(osc_count_items()==0 ) { ?>
                           <div class="list-product news reguler">
                                <h3><?php _e("You don't have any listings yet", 'sahara'); ?></h3> 
                            </div>
                            <?php } else { ?>
                            <?php if(osc_get_preference('defaultShowAs@all', 'sahara_theme')=="list" ) { ?>
                       <h4 class="titless"><?php _e("Your listings", 'sahara'); ?></h4>
<?php while(osc_has_items()) { ?>
                      <div class="list-product news reguler">
                      <div class="product-kiri">
                             <?php if( osc_item_is_premium() ) { ?> <div class="ribbon ribbon-green">
                                <div class="banner">
                                    <div class="text"><?php echo osc_esc_html(__('Premium','sahara')); ?></div>
                                </div></div><?php } ?>
                            <?php if( osc_images_enabled_at_items() ) { ?>
                             <?php if(osc_count_item_resources()) { ?> 
                               <a class="arve" href="<?php echo osc_item_url(); ?>"><img class="gambars" src="<?php echo osc_resource_thumbnail_url(); ?>"  title="<?php echo osc_esc_html(osc_item_title()) ; ?>" alt="<?php echo osc_esc_html(osc_item_title()) ; ?>"></a>
                          <?php } else { ?> 
                                <a href="<?php echo osc_item_url(); ?>"><img class="gambars" src="<?php echo osc_current_web_theme_url('images/no_photo.gif') ; ?>" alt="<?php echo osc_esc_html(osc_item_title()) ; ?>" title="<?php echo osc_esc_html(osc_item_title()) ; ?>"/></a>
                          <?php } ?>
                          <?php } ?>
                     </div>
                     <div class="product-tengah">
                            <h3 class="judul"><a alt="<?php echo osc_esc_html(osc_item_title()) ; ?>" title="<?php echo osc_esc_html(osc_item_title()) ; ?>" href="<?php echo osc_item_url(); ?>"><?php echo osc_item_title(); ?></a></h3>
                            <div class="kontens"><p><?php echo osc_highlight( strip_tags( osc_item_description() ) ); ?></p></div>
                            <div class="loc"><strong><i class="fa fa-edit"></i></strong> <a class="kanani" href="<?php echo osc_item_edit_url(); ?>"><?php _e("Edit", 'sahara'); ?></a><i class="fa fa-power-off"></i>
                                                <a class="delete kanani" onclick="javascript:return confirm('<?php echo osc_esc_js(__('This action can not be undone. Are you sure you want to continue?', 'sahara')); ?>')" href="<?php echo osc_item_delete_url();?>">
                                                    <?php _e("Delete", 'sahara'); ?> </a>
                                                <?php if(osc_item_is_inactive()) {?> <span>|</span>
                                                <a class="kanani" href="<?php echo osc_item_activate_url();?>">
                                                    <?php _e("Activate", 'sahara'); ?> </a>
                                                <?php } ?> </div>
<?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { ?>
 <div class="tags price-wrap">
		<span class="tag-head"><p class="post-price"><?php echo osc_format_price(osc_item_price()); ?></p></span>
	</div>   
<?php } ?>
</div>
                      </div>
            
            <?php } ?>
<div class="paginate">
                                <?php echo osc_pagination_items(); ?> 
                            </div>
                       <?php } else { ?>
                       <h4 class="titless"><?php _e("Your listings", 'sahara'); ?></h4>
                        <div class="panel-body">
                            <div id="products" class="row list-group">
                                <?php while(osc_has_items()) { ?>
                                <div class="item  ari-4 col-md-3">
                                    <div class="col-item">
                                        <div class="photo">
                                            <?php if( osc_images_enabled_at_items() ) { ?>
                                            <?php if(osc_count_item_resources()) { ?> <a href="<?php echo osc_item_url(); ?>"><img class="img-responsive" src="<?php echo osc_resource_thumbnail_url(); ?>" title="<?php echo osc_esc_html(osc_item_title()) ; ?>" alt="<?php echo osc_esc_html(osc_item_title()) ; ?>" /></a>
                                            <?php if( osc_item_is_premium() ) { ?> <span title="<?php echo osc_esc_html(__('Premium Ads','sahara')); ?>" class="cat-label cat-label-label2"><i class="fa fa-star"></i></span>
                                            <?php } ?>
                                            <?php } else { ?> <img class="img-responsive" src="<?php echo osc_current_web_theme_url('images/no_photo.gif'); ?>" title="<?php echo osc_esc_html(osc_item_title()) ; ?>" alt="<?php echo osc_esc_html(osc_item_title()) ; ?>" />
                                            <?php } ?>
                                            <?php } ?> 
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-md-12 price">
                                                    <p class="pricetext">
                                                        <?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { echo osc_format_price(osc_item_price()); ?>
                                                        <?php } ?> </p>
                                                </div>
                                                <div class="aribudin col-md-12">
                                                    <a href="<?php echo osc_item_url(); ?>">
                                                        <?php echo osc_item_title(); ?> </a>
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                            <p class="btn-add"><i class="fa fa-edit"></i> <a href="<?php echo osc_item_edit_url(); ?>"><?php _e("Edit", 'sahara'); ?></a>
                                            </p>
                                            <p class="btn-details"> <i class="fa fa-power-off"></i>
                                                <a class="delete" onclick="javascript:return confirm('<?php echo osc_esc_js(__('This action can not be undone. Are you sure you want to continue?', 'sahara')); ?>')" href="<?php echo osc_item_delete_url();?>">
                                                    <?php _e("Delete", 'sahara'); ?> </a>
                                                <?php if(osc_item_is_inactive()) {?> <span>|</span>
                                                <a href="<?php echo osc_item_activate_url();?>">
                                                    <?php _e("Activate", 'sahara'); ?> </a>
                                                <?php } ?> </p>
                                        </div>
                                            
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?> 
                            </div>
                            <div class="paginate">
                                <?php echo osc_pagination_items(); ?> 
                            </div>
                        </div>
                     <?php } ?><?php } ?>
                
                   
                </div>
            </div>
        </div>
    </div>
    <?php osc_current_web_theme_path('footer.php'); ?> 
</body>
</html>