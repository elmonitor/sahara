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
.even {
    border: #E2E2E2 1px solid;
    margin-top: 1px;
}
.komen {
    display: none;
}
img.irmacinta {
    background: #fff;
}
.nav-tabs {
    border: 1px solid #ddd;
}
.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
    position: absolute;
    margin-left: 10px;
    margin-top: 5px;
}
.panel {
    margin-bottom: 21px;
    background-color: #ffffff;
    border: 1px solid rgb(221, 221, 221);
}
img#zoom_03 {
    width: 100%;
}
span.price {
    float: right;
    font-weight: bold;
}
</style>
<div class="container item">
    <div id="content">
        <div class="row">
            <div class="main" class="col-md-12">
                <div class="col-md-3">
                    <div class="jkk">
                    <div class="side bottomer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="navbar-header beautiful bottomer">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9"> <span class="sr-only"><?php _e("Toggle navigation", 'sahara'); ?></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                </div>
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
                                    <div class="row">
<div class="catalogi"><h4><?php _e("Category", 'sahara'); ?></h4></div>
              <?php if(osc_get_preference('sect11_view', 'sahara_theme')=="1" ) { ?>
             <?php osc_current_web_theme_path('templates/plugin/dropdown.php') ; ?>
             <?php } else { ?> 
             <?php osc_current_web_theme_path('templates/plugin/mega.php') ; ?>
             <?php } ?>
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
                                        <div id="related_ads">
                                            <?php related_listings(); ?>
                                            <?php if( osc_count_items()> 0 ) { ?>
                                            <div class="similar_ads">
                                                 <div class="catalogi"><h4><?php _e("Related Ads", 'sahara'); ?></h4></div>
                                                <?php View::newInstance()->_exportVariableToView("listType", 'items'); osc_current_web_theme_path('templates/plugin/related.php'); ?>
                                                <div class="clear"></div>
                                            </div>
                                            <?php } else { ?>
                                            <div class="similar_ads">
                                                 <div class="catalogi"><h4><?php _e("No Related Ads", 'sahara'); ?></h4> </div></div>
                                            <?php } ?> </div>
                                        <?php if(osc_get_preference('sidebar-160x600', 'sahara')!='' ) { ?>
                                        <div class="ads"><div class="ada">
                                            <?php echo osc_get_preference('sidebar-160x600', 'sahara'); ?> </div></div>
                                        <?php } ?> </div>
                                </div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12 panel-body">
                        <div class="cat-box-title">
                        <h1 class="judulku"><?php echo osc_item_title(); ?></h1>
                        <div class="stripe-line"></div></div>
                        <div id="owl-demo77" class="owl-carousel owl-theme">
                            <?php if( osc_images_enabled_at_items() ) { ?>
                            <?php if( osc_count_item_resources()> 0 ) { $i = 0; ?>
                            <?php for ( $i=0 ; osc_has_item_resources(); $i++ ) { ?>
                            <div class="item"><img src="<?php echo osc_resource_url(); ?>" alt="<?php echo osc_esc_html(osc_item_title()) ; ?>" /> </div>
                            <?php } ?>
                            <?php } else { ?>
                            <div class="item"><img src="<?php echo osc_current_web_theme_url('images/no_photo.gif') ; ?>" alt="<?php echo osc_esc_html(osc_item_title()) ; ?>" /> </div>
                            <?php } ?>
                            <?php } ?></div>
                        <div class="stripe-line"></div>
                        <h4 class="desss"><?php _e("Description", 'sahara'); ?></h4>
                        <p class="narrow">
                            <?php echo osc_item_description(); ?> </p>
                        <?php if(osc_is_web_user_logged_in() && osc_logged_user_id()==osc_item_user_id()) { ?>
                        <p id="edit_item_view"> <strong>
                                <a href="<?php echo osc_item_edit_url(); ?>" rel="nofollow"><?php _e("Edit item", 'sahara'); ?></a>
                            </strong> </p>
                        <?php } ?>
                        <div class="senik">
                            <h4 class="desss"><?php _e("More information", 'sahara'); ?></h4>
                             <p class="metas"><em class="publish"><i class="fa fa-calendar"></i> <?php if ( osc_item_pub_date() != '' ) echo __('Published date', 'sahara') . ': ' . osc_format_date( osc_item_pub_date() ); ?></em> <em class="update"> <?php if ( osc_item_mod_date() != '' ) echo __('Modified date', 'sahara') . ': ' . osc_format_date( osc_item_mod_date() ); ?></em> </p>
                            
                            <p class="metas"><i class="fa fa-chevron-down"></i>
                                <?php _e("Category", 'sahara'); ?>:
                                <?php echo osc_item_category(); ?> </p>
                            <p class="metas"><i class="fa fa-eye"></i>
                                <?php _e("Viewed", 'sahara'); ?>:
                                <?php echo osc_item_views(); ?> </p>
                            <?php if( osc_count_item_meta()>= 1 ) { ?>
                            <div class="meta_list">
                                <?php while ( osc_has_item_meta() ) { ?>
                                <?php if(osc_item_meta_value()!='' ) { ?>
                                <p class="metas"><i class="fa fa-chevron-down"></i>
                                    <?php echo osc_item_meta_name(); ?>:
                                    <?php echo osc_item_meta_value(); ?> </p>
                                <?php } ?>
                                <?php } ?> </div>
                            <?php } ?> </div>
                        <div class="btn-group">
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
                        <button onclick="parent.location='<?php echo osc_item_send_friend_url(); ?>'" style="margin-left:5px" class="mami btn btn-default"><a href="<?php echo osc_item_send_friend_url(); ?>" rel="nofollow"><i class="fa fa-user"></i> <?php _e("Send to a friend", 'sahara'); ?></a> </button>
                        <?php osc_current_web_theme_path('templates/plugin/watchlist1.php') ; ?>
                        
                        <?php osc_run_hook('item_detail', osc_item() ); ?> </div>
                    <?php if( osc_comments_enabled() ) { ?>
                    <div class="col-md-12 panel panel-body">
                        <p class="narrow text-center">
                            <h3 class="head text-center"><i class="fa fa-comment"></i> <?php _e("Comments", 'sahara'); ?></h3>
                            <?php if( osc_reg_user_post_comments () && osc_is_web_user_logged_in() || !osc_reg_user_post_comments() ) { ?>
                            <div id="comments">
                                <ul id="comment_error_list"></ul>
                                <?php CommentForm::js_validation(); ?>
                                <?php if( osc_count_item_comments()>= 1 ) { ?>
                                <div class="comments_list">
                                    <?php while ( osc_has_item_comments() ) { ?>
                                    <div class="comment">
                                        <h3><strong><?php echo osc_comment_title(); ?></strong> <em><?php _e("by", 'sahara'); ?> <?php echo osc_comment_author_name(); ?>:</em></h3>
                                        <div class="bubel">
                                            <div class="lancip"></div>
                                            <p>
                                                <?php echo nl2br( osc_comment_body() ); ?> </p>
                                        </div>
                                        <?php if ( osc_comment_user_id() && (osc_comment_user_id()==osc_logged_user_id()) ) { ?>
                                        <p>
                                            <a rel="nofollow" href="<?php echo osc_delete_comment_url(); ?>">
                                                <?php _e("Delete", 'sahara'); ?> </a>
                                        </p>
                                        <?php } ?> </div>
                                    <?php } ?>
                                    <div class="paginate" style="text-align: right;">
                                        <?php echo osc_comments_pagination(); ?> </div>
                                </div>
                                <?php } ?>
                                <a class="center btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> <i class="fa fa-edit"></i>
                                    <?php _e("Leave your comment", 'sahara'); ?> </a>
                                <br>
                                <div class="collapse" id="collapseExample">
                                    <div class="well">
                                        <form action="<?php echo osc_base_url(true); ?>" method="post" name="comment_form" id="comment_form">
                                            <fieldset>
                                                <input type="hidden" name="action" value="add_comment" />
                                                <input type="hidden" name="page" value="item" />
                                                <input type="hidden" name="id" value="<?php echo osc_esc_html( osc_item_id() ); ?>" />
                                                <?php if(osc_is_web_user_logged_in()) { ?>
                                                <input type="hidden" name="authorName" value="<?php echo osc_esc_html( osc_logged_user_name() ); ?>" />
                                                <input type="hidden" name="authorEmail" value="<?php echo osc_esc_html( osc_logged_user_email() ); ?>" />
                                                <?php } else { ?>
                                                <label for="authorName">
                                                    <?php _e("Your name", 'sahara'); ?>:</label>
                                                <br>
                                                <?php CommentForm::author_input_text(); ?>
                                                <br>
                                                <label for="authorEmail">
                                                    <?php _e("Your e-mail", 'sahara'); ?>:</label>
                                                <br>
                                                <?php CommentForm::email_input_text(); ?>
                                                <br>
                                                <?php }; ?>
                                                <label for="title">
                                                    <?php _e("Title", 'sahara'); ?>:</label>
                                                <br>
                                                <?php CommentForm::title_input_text(); ?>
                                                <br />
                                                <label for="body">
                                                    <?php _e("Comment", 'sahara'); ?>:</label>
                                                <br>
                                                <?php CommentForm::body_input_textarea(); ?>
                                                <br />
                                                <button class="btn btn-success topper" type="submit">
                                                    <?php _e("Send", 'sahara'); ?> </button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php } ?> </div>
                    <?php } ?> </div>
                <!-- Content END -->
                <div class="col-md-3">
                    <div class="jkk"><div class="harga">
