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
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 ari-12 topbot">
                <h3 class="title"><?php echo osc_get_preference('judul1-us', 'sahara'); ?></h3>
                <div class="widget-footer">
                    <?php echo osc_get_preference('footer-us1', 'sahara'); ?> </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 ari-12 topbot">
                <h3 class="title"><?php echo osc_get_preference('judul2-us', 'sahara'); ?></h3>
                <div class="widget-footer">
                    <?php echo osc_get_preference('footer-us2', 'sahara'); ?> </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 ari-12 topbot">
                <h3 class="title"><?php echo osc_get_preference('judul3-us', 'sahara'); ?></h3>
                <div class="widget-footer">
                    <?php echo osc_get_preference('footer-us3', 'sahara'); ?> </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 ari-12 topbot">
                <h3 class="title"><?php echo osc_get_preference('judul4-us', 'sahara'); ?></h3>
                <div class="widget-footer">
                    <?php echo osc_get_preference('footer-us4', 'sahara'); ?> </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 ari-12 topbot">
                <h3 class="title"><?php _e("Social Network", 'sahara'); ?></h3>
                <div class="widget-footer">
                    <ul class="pages">
                        <?php if(osc_get_preference('facebook-us', 'sahara')!='' ) { ?>
                        <li>
                            <div class="icon-box">
                                <a target="_blank" class="btn btn-circle btn-lg-light btn-sm" href="<?php echo osc_get_preference('facebook-us', 'sahara'); ?>"> <i class="fa fa-facebook-square text-dark"></i>
                                    <?php _e("FACEBOOK", 'sahara'); ?> </a>
                            </div>
                        </li>
                        <?php } ?>
                        <?php if(osc_get_preference('twitter-us', 'sahara')!='' ) { ?>
                        <li>
                            <div class="icon-box">
                                <a target="_blank" class="btn btn-circle btn-lg-light btn-sm" href="<?php echo osc_get_preference('twitter-us', 'sahara'); ?>"> <i class="fa fa-twitter-square text-dark"></i>
                                    <?php _e("TWITTER", 'sahara'); ?> </a>
                            </div>
                        </li>
                        <?php } ?>
                        <?php if(osc_get_preference('instagram-us', 'sahara')!='' ) { ?>
                        <li>
                            <div class="icon-box">
                                <a target="_blank" class="btn btn-circle btn-lg-light btn-sm" href="<?php echo osc_get_preference('instagram-us', 'sahara'); ?>"> <i class="fa fa-instagram text-dark"></i>
                                    <?php _e("INSTAGRAM", 'sahara'); ?> </a>
                            </div>
                        </li>
                        <?php } ?>
                        <?php if(osc_get_preference('gplus-us', 'sahara')!='' ) { ?>
                        <li>
                            <div class="icon-box">
                                <a target="_blank" class="btn btn-circle btn-lg-light btn-sm" href="<?php echo osc_get_preference('gplus-us', 'sahara'); ?>"> <i class="fa fa-google-plus-square text-dark"></i>
                                    <?php _e("GOOGLE PLUS", 'sahara'); ?> </a>
                            </div>
                        </li>
                        <?php } ?>
                        <?php if(osc_get_preference('linkedin-us', 'sahara')!='' ) { ?>
                        <li>
                            <div class="icon-box">
                                <a target="_blank" class="btn btn-circle btn-lg-light btn-sm" href="<?php echo osc_get_preference('linkedin-us', 'sahara'); ?>"> <i class="fa fa-linkedin-square text-dark"></i>
                                    <?php _e("LINKEDIN", 'sahara'); ?> </a>
                            </div>
                        </li>
                        <?php } ?>
                        <?php if(osc_get_preference('youtube-us', 'sahara')!='' ) { ?>
                        <li>
                            <div class="icon-box">
                                <a target="_blank" class="btn btn-circle btn-lg-light btn-sm" href="<?php echo osc_get_preference('youtube-us', 'sahara'); ?>"> <i class="fa fa-youtube text-dark"></i>
                                    <?php _e("YOUTUBE", 'sahara'); ?> </a>
                            </div>
                        </li>
                        <?php } ?> </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 ari-12 topbot">
                <h3 class="title"><?php _e("My account", 'sahara') ; ?></h3>
                <div class="widget-footer">
                    <ul class="pages">
                        <?php if(osc_users_enabled()) { ?>
                        <?php if( osc_is_web_user_logged_in() ) { ?>
                        <li>
                            <div class="icon-box2"><a href="<?php echo osc_user_list_items_url() ; ?>"><span class="fa fa-th-list" aria-hidden="true"></span> <?php _e("Your listings", 'sahara') ; ?></a> </div>
                        </li>
                        <li>
                            <div class="icon-box2"><a href="<?php echo osc_user_profile_url() ; ?>"><span class="fa fa-user" aria-hidden="true"></span> <?php _e("My account", 'sahara') ; ?></a> </div>
                        </li>
                        <li>
                            <div class="icon-box2"><a href="<?php echo osc_user_alerts_url() ; ?>"><span class="fa fa-warning" aria-hidden="true"></span> <?php _e("Your alerts", 'sahara') ; ?></a> </div>
                        </li>
                        <li>
                            <div class="icon-box2"><a href="<?php echo osc_user_logout_url(); ?>"><i class="fa fa-power-off"></i>  <?php _e("Logout", 'sahara'); ?></a> </div>
                        </li>
                        <?php } else { ?>
                        <li>
                            <div class="icon-box2"><a href="<?php echo osc_user_login_url(); ?>"><i class="fa fa-lock"></i> <?php _e("Login", 'sahara'); ?></a> </div>
                        </li>
                        <?php if(osc_user_registration_enabled()) { ?>
                        <li>
                            <div class="icon-box2"><a href="<?php echo osc_register_account_url(); ?>"><i class="fa fa-user"></i>  <?php _e("Register", 'sahara'); ?></a> </div>
                        </li>
                        <?php }; ?>
                        <?php } ?>
                        <?php } ?> </ul>
                </div>
            </div>
        </div>
    </div>
 <?php if ( osc_count_web_enabled_locales()> 1) { ?>
                    <?php osc_goto_first_locale(); ?>
<div class="areabahasa">
                    <ul class="negara">
                        <li class="layang">
                            <?php _e("Language", 'sahara') ; ?> </li>
                        <?php $i=0 ; ?>
                        <?php while ( osc_has_web_enabled_locales() ) { ?>
                        <li <?php if( $i==0 ) { echo "class='first'"; } ?>><a id="<?php echo osc_locale_code(); ?>" href="<?php echo osc_change_language_url ( osc_locale_code() ); ?>"><img src="<?php echo osc_current_web_theme_url() ; ?>/images/language/<?php echo osc_locale_code(); ?>.png"></a> </li>
                        <?php $i++; ?>
                        <?php } ?> </ul></div>
                    <?php } ?> 

</div>
<div id="footer-copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 clearfix">
                <div class="copyright pull-left">
                    <?php echo osc_get_preference('copyright-us', 'sahara'); ?> </div>
                <div class="links pull-right">
                    <a class="kanan2" href="<?php echo osc_contact_url(); ?>">
                        <?php _e("Contact", 'sahara'); ?> </a>
                     <?php if(osc_get_preference('blog-links', 'sahara')!='' ) { ?>
                         <a target="_blank" class="kanan2" href="<?php echo osc_get_preference('blog-links', 'sahara'); ?>"><?php echo osc_get_preference('blog-text', 'sahara'); ?></a><?php } ?> 
                    <?php osc_reset_static_pages(); ?>
                    <?php while( osc_has_static_pages() ) { ?>
                    <a class="kanan2" href="<?php echo osc_static_page_url(); ?>">
                        <?php echo osc_static_page_title(); ?> </a>
                    <?php } ?> </div>

            </div>
        </div>
    </div>
</div>