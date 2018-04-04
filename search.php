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
    
    $locales   = __get('locales');
    $user = osc_user();
    osc_enqueue_script('jquery-validate');
    $category = __get("category");
     if(!isset($category['pk_i_id']) ) {
         $category['pk_i_id'] = null;
     }
?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
<head>
    <?php osc_current_web_theme_path('common/head.php'); ?>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" /> 
</head>
<body>
    <?php osc_current_web_theme_path('header.php'); ?>
    <div id="content" class="container">
        <div class="row">
            <div class="main" class="col-md-12">
                <div class="col-md-3 nita">
                    <div class="side">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="navbar-header beautiful">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9"> <span class="sr-only"><?php _e("Toggle navigation", 'sahara'); ?></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                </div>
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
                                    <div class="row">
                                        <div class="catalogi"><h4><?php _e("Categories", 'sahara'); ?></h4></div>
            <?php if(osc_get_preference('sect11_view', 'sahara_theme')=="1" ) { ?>
             <?php osc_current_web_theme_path('templates/plugin/dropdown.php') ; ?>
             <?php } else { ?> 
             <?php osc_current_web_theme_path('templates/plugin/mega.php') ; ?>
             <?php } ?>
                                        <div class="abc search list-group-item">
                                            <form action="<?php echo osc_base_url(true); ?>" method="get" class="nocsrf">
                                                <input type="hidden" name="page" value="search" />
                                                <input type="hidden" name="sOrder" value="<?php echo osc_esc_html(osc_search_order()); ?>" />
                                                <input type="hidden" name="sCompany" class="sCompany" id="sCompany" value="<?php echo Params::getParam('sCompany');?>" />
                                                <input type="hidden" name="iOrderType" value="<?php $allowedTypesForSorting = Search::getAllowedTypesForSorting(); echo osc_esc_html($allowedTypesForSorting[osc_search_order_type()]); ?>" />
                                                <?php foreach(osc_search_user() as $userId) { ?>
                                                <input type="hidden" name="sUser[]" value="<?php echo osc_esc_html($userId); ?>" />
                                                <?php } ?>
                                                <fieldset style="border:none;" class="box location">
                                                    <div class="form-group">
                                                        <label for="sCity">
                                                            <?php _e("Your Search", 'sahara'); ?>
                                                        </label>
                                                        <input type="text" name="sPattern" placeholder="<?php echo osc_esc_html(__(osc_get_preference('keyword_placeholder', 'sahara'), 'sahara')); ?>" class="form-control" id="query" value="<?php echo osc_esc_html( osc_search_pattern() ); ?>" /> </div>
                                                    <div class="form-group">
                                                        <label for="sCity">
                                                            <?php _e("Categories", 'sahara'); ?>
                                                        </label>
                                                        <?php if ( osc_count_categories() ) { ?>
                                                        <div class="cell selector">
                                                            <?php if ( !osc_search_category() ) { ?>
                                                            <?php osc_categories_select_sahara( 'sCategory', null, __( 'Select a category', 'sahara')); ?>
                                                            <?php } else { ?>
                                                            <?php osc_categories_select_sahara( 'sCategory', osc_search_category_id(), __( 'Select a category', 'sahara')); ?>
                                                            <?php } ?> </div>
                                                        <?php } ?> </div>
                                                    <div class="form-group">
                                                        <label for="sRegion">
                                                            <?php _e("Region", 'sahara'); ?>
                                                        </label>
                                                        <input type="text" id="sRegion" name="sRegion" class="form-control" value="<?php echo osc_esc_html( osc_search_region() ); ?>" /> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="sCity">
                                                            <?php _e("City", 'sahara'); ?>
                                                        </label>
                                                        <input type="text" id="sCity" name="sCity" class="form-control" value="<?php echo osc_esc_html( osc_search_city() ); ?>" /> 
                                                    </div>
                                                    <?php if( osc_images_enabled_at_items() ) { ?>
                                                    <div class="form-group">
                                                        <label for="bPic">
                                                            <?php _e("Show only", 'sahara'); ?>
                                                        </label>
                                                        <br>
                                                        <div class="checkboxes">
                                                            <ul>
                                                                <li>
                                                                    <input type="checkbox" name="bPic" id="withPicture" value="1" <?php echo (osc_search_has_pic() ? 'checked="checked"' : ''); ?> />
                                                                    <p id="withPicture" for="withPicture">
                                                                        <?php _e("Show only listings with pictures", 'sahara'); ?>
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><?php } ?><?php if( osc_price_enabled_at_items() ) { ?>
                                                    <div class="form-group price-slice">
                                                        
                                                        <label for="sCity">
                                                            <?php _e("Price", 'sahara'); ?>
                                                        </label>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="col-md-6">
                                                                    <?php _e("Min", 'sahara'); ?>
                                                                    <input type="text" class="form-control" name="sPriceMin" value="<?php echo osc_esc_html(osc_search_price_min()); ?>" size="6" maxlength="6" />
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <?php _e("Max", 'sahara'); ?>
                                                                    <input type="text" class="form-control" name="sPriceMax" value="<?php echo osc_esc_html(osc_search_price_max()); ?>" size="6" maxlength="6" />
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                    </div> <?php } ?> 
                                                    <?php if(osc_search_category_id()) { osc_run_hook( 'search_form', osc_search_category_id()); } else { osc_run_hook( 'search_form'); } ?>
                                                    <button style="width:100%;" class="btn btn-success" type="submit">
                                                        <?php _e("Apply", 'sahara'); ?>
                                                    </button>
                                                </fieldset>
                                            </form>
                                        </div>
	
<?php if(osc_get_preference('sect3_view', 'sahara_theme')=="1" ) { ?>
<?php osc_get_latest_searches($limit = 21) ;
	if(osc_count_latest_searches() >0)
	{ ?>
<div class="catalogi"><h4><?php _e("Latest search", 'sahara'); ?></h4></div>
            <div class="tager"><div class="row">
		<?php while(osc_has_latest_searches()) { ?>
			<div class="tagss"><ul class="cloud"><li class="tagg"><a class="clous" href="<?php echo osc_search_url(array('sPattern' => osc_latest_search_text())); ?>"><?php echo osc_latest_search_text();?></a></li>
                                           </ul>
                        </div>
		 <?php } ?>
             </div> </div>
	 <?php } ?><?php } ?>
                                        <?php osc_alert_form(); ?>
                                        <div class="ads"><div class="ada">
                                            <?php echo osc_get_preference('sidebar-160x600', 'sahara'); ?>
                                        </div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 nita">
                    <div class="topper">
                        <div id="konten">
                            <div class="utama">
                                <div class="row">
                                    
                                    <div class="col-md-12 actions">
                                        <h3><?php echo search_title(); ?></h3>
                                        <div class="hola"><?php echo osc_category_description($locale = ""); ?></div>
                                        <div class="refine"><?php $spubcat = get_categoriessahara(); ?>
					<?php if (!isset($spubcat[2]) && !isset($spubcat[1]) && isset($spubcat[0])) { ?>
						<?php ;
							foreach(get_subcategories() as $subcat) {
								
								echo "<li><span><a href='".$subcat["url"]."'><span>".$subcat["s_name"]."</span></a> <span class='color'>" . get_category_num_items($subcat) . "</span></span></li>";
								
							} }?></div>
                                        <div class="list">
                                            <div class="user_type">
                                                <div class="search_num"><b><?php
                $search_number = sahara_search_number();
                printf(__('%1$d - %2$d of %3$d listings', 'sahara'), $search_number['from'], $search_number['to'], $search_number['of']);
            ?></b>
                                                </div>
                                                <div class="all <?php if(Params::getParam('sCompany') == '' or Params::getParam('sCompany') == null) { ?>active<?php } ?>"><span><?php _e("All", 'sahara'); ?></span>
                                                    <div class="force_down"></div>
                                                </div>
                                                <div class="personal <?php if(Params::getParam('sCompany') == '0') { ?>active<?php } ?>"><span><?php _e("Personal", 'sahara'); ?></span>
                                                </div>
                                                <div class="firm <?php if(Params::getParam('sCompany') == '1') { ?>active<?php } ?>"><span><?php _e("Company", 'sahara'); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bars">
                                            <div class="btn-group btn-sm pull-left"> <a title="<?php echo osc_esc_html(__('Show As Galery','sahara')); ?>" class="btn btn-primary btn-sm " href="<?php echo osc_update_search_url(array('sShowAs'=> 'gallery')); ?>"><span class="fa fa-th" aria-hidden="true"></span></a> <a title="<?php echo osc_esc_html(__('Show As List','sahara')); ?>" class="btn btn-primary btn-sm " href="<?php echo osc_update_search_url(array('sShowAs'=> 'list')); ?>"><span class="fa fa-th-list" aria-hidden="true"></span></a> </div>
                                            <!--     START sort by       -->
                                            <div class="btn-group btn-sm pull-right">
                                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <?php _e("Sort by", 'sahara'); ?><span class="caret"></span> </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <?php $i = 0; ?>
                                <?php $orders = osc_list_orders();
                                foreach($orders as $label => $params) {
                                    $orderType = ($params['iOrderType'] == 'asc') ? '0' : '1'; ?>
                                    <?php if(osc_search_order() == $params['sOrder'] && osc_search_order_type() == $orderType) { ?>
                                        <li><a class="current" href="<?php echo osc_esc_html(osc_update_search_url($params)); ?>"><?php echo $label; ?></a></li>
                                    <?php } else { ?>
                                       <li> <a href="<?php echo osc_esc_html(osc_update_search_url($params)); ?>"><?php echo $label; ?></a></li>
                                    <?php } ?>
                                    <?php if ($i != count($orders)-1) { ?>
                                        <span></span>
                                    <?php } ?>
                                    <?php $i++; ?>
                                <?php } ?> </ul>
                                            </div>
                                        </div>
                                        <!--     END sort by       -->
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <?php if(osc_count_items()==0 ) { ?>
                        <p class="empty">
                            <?php printf(__('There are no results matching "%s"', 'sahara'), osc_search_pattern()); ?>
                        </p>
                        <?php } else { ?>
                        <?php osc_run_hook( 'search_ads_listing_top1'); ?>
                        <?php require(osc_search_show_as()=='list' ? 'search_list.php' : 'search_gallery.php'); ?>
                        <div class="paginate">
                            <?php echo osc_search_pagination(); ?> </div>
                        <?php } ?>
                        <div class="clear"></div>
                        <?php $footerLinks = osc_search_footer_links(); ?>
                        <ul class="footer-links">
                            <?php foreach($footerLinks as $f) { View::newInstance()->_exportVariableToView('footer_link', $f); ?>
                            <?php if($f[ 'total'] < 3) continue; ?>
                            <li>
                                <a href="<?php echo osc_footer_link_url(); ?>">
                                    <?php echo osc_footer_link_title(); ?>
                                </a>
                            </li>
                            <?php } ?> </ul>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php osc_current_web_theme_path('footer.php'); ?>
    <script src="<?php echo osc_current_web_theme_js_url('owl.carousel.js') ; ?>"></script>
    <script src="<?php echo osc_current_web_theme_js_url('power4.js') ; ?>"></script>
</body>

</html>