<?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { ?><div class="harga-product">
        <span class="assli"><p class="post-harga"><?php echo osc_item_formated_price(); ?></p></span>
    </div>
<?php } ?></div>
                    <div class="ade">
                         
                        <p class="narrow text-center">
                            <div class="profile-userpic">
                                <?php osc_current_web_theme_path( 'templates/plugin/avatar.php') ; ?>
                            </div>
                            <p class="contact_button">
                                <?php if( !osc_item_is_expired () ) { ?>
                                <?php if( !( ( osc_logged_user_id()==osc_item_user_id() ) && osc_logged_user_id() !=0 ) ) { ?>
                                <?php if(osc_reg_user_can_contact() && osc_is_web_user_logged_in() || !osc_reg_user_can_contact() ) { ?> <strong></strong>
                                <?php } ?>
                                <?php } ?>
                                <?php } ?>
                                <div id="contact">
                                    <?php if( osc_item_is_expired () ) { ?>
                                    <p>
                                        <?php _e("The listing is expired. You can't contact the publisher.", 'sahara'); ?> </p>
                                    <?php } else if( ( osc_logged_user_id()==osc_item_user_id() ) && osc_logged_user_id() !=0 ) { ?>
                                    <p>
                                        <?php _e("It's your own listing, you can't contact the publisher.", 'sahara'); ?> </p>
                                    <?php } else if( osc_reg_user_can_contact() && !osc_is_web_user_logged_in() ) { ?>
                                    <p>
                                        <?php _e("You must log in or register a new account in order to contact the advertiser", 'sahara'); ?> </p>
                                    <p class="contact_button"> <strong><a class="btn btn-success" href="<?php echo osc_user_login_url(); ?>"><?php _e("Login", 'sahara'); ?></a></strong> <strong><a class="btn btn-primary" href="<?php echo osc_register_account_url(); ?>"><?php _e("Register", 'sahara'); ?></a></strong> </p>
                                    <br>
                                    <?php } else { ?>
<div class="profile-usermenu hidden-xs-up">
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
                                    <?php if( osc_item_user_id() != null ) { ?> <p class="name"><strong><?php _e("Name", 'sahara') ?>:</strong> <a href="<?php echo osc_user_public_profile_url( osc_item_user_id() ); ?>" ><?php echo osc_item_contact_name(); ?></a></p>
                                    <?php } else { ?>
                                    <p class="name"><strong> <?php _e("Name", 'sahara') ?>:</strong>
                                        <?php echo osc_item_contact_name(); ?> </p>
                                    <?php } ?>
                                    <?php if( osc_item_show_email() ) { ?>
                                    <p class="email"><strong> <?php _e("E-mail", 'sahara'); ?>:</strong>
                                        <?php echo osc_item_contact_email(); ?> </p>
                                    <?php } ?>
                                    <div class="pho">
                                        <?php if ( osc_user_phone_mobile() !='' ) { ?>
                                        <div class="c_number">
                                            <div class="icon"></div>
                                            <div class="see"> <strong><?php _e("Cell phone", 'sahara'); ?>:</strong> <span id="clickToShow"><?php echo osc_user_phone_mobile(); ?></span> </div>
                                        </div>
                                        <?php } ?>
                                        <script>
                                        var shortNumber = $("#clickToShow").text().substring(0, $("#clickToShow").text().length - 8);
                                        var eventTracking = "_gaq.push(['_trackEvent', 'EVENT-CATEGORY', 'EVENT-ACTION', 'EVENT-LABEL']);";
                                        $("#clickToShow").hide().after('<span id="clickToShowButton" onClick="' + eventTracking + '">' + shortNumber + 'xx xxx xxx <span class="text"><span><?php _e("Show", 'sahara'); ?></span></span></span>');
                                        $("#clickToShowButton").click(function()
                                        {
                                            $("#clickToShow").show();
                                            $("#clickToShowButton").hide();
                                        });
                                        </script>
                                    </div><div class="phoner">
                                     <?php if (function_exists('osc_telephone_number')) { ?>
                                     <p class="city"><strong><?php osc_telephone_number(); ?></strong></p>
                                    <?php } ?>
                                    <?php if ( osc_item_city() !="" ) { ?>
                                    <p class="city"><strong> <?php _e("City", 'sahara'); ?>:</strong>
                                        <?php echo osc_item_city(); ?> </p>
                                    <?php } ?>
                                    <?php if ( osc_item_region() !='' ) { ?>
                                    <p class="region"><strong> <?php _e("Region", 'sahara'); ?>:</strong>
                                        <?php echo osc_item_region(); ?> </p>
                                    <?php } ?>
                                    <?php if ( osc_item_country() !='' ) { ?>
                                    <p class="region"><strong> <?php _e("Country", 'sahara'); ?>:</strong>
                                        <?php echo osc_item_country(); ?> </p>
                                    <?php } ?></div>
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

                                    <?php } ?>
                                    <?php if ( osc_user_name() !='' ) { ?>
                                    <button onclick="parent.location='<?php echo osc_user_public_profile_url(
osc_item_user_id() ); ?>'" style="width:100%" class="btn btn-info topper btn-lg rini">
                                        <a style="color:#fff" href="<?php
echo osc_user_public_profile_url( osc_item_user_id() ); ?>" rel="nofollow">
                                            <?php _e("See all ads", 'sahara'); ?> </a>
                                    </button>
                                    <?php } ?> 
</div>
                                
                              
                                <div class="maparea">
                                    <?php osc_run_hook( 'location'); ?> </div>
                    </div>
                    <?php if(osc_get_preference('sidebar-300x250', 'sahara')!='' ) { ?>
                    <div class="ads"><div class="ada">
                        <?php echo osc_get_preference('sidebar-300x250', 'sahara'); ?> </div></div>
                    <?php } ?> </div>
            </div></div>
        </div>
    </div>
</div>