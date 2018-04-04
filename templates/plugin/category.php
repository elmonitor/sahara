<div class="categori-utama masonry">
<?php osc_goto_first_category() ; ?>
            <?php if(osc_count_categories ()> 0) { ?>
            <?php while ( osc_has_categories() ) { ?>
            <div class="item">
                <div class="catalog">
                    <div class="pull-left warna"><i class="fa fa-<?php echo saharas_category_icon( osc_category_id() ); ?> warna"></i>
                        <?php echo osc_category_name() ; ?> </div>
                </div>
                <div class="colas">
                    <div class="cate-slider">
                        <div class="cate-thumb">
                            <?php echo caty_img(); ?> </div>
                    </div>
                </div>
                
                <?php if(osc_count_categories ()> 0) { ?>
                <div class="colas">
                    <?php osc_query_item(array( "category"=> osc_category_id(), "results_per_page" => 4));if( osc_category_total_items() == 0) { ?>
                    <p class="empty">
                        <?php _e("No Latest Listings", 'sahara'); ?> </p>
                    <a href="<?php echo osc_item_post_url_in_category(); ?>" class="see btn btn-success">
                        <?php _e("Publish your ad for free", 'sahara'); ?> </a>
                    <?php } else { ?>
<div class="slidera">
                                        <ul class="dem">
                    <?php while ( osc_has_custom_items() ) { ?>
<li class="news-item">
                                                <table>
                                                    <tbody><tr>
                                                                                                                <td>
<?php if( osc_images_enabled_at_items() ) { ?>
                            <?php if( osc_count_item_resources() ) { ?> <a class="pull-left" href="<?php echo osc_item_url(); ?>"><img class="media-object empatpuluh" src="<?php echo osc_resource_thumbnail_url(); ?>" alt="<?php echo osc_esc_html(osc_item_title()) ; ?>"></a>
                            <?php } else { ?> <a class="pull-left" href="<?php echo osc_item_url(); ?>"><img class="media-object empatpuluh" src="<?php echo osc_current_web_theme_url('images/no_photo.gif'); ?>" alt="<?php echo osc_esc_html(osc_item_title()) ; ?>" title="<?php echo osc_esc_html(osc_item_title()) ; ?>"/></a>
                            <?php } ?>
                            <?php } ?>
</td>
                                                        <td>
                                                            <div class="kua pull-right"><div class="veyra">
                                                               <a href="<?php echo osc_item_url(); ?>"><?php echo osc_item_title(); ?></a></div>
                                                                <span><small><?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { ?>
                                    <?php echo osc_format_price(osc_item_price()); ?>
                                <?php } ?></small></span> </div>
                                                        </td>
                                                         </tr>
                                                </tbody></table>
                                            </li>
                                           

                    
                    <?php } ?></ul>
                                    </div>
                    <a href="<?php echo osc_search_category_url() ; ?>" class="see btn btn-info">
                        <?php _e("See all Ads", 'sahara'); ?>
                        <?php echo osc_category_total_items() ; ?> </a>
                    <?php } ?> </div>
                <?php } ?> </div>
            <?php } ?>
            <?php } ?>
</div>