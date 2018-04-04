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
<style>.gambars {border:none;}.gambars img {border: #ddd 1px dotted;}</style>
<div class="container">
    <div class="row">

        <div class="col-md-8 item-content">
            <div class="boxer-head">
                <h1><?php echo osc_item_title(); ?></h1>
            </div>
            <div class="box foto-id">
                <?php if( osc_images_enabled_at_items() ) { ?>
                <?php if( osc_count_item_resources()> 0 ) { $i = 0; ?>
                <div class="gambars"> <img id="zoom_03" src="<?php echo osc_resource_url(); ?>" data-zoom-image="<?php echo osc_resource_url(); ?>" />
                    <div id="gallery_01">
                        <?php for ( $i=0 ; osc_has_item_resources(); $i++ ) { ?> <a href="#" class="gallery_01 " data-image="<?php echo osc_resource_url(); ?>" data-zoom-image="<?php echo osc_resource_url(); ?>"> <img src="<?php echo osc_resource_thumbnail_url(); ?>" /> </a>
                        <?php } ?> </div>
                </div>
                <?php } else { ?>
                <div class="col-md-12 row panel panel-body">
                    <center><img src="<?php echo osc_current_web_theme_url('images/no_photo.gif') ; ?>" />
                    </center>
                </div>
                <?php } ?>
                <?php } ?>
            </div>

            <div class="box visible-xs visible-sm">
                <div class="warnamu kepala-satu">

                    <span class="item-kanan price"><?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { ?>
<?php echo osc_item_formated_price(); ?><?php } ?> </span>
                    <div class="clearfix"></div>
                </div>
                <div class="item-user">
                    <div class="user-photo col-sm-3 col-xs-3 no-pad">
                        <?php osc_current_web_theme_path( 'templates/plugin/avatar.php') ; ?></div>
                    <div class="user-information col-sm-9 col-xs-9 no-pad-right">
                        <span class="user-name"> <?php if( osc_item_user_id() != null ) { ?> <p class="name"><?php _e("Name", 'sahara') ?>: <strong><a href="<?php echo osc_user_public_profile_url( osc_item_user_id() ); ?>" ><?php echo osc_item_contact_name(); ?></a></strong></p>
                                    <?php } else { ?>
                                    <p class="name"><strong> <?php _e("Name", 'sahara') ?>:</strong>
                                        <?php echo osc_item_contact_name(); ?> </p>
                                    <?php } ?></span>
                        <div class="item-web">
                            <?php if( osc_user_website() !=='' ) { ?>
                            <span class="ad-web"><a href="<?php echo osc_user_website(); ?>"><?php echo osc_user_website(); ?></a></span>
                            <?php } ?>
                        <div class="profile-usermenu hidden-md-up">
    <div class="report-inner section_bg">
    	<div class="row"><?php if ( osc_user_phone_mobile() !='' ) { ?>
        	<div class="col-xs-6">
            	<a href="sms:<?php echo osc_user_phone_mobile(); ?>"  class="btn btn-call btn-block"><span class=" fa fa-envelope"></span> <?php _e('Sms', 'sahara'); ?></a>
            </div><?php } ?>
             <?php if ( osc_user_phone() !='' ) { ?>
            <div class="col-xs-6">
            	<a href="tel:<?php echo osc_user_phone(); ?>"  class="btn btn-call  btn-block "><span class="txt_color_1  fa fa-phone"></span> <?php _e('Call', 'sahara'); ?></a>
            </div><?php } ?>
        </div>
    </div>
</div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="satu-meta">
                    <ul>
                        <?php if ( osc_user_phone_mobile() !='' ) { ?>
                        <li>
                            <?php _e("Cell phone", 'sahara'); ?>:<span class="warnamu color"><?php echo osc_user_phone_mobile(); ?></span>
                        </li>
                        <?php } ?>
                        <?php if ( osc_user_phone() !='' ) { ?>
                        <li>
                            <?php _e("Phone", 'sahara'); ?>:<span class="warnamu color"><?php echo osc_user_phone(); ?></span>
                        </li>
                        <?php } ?>
                        
                        <?php if( osc_item_show_email() ) { ?>
                        <li>
                            <?php _e("E-mail", 'sahara'); ?>:<span class="warnamu color"><?php echo osc_item_contact_email(); ?></span>
                        </li>
                        <?php } ?>

                        <li>
                            <?php _e("Item Id", 'sahara') ?>: <span class="warnamu color"><?php echo osc_item_id(); ?></span>
                        </li>
                        <li>
                            <?php _e("Category", 'sahara'); ?>: <span class="warnamu color"><?php echo osc_item_category(); ?></span>
                        </li>

                        <li>
                            <?php _e("Viewed", 'sahara'); ?>: <span class="warnamu color"><?php echo osc_item_views(); ?></span>
                        </li>
                        <?php if (function_exists('osc_telephone_number')) { ?>
                        <li>
                            <?php osc_telephone_number(); ?>
                        </li>
                        <?php } ?>
                    </ul>

                </div>
            </div>
            <div class="clearfix"></div>

            <div class="box">
                <div class="border-bawah">
                    <h3><?php echo osc_item_title(); ?></h3>
                    <p><small><?php _e("Published date", 'sahara'); ?>: <b><?php echo osc_format_date( osc_item_pub_date() ); ?></b> | <?php _e("Category", 'sahara'); ?>: <b><?php echo osc_item_category(); ?></b> | <?php _e("Location", 'sahara'); ?>: <b> <?php if ( osc_item_city() !="" ) { ?><?php echo osc_item_city(); ?><?php } ?>, <?php if ( osc_item_region() !='' ) { ?><?php echo osc_item_region(); ?><?php } ?>, <?php if ( osc_item_country() !='' ) { ?><?php echo osc_item_country(); ?><?php } ?></b></small>
                    </p>
                </div>
                <p>
                    <?php echo osc_item_description(); ?>
                </p>
                <?php if(osc_is_web_user_logged_in() && osc_logged_user_id()==osc_item_user_id()) { ?>
                <p id="edit_item_view"> <strong>
                                <a href="<?php echo osc_item_edit_url(); ?>" rel="nofollow"><?php _e("Edit item", 'sahara'); ?></a>
                            </strong> </p>
                <?php } ?>
                <div class="plugin_details clearfix">
                    <?php osc_run_hook('item_detail', osc_item() ); ?>
                    <br>
 <div class="btn-group topper">
                            <button type="button" class="mami btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-flag"></i>
                                <?php _e("Mark as", 'sahara'); ?> <span class="caret"></span> </button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a id="item_spam" href="<?php echo osc_item_link_spam(); ?>" rel="nofollow">
                                        <?php _e("spam", 'sahara'); ?> </a>
                                </li>
                                <li>
                                    <a id="item_bad_category" href="<?php echo osc_item_link_bad_category(); ?>" rel="nofollow">
                                        <?php _e("misclassified", 'sahara'); ?> </a>
                                </li>
                                <li>
                                    <a id="item_repeated" href="<?php echo osc_item_link_repeated(); ?>" rel="nofollow">
                                        <?php _e("duplicated", 'sahara'); ?> </a>
                                </li>
                                <li>
                                    <a id="item_expired" href="<?php echo osc_item_link_expired(); ?>" rel="nofollow">
                                        <?php _e("expired", 'sahara'); ?> </a>
                                </li>
                                <li>
                                    <a id="item_offensive" href="<?php echo osc_item_link_offensive(); ?>" rel="nofollow">
                                        <?php _e("offensive", 'sahara'); ?> </a>
                                </li>
                            </ul>
                        </div>
                </div>

            </div>
            <div class="related-ads box">
                <?php related_listings(); ?>
                <?php if( osc_count_items()> 0 ) { ?>
                <div class="warnamu kepala-satu">
                    <span class="item-kanan price"><?php _e("Related Ads", 'sahara'); ?></span>
                    <div class="clearfix"></div>
                </div>
                <?php View::newInstance()->_exportVariableToView("listType", 'items'); osc_current_web_theme_path('templates/plugin/related1.php'); ?>
                <div class="clear"></div>
                <?php } else { ?>
                <div class="similar_ads">
                    <h3><?php _e("No Related Ads", 'sahara'); ?></h3> </div>
                <?php } ?>
            </div>

            <?php if( osc_comments_enabled() ) { ?>
            <div class="box" id="comments">
                <h3><?php _e("Comments", 'sahara'); ?></h3>
                <div id="comment-body">
                    <hr>
                    <?php if( osc_reg_user_post_comments () && osc_is_web_user_logged_in() || !osc_reg_user_post_comments() ) { ?>
                    <div id="comments">
                        <ul id="comment_error_list"></ul>
                        <?php CommentForm::js_validation(); ?>
                        <?php if( osc_count_item_comments()>= 1 ) { ?>
                        <div class="comments_list">
                            <?php while ( osc_has_item_comments() ) { ?>
                            <div class="comment">
                                <h3><strong><?php echo osc_comment_title(); ?></strong> <em><?php _e("by", 'sahara'); ?> <?php echo osc_comment_author_name(); ?></em></h3>
                                <div class="bubel">
                                    <div class="lancip"></div>
                                    <p>
                                        <?php echo nl2br( osc_comment_body() ); ?> </p>
                                </div>
                                <?php if ( osc_comment_user_id() && (osc_comment_user_id()==osc_logged_user_id()) ) { ?>
                                <p>
                                    <a rel="nofollow" href="<?php echo osc_delete_comment_url(); ?>">
                                        <?php _e( "Delete", 'sahara'); ?> </a>
                                </p>
                                <?php } ?> </div>
                            <?php } ?>
                            <div class="paginate" style="text-align:right;">
                                <?php echo osc_comments_pagination(); ?> </div>
                        </div>
                        <?php } ?>
                    </div>
                    <p><b><?php _e("Leave your comment", 'sahara'); ?></b>
                    </p>
                    <div class="votes_reviews">
                        <form action="<?php echo osc_base_url(true); ?>" method="post" name="comment_form" id="commentsi">
                            <fieldset>
                                <input type="hidden" name="action" value="add_comment" />
                                <input type="hidden" name="page" value="item" />
                                <input type="hidden" name="id" value="<?php echo osc_esc_html( osc_item_id() ); ?>" />
                                <div class="clearfix"></div>
                                <?php if(osc_is_web_user_logged_in()) { ?>
                                <input type="hidden" name="authorName" value="<?php echo osc_esc_html( osc_logged_user_name() ); ?>" />
                                <input type="hidden" name="authorEmail" value="<?php echo osc_esc_html( osc_logged_user_email() ); ?>" />
                                <?php } else { ?>
                                <div class="form-group col-md-12">
                                    <label for="authorName">
                                        <?php _e("Your name", 'sahara'); ?>:</label>
                                    <br>
                                    <?php CommentForm::author_input_text(); ?>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="authorEmail">
                                        <?php _e("Your e-mail", 'sahara'); ?>:</label>
                                    <br>
                                    <?php CommentForm::email_input_text(); ?>
                                </div>
                                <?php }; ?>
                                <div class="form-group col-md-12">
                                    <label for="title">
                                        <?php _e("Title", 'sahara'); ?>:</label>
                                    <br>
                                    <?php CommentForm::title_input_text(); ?>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="body">
                                        <?php _e("Comment", 'sahara'); ?>:</label>
                                    <br>
                                    <?php CommentForm::body_input_textarea(); ?>
                                </div>
                                <button class="btn btn-success topper pull-right" type="submit">
                                    <?php _e("Send", 'sahara'); ?> </button>
                            </fieldset>

                        </form>
                    </div>
                </div>
                <div style="clear:both;"></div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
        <!--item-content-->
        <div class="col-md-4 no-pad-left">
            <div class="box item-contact-box  hidden-sm hidden-xs">
                <div class="warnamu kepala-satu">

                    <span class="item-kanan price"><?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { ?>
<?php echo osc_item_formated_price(); ?><?php } ?> </span>
                    <div class="clearfix"></div>
                </div>


                <div class="satu-meta">
                    <ul>
                        <li>
                            <?php _e("Item Id", 'sahara') ?>: <span class="warnamu color"><?php echo osc_item_id(); ?></span>
                        </li>
                        <li>
                            <?php _e("Category", 'sahara'); ?>: <span class="warnamu color"><?php echo osc_item_category(); ?></span>
                        </li>
                        <li>
                            <?php _e("Viewed", 'sahara'); ?>: <span class="warnamu color"><?php echo osc_item_views(); ?></span>
                        </li>

                    </ul>

                </div>


            </div>
            <?php if( osc_count_item_meta()>= 1 ) { ?>
            <div class="box metta">
                 <div class="kepalaku">
                    <h4><?php _e("More information", 'sahara'); ?></h4>
                </div>
                <div class="satu-meta">
                    <ul>

                        <?php while ( osc_has_item_meta() ) { ?>
                        <li>
                            <?php if(osc_item_meta_value()!='' ) { ?>
                            <?php echo osc_item_meta_name(); ?>:<span class="warnamu color">
                                    <?php echo osc_item_meta_value(); ?> </span>
                            <?php } ?>
                        </li>
                        <?php } ?>

                    </ul>

                </div>
            </div>
            <?php } ?>

            <div class="box item-contact-box  hidden-sm hidden-xs">
                 <div class="kepalaku">
                    <h4><?php _e("Contact seller", 'sahara'); ?></h4>
                </div>
                <div class="item-user">
                    <div class="user-photo col-md-3 no-pad">
                        <?php osc_current_web_theme_path( 'templates/plugin/avatar.php') ; ?>
                        </div>
                    <div class="user-information col-md-9 no-pad-right">
                        <span class="user-name"><?php if( osc_item_user_id() != null ) { ?><a href="<?php echo osc_user_public_profile_url( osc_item_user_id() ); ?>" ><?php echo osc_item_contact_name(); ?></a>
                                    <?php } else { ?><?php _e("Name", 'sahara') ?><?php echo osc_item_contact_name(); ?>
                                    <?php } ?></span>
                        <div class="item-web">
                            <?php if( osc_user_website() !=='' ) { ?>
                            <span class="ad-web"><a href="<?php echo osc_user_website(); ?>"><?php echo osc_user_website(); ?></a></span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="satu-meta">
                    <ul>
                         <?php if ( osc_user_id() !='' ) { ?>
                        <li>
                            <?php _e("User Id", 'sahara') ?>: <span class="warnamu color"><?php echo osc_user_id(); ?></span>
                        </li>
                        <?php } ?>
                        <?php if ( osc_user_phone_mobile() !='' ) { ?>
                        <li>
                            <?php _e("Cell phone", 'sahara'); ?>:<span class="warnamu color"><?php echo osc_user_phone_mobile(); ?></span>
                        </li>
                        <?php } ?>
                        <?php if ( osc_user_phone() !='' ) { ?>
                        <li>
                            <?php _e("Phone", 'sahara'); ?>:<span class="warnamu color"><?php echo osc_user_phone(); ?></span>
                        </li>
                        <?php } ?>
                        <?php if( osc_item_show_email() ) { ?>
                        <li>
                            <?php _e("E-mail", 'sahara'); ?>:<span class="warnamu color"><?php echo osc_item_contact_email(); ?></span>
                        </li>
                        <?php } ?>
                        <?php if (function_exists('osc_telephone_number')) { ?>
                        <li>
                            <?php osc_telephone_number(); ?>
                        </li>
                        <?php } ?>

                    </ul>
                </div>


 <div class="showw">
                                    <button type="button" class="btn btn-primary btn-lg rini seratus"  type="button" data-toggle="collapse" data-target="#collapsePesan" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-envelope"></i>
                                        <?php _e("Send Mail", 'sahara'); ?> </button>

<div class="collapse" id="collapsePesan">
<div class="well">
<ul id="error_list"></ul>
                                                <?php ContactForm::js_validation(); ?>
                                                   
                                                        <form <?php if( osc_item_attachment() ) { ?>enctype="multipart/form-data"
                                                            <?php } ?> action="<?php echo osc_base_url(true); ?>" method="post" name="contact_form" id="contact_form">
                                                            <?php osc_prepare_user_info(); ?>
                                                            <fieldset>
                                                                <input type="hidden" name="action" value="contact_post" />
                                                                        <input type="hidden" name="page" value="item" />
                                                                        <input type="hidden" name="id" value="<?php echo osc_esc_html( osc_item_id() ); ?>" />
                                                                    
                                                                            <label>
                                                                                <?php _e("Your name", 'sahara'); ?> </label>
                                                                            <?php ContactForm::your_name(); ?>
                                                                            <label>
                                                                                <?php _e("Your e-mail address", 'sahara'); ?> </label>
                                                                            <?php ContactForm::your_email(); ?>
                                                                        
                                                                            <label>
                                                                                <?php _e("Phone number", 'sahara'); ?> </label>
                                                                            <?php ContactForm::your_phone_number(); ?>
                                                                        <?php if( osc_item_attachment() ) { ?>
                                                                        <label for="contact-attachment">
                                                                            <?php _e("Attachments", 'sahara') ; ?> </label>
                                                                        <?php ContactForm::your_attachment() ; ?>
                                                                        <?php } ?>
                                                                        <?php osc_run_hook('item_contact_form', osc_item_id()); ?>
                                                                        
                                                                            <label>
                                                                                <?php _e("Message", 'sahara'); ?> </label>
                                                                            <?php ContactForm::your_message(); ?>
                                                                       
                                                                         <?php if( osc_recaptcha_public_key() ) { ?>
                                                                        <script type="text/javascript">
                                                                        var RecaptchaOptions = {
                                                                            theme: 'custom',
                                                                            custom_theme_widget: 'recaptcha_widget'
                                                                        };
                                                                        </script>
                                                                        <style type="text/css">
                                                                        div#recaptcha_widget,
                                                                        div#recaptcha_image > img {max-width: 200px;
                                                                            width:100%;
                                                                        }
                                                                        </style>
                                                                        
                                                                        <div id="recaptcha_widget">
                                                                            <div id="recaptcha_image"><img /></div> <span class="recaptcha_only_if_image"><?php _e("Enter the words above",'sahara'); ?>:</span>
                                                                            <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />
                                                                            
                                                                                <a href="javascript:Recaptcha.showhelp()">
                                                                                    <?php _e("Help", 'sahara'); ?> </a>
                                                                            
                                                                        </div>
                                                                        <?php } ?>
                                                                        <?php osc_show_recaptcha(); ?>
                                                                 
                                                                        <button type="submit" class="btn btn-success topper pull-left seratus">
                                                                            <?php _e("Send", 'sahara'); ?> </button>
                                                                  
                                                            </fieldset>
                                                        </form>
                                              </div>
</div>
</div>
<!-- collapse pesan -->

            </div>
<?php if(osc_get_preference('side_view', 'sahara_theme')=="1" ) { ?>
            <div class="box">
                 <div class="kepalaku">
                    <h4><?php _e("Sponsored ad", 'sahara'); ?></h4>
                </div>
                <div class="slidera">
                    <ul class="dem">
                        <?php osc_get_premiums($max=osc_get_preference( 'premiumads_num_ads', 'sahara')) ;if( osc_count_premiums()> 0 ) { ?>
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
            </div>
 <?php } ?>

            <div class="box">
                 <div class="kepalaku">
                    <h4><?php _e("Location", 'sahara'); ?></h4>
                </div>
                <div class="satu-meta">
                    <ul>
                        <li>
                            <?php _e("Location", 'sahara'); ?>: <span class="warnamu color"><?php if ( osc_item_city() !="" ) { ?><?php echo osc_item_city(); ?>
                                    <?php } ?>, <?php if ( osc_item_region() !='' ) { ?><?php echo osc_item_region(); ?><?php } ?>,
                                    <?php if ( osc_item_country() !='' ) { ?><?php echo osc_item_country(); ?><?php } ?></span>
                        </li>
                    </ul>
                    <?php osc_run_hook('location'); ?>
                </div>
            </div>

<div class="box">
<?php if(osc_get_preference('sect16_view', 'sahara_theme')=="1" ) { ?>
             <div class="wraps">
                  <div class="usefule">
                     <div class="usef"><h4><?php echo osc_get_preference('judul6-us', 'sahara'); ?></h4> </div>
                  </div>
                  <div class="usecontent"><?php echo osc_get_preference('footer-us6', 'sahara'); ?></div>
              </div>
             <?php } else { ?> 
 <div id="useful_info"> <h4><?php _e("Useful information", 'sahara'); ?></h4>
                                <ul class="usef">
                                    <li>
                                        <?php _e('Avoid scams by acting locally or paying with PayPal', 'sahara'); ?> </li>
                                    <li>
                                        <?php _e('Never pay with Western Union, Moneygram or other anonymous payment services', 'sahara'); ?> </li>
                                    <li>
                                        <?php _e('Don\'t buy or sell outside of your country. Don\'t accept cashier cheques from outside your country', 'sahara'); ?> </li>
                                    <li>
                                        <?php _e('This site is never involved in any transaction, and does not handle payments, shipping, guarantee transactions, provide escrow services, or offer "buyer protection" or "seller certification"', 'sahara'); ?> </li>
                                </ul>
                            </div>

<?php } ?></div>

            <?php if(osc_get_preference('sidebar-300x250', 'sahara')!='' ) { ?>
            <div class="box">
                <div class="ada">
                    <?php echo osc_get_preference('sidebar-300x250', 'sahara'); ?> </div>
            </div>
            <?php } ?>

       
    </div></div>
</div>
<script type="text/javascript" src="<?php echo osc_current_web_theme_js_url('jquery.elevatezoom.js') ; ?>"></script>
<script>
$("#zoom_03").elevateZoom({zoomType: "none", containLensZoom: true, gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: "active"});
$("#zoom_03").bind("click", function(e) { var ez = $('#zoom_03').data('elevateZoom');   $.fancybox(ez.getGalleryList()); return false; });
</script>