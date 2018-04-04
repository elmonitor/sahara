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
<div class="main">
    <style>
    .non {
        display: none;
    }
    div#owl-demo5 {
    margin-top: 0px;
}
.full {
    margin-bottom: 20px;
}
    </style>
     <div class="full">
        <div id="owl-demo5" class="owl-carousel owl-theme fulls">
            <?php echo logo_slider(); ?>
            <?php echo logo_slider_1(); ?>
            <?php echo logo_slider_2(); ?>
            <?php echo logo_slider_3(); ?> </div>
    </div>
<?php if(osc_get_preference('sect10_view', 'sahara_theme')=="1" ) { ?>
            <div class="col-md-12"><div class="memos">
                <?php echo osc_get_preference('memo-us', 'sahara'); ?> </div></div>
            <?php } ?>
            <?php if(osc_get_preference('header-728x90', 'sahara')!='' ) { ?>
            <div class="col-md-12">
                <div class="ads"><div class="row">
                    <div class="ada">
                    <?php echo osc_get_preference('header-728x90', 'sahara'); ?> </div>
            </div></div></div>
            <?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12"><div class="cater">
                        <?php osc_goto_first_category(); ?>
                         <div id="owl-demo" class="owl-carousel">
                        <?php while( osc_has_categories()) { ?>
                        <a href="<?php echo osc_search_category_url() ; ?>">
                            <div class="imag">
                                <i class="fa fa-<?php echo saharas_category_icon( osc_category_id() ); ?> kategoris"></i>
                                    <p><?php echo osc_category_name() ; ?></p> 
                            </div>
                        </a>
                        <?php } ?> </div></div>
</div>
            
            <div class="col-md-3">
<div class="catalogi"><h4><?php _e("Categories", 'sahara'); ?></h4></div>
           <?php if(osc_get_preference('sect11_view', 'sahara_theme')=="1" ) { ?>
             <?php osc_current_web_theme_path('templates/plugin/dropdown.php') ; ?>
             <?php } else { ?> 
             <?php osc_current_web_theme_path('templates/plugin/mega.php') ; ?>
             <?php } ?>
<?php if(osc_get_preference('sect4_view', 'sahara_theme')=="1" ) { ?>
<div class="catalogi"><h4><?php _e("Popular Location", 'sahara'); ?></h4></div>
<div class="abc">
<div class="row">
<ul class="regional">
<?php   $i = 1;
        $_regions = Search::newInstance()->listRegions('%%%%', ">", "items DESC" );
        View::newInstance()->_exportVariableToView('regions', $_regions);
        while(osc_has_regions()) : ?>
           <li  class="region"><a class="reggion" href="<?php echo osc_region_url(); ?>"><?php echo osc_region_name(); ?></a></li>

        <?php if($i>0&&$i%12==0) { break; }
        $i++;
        endwhile;?>
</ul>
</div>
</div>
<?php } ?>
<?php if(osc_get_preference('sect6_view', 'sahara_theme')=="1" ) { ?>
<div class="catalogi"><h4><?php _e("Social Network", 'sahara'); ?></h4></div>
          <div class="abc">
              <div class="row">
<ul class="socc">
                            <?php if(osc_get_preference('facebook-us', 'sahara')!='' ) { ?>
                            <li>
                                <div class="icon-box">
                                    <a target="_blank" class="btn btn-circle btn-lg-light btn-sm" href="<?php echo osc_get_preference('facebook-us', 'sahara'); ?>"> <i class="fa fa-facebook-square text-dark"></i></a>
                                </div>
                            </li>
                            <?php } ?>
                            <?php if(osc_get_preference('twitter-us', 'sahara')!='' ) { ?>
                            <li>
                                <div class="icon-box"><a target="_blank" class="btn btn-circle btn-lg-light btn-sm" href="<?php echo osc_get_preference('twitter-us', 'sahara'); ?>"><i class="fa fa-twitter-square text-dark"></i></a> </div>
                            </li>
                            <?php } ?>
                             <?php if(osc_get_preference('instagram-us', 'sahara')!='' ) { ?>
                            <li>
                                <div class="icon-box">
                                    <a target="_blank" class="btn btn-circle btn-lg-light btn-sm" href="<?php echo osc_get_preference('instagram-us', 'sahara'); ?>"> <i class="fa fa-instagram text-dark"></i></a>
                                </div>
                            </li>
                            <?php } ?>
                            <?php if(osc_get_preference('gplus-us', 'sahara')!='' ) { ?>
                            <li>
                                <div class="icon-box"> <a target="_blank" class="btn btn-circle btn-lg-light btn-sm" href="<?php echo osc_get_preference('gplus-us', 'sahara'); ?>"><i class="fa fa-google-plus-square text-dark"></i></a> </div>
                            </li>
                            <?php } ?>
                            <?php if(osc_get_preference('linkedin-us', 'sahara')!='' ) { ?>
                            <li>
                                <div class="icon-box"> <a target="_blank" class="btn btn-circle btn-lg-light btn-sm" href="<?php echo osc_get_preference('linkedin-us', 'sahara'); ?>"><i class="fa fa-linkedin-square text-dark"></i></a> </div>
                            </li>
                            <?php } ?>
                            <?php if(osc_get_preference('youtube-us', 'sahara')!='' ) { ?>
                            <li>
                                <div class="icon-box"> <a target="_blank" class="btn btn-circle btn-lg-light btn-sm" href="<?php echo osc_get_preference('youtube-us', 'sahara'); ?>"><i class="fa fa-youtube text-dark"></i></a> </div>
                            </li>
                            <?php } ?>  </ul>
               </div>
          </div>
<?php } ?>
<?php if(osc_get_preference('side_view', 'sahara_theme')=="1" ) { ?>
<div class="catalogi"><h4><?php _e("Sponsored ad", 'sahara'); ?></h4></div>
 <div class="slidera">
                                        <ul class="dem">
                                            <?php osc_get_premiums($max=osc_get_preference('premiumads_num_ads', 'sahara')) ;if( osc_count_premiums()> 0 ) { ?>
                                            <?php while ( osc_has_premiums() ) { ?>
                                            <li class="news-item">
                                                <table>
                                                    <tr>
                                                        <?php if( osc_count_premium_resources() ) { ?>
                                                        <td><a class="pull-left" href="<?php echo osc_premium_url() ; ?>" title="<?php echo osc_esc_html(osc_premium_title()) ; ?>"><img class="media-object empatpuluh" src="<?php echo osc_resource_thumbnail_url() ; ?>" title="<?php echo osc_esc_html(osc_premium_title()) ; ?>" alt="<?php echo osc_esc_html(osc_premium_title()) ; ?>"></a> </td>
                                                        <td>
                                                            <div class="pull-right">
                                                                <a href="<?php echo osc_premium_url() ; ?>" title="<?php echo osc_esc_html(osc_premium_title()) ; ?>">
                                                                    <?php echo osc_premium_title(); ?> </a>
                                                                <br> <span><?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled(osc_premium_category_id()) ) { ?><small><?php echo osc_format_price(osc_premium_price(), osc_premium_currency_symbol()); ?></small><?php } ?></span> </div>
                                                        </td>
                                                        <?php } else { ?> 
                                                        <td><a class="pull-left" href="<?php echo osc_premium_url() ; ?>" title="<?php echo osc_esc_html(osc_premium_title()) ; ?>"><img class="media-object empatpuluh" src="<?php echo osc_current_web_theme_url('images/no_photo.gif') ; ?>" title="<?php echo osc_esc_html(osc_premium_title()) ; ?>" alt="<?php echo osc_esc_html(osc_premium_title()) ; ?>"></a> </td>
                                                        <td>
                                                            <div class="pull-right">
                                                                <a href="<?php echo osc_premium_url() ; ?>" title="<?php echo osc_esc_html(osc_premium_title()) ; ?>">
                                                                    <?php echo osc_premium_title(); ?> </a>
                                                                <br> <span><?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled(osc_premium_category_id()) ) { ?><small><?php echo osc_format_price(osc_premium_price(), osc_premium_currency_symbol()); ?></small><?php } ?></span> </div>
                                                        </td>
                                                        <?php } ?> </tr>
                                                </table>
                                            </li>
                                            <?php } ?>
                                            <?php } ?> </ul>
                                    </div>
<?php } ?>
<?php if(osc_get_preference('sect3_view', 'sahara_theme')=="1" ) { ?>
<div class="catalogi"><h4><?php _e("Latest search", 'sahara'); ?></h4></div>
<?php osc_get_latest_searches($limit = 21) ;
	if(osc_count_latest_searches() >0)
	{ ?><div class="tager"><div class="row">
		<?php while(osc_has_latest_searches()) { ?>
			<div class="tagss"><ul class="cloud"><li class="tagg"><a class="clous" href="<?php echo osc_search_url(array('sPattern' => osc_latest_search_text())); ?>"><?php echo osc_latest_search_text();?></a></li></ul></div>
		 <?php } ?>
             </div></div>
	 <?php } ?>
         <?php } ?>
         <?php if(osc_get_preference('sect5_view', 'sahara_theme')=="1" ) { ?>
            <div class="catalogi"><h4><?php _e("Featured Brand", 'sahara'); ?></h4></div>
            <div class="col-md-y">
                <div id="owl-demo7" class="owl-carousel">
                    <?php echo brand_1(); ?>
                    <?php echo brand_2(); ?>
                    <?php echo brand_3(); ?>
                    <?php echo brand_4(); ?>
                    <?php echo brand_5(); ?>
                    <?php echo brand_6(); ?>
                    <?php echo brand_7(); ?>
                    <?php echo brand_8(); ?> </div>
            </div>
            <?php } ?> 
          <div class="ads">
               <div class="ada"><?php echo osc_get_preference('sidebar-160x600', 'sahara'); ?></div>
          </div>
     </div>
<div class="col-md-9">
             <?php if(osc_get_preference('sect13_view', 'sahara_theme')=="1" ) { ?>
            <?php osc_current_web_theme_path('templates/plugin/category.php') ; ?>
            <?php } ?> 
             <?php if(osc_get_preference('defaultShowAs@all', 'sahara_theme')=="list" ) { ?>
             <?php osc_current_web_theme_path('loop-list.php') ; ?>
             <?php } else { ?> 
             <?php osc_current_web_theme_path('loop-gallery.php') ; ?>
             <?php } ?>
        </div>
    </div>
   </div>  