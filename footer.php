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
    osc_show_widgets('footer');
?>
<div class="container">
    <?php if(osc_get_preference('homepage-728x90', 'sahara')!='' ) { ?>
    <div class="ads">
        <div class="ada">
        <?php echo osc_get_preference('homepage-728x90', 'sahara'); ?> 
        </div>
    </div>
    <?php } ?> 
</div>
<nav id="sidebar5" class="tuxedo-menu metismenu">
    <ul>
        <li>
            <center class="navigasi"><?php _e("Menu", 'sahara') ; ?></center>
        </li>
        <li>
            <a href='<?php echo osc_base_url(); ?>'><span><i class="fa fa-home"></i> <?php _e("Home", 'sahara') ; ?></span></a>
        </li>
        <li>
            <a href='#'><span><i class="fa fa-book"></i> <?php _e("Pages", 'sahara') ; ?></span> <span class="fa fa-arrow-down arrow"></span></a>
            <ul>
                <?php osc_reset_static_pages(); ?>
                <?php while( osc_has_static_pages() ) { ?>
                <li>
                    <a href="<?php echo osc_static_page_url(); ?>"><?php echo osc_static_page_title(); ?></a>
                </li>
                <?php } ?>
                <li>
                    <a href='<?php echo osc_contact_url(); ?>'><span><?php _e("Contact", 'sahara'); ?></span></a>
                </li>
            </ul>
        </li>
        <li>
            <a href='#'><span><i class="fa fa-list"></i> <?php _e("Categories", 'sahara'); ?></span> <span class="fa fa-arrow-down arrow"></span></a>
         <?php osc_goto_first_category() ; ?>
                            <?php if(osc_count_categories () > 0) { ?>
                            <ul>
                                <?php while ( osc_has_categories() ) { ?>
                                <li>
                                    <a href="<?php echo osc_search_category_url() ; ?>"><?php View::newInstance()->_erase('subcategories'); echo osc_category_name() ; ?></a>
                                 </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
        </li>
<?php if ( osc_count_web_enabled_locales() > 1) { ?>
        <?php osc_goto_first_locale(); ?>
      <li> <a href="#"><span><i class="fa fa-language"></i></span> <?php _e("Language", 'sahara') ; ?> <span class="fa fa-arrow-down arrow"></span></a>
                                <ul>
                                    <?php $i=0 ; ?>
                                    <?php while ( osc_has_web_enabled_locales() ) { ?>
                                    <li <?php if( $i==0 ) { echo "class='first'"; } ?>><a id="<?php echo osc_locale_code(); ?>" href="<?php echo osc_change_language_url ( osc_locale_code() ); ?>"><img src="<?php echo osc_current_web_theme_url() ; ?>/images/language/<?php echo osc_locale_code(); ?>.png"><?php echo osc_locale_name(); ?></a> </li>
                                    <?php $i++; ?>
                                    <?php } ?> </ul>
                        </li>
                        <?php } ?>
                        <?php if(osc_users_enabled()) { ?>
                        <?php if( osc_is_web_user_logged_in() ) { ?>
                        <li><a href="#"><i class="fa fa-user"></i> <?php _e("My account", 'sahara'); ?> <span class="fa fa-arrow-down arrow"></span></a>
                            <ul>
                                <li><a href="<?php echo osc_user_list_items_url() ; ?>"><span class="fa fa-th-list" aria-hidden="true"></span> <?php _e("Your listings", 'sahara') ; ?></a></li>
                                <li><a href="<?php echo osc_user_profile_url() ; ?>"><span class="fa fa-user" aria-hidden="true"></span> <?php _e("My account", 'sahara') ; ?></a></li>
                                <li><a href="<?php echo osc_user_alerts_url() ; ?>"><span class="fa fa-warning" aria-hidden="true"></span> <?php _e("Your alerts", 'sahara') ; ?></a></li>
                                <li><a href="<?php echo osc_change_user_email_url() ; ?>"><span class="fa fa-envelope" aria-hidden="true"></span> <?php _e("Modify e-mail", 'sahara') ; ?></a></li>
                                <li><a href="<?php echo osc_change_user_password_url() ; ?>"><span class="fa fa-cog" aria-hidden="true"></span> <?php _e("Modify password", 'sahara') ; ?></a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo osc_user_logout_url(); ?>"><i class="fa fa-power-off"></i>  <?php _e("Logout", 'sahara'); ?></a></li>
                        <?php } else { ?>
                        <li><a href="<?php echo osc_user_login_url(); ?>"><i class="fa fa-lock"></i> <?php _e("Login", 'sahara'); ?></a></li>
                        <?php if(osc_user_registration_enabled()) { ?>
                        <li><a href="<?php echo osc_register_account_url(); ?>"><i class="fa fa-user"></i>  <?php _e("Register", 'sahara'); ?></a></li>
                        <?php }; ?>
                        <?php } ?>
                        <?php } ?>
                        <?php if( osc_users_enabled() || ( !osc_users_enabled() && !osc_reg_user_post() )) { ?>
                        <li class="postadd">
                            <a style="color:#fff;" class="btn btn-block   btn-border btn-post btn-primary" href="<?php echo osc_item_post_url_in_category(); ?>">
                                <?php _e("Publish your ad for free", 'sahara');?> </a>
                        </li>
                        <?php } ?>
                </ul>
</nav>
<!-- footer -->
<?php osc_current_web_theme_path('templates/footer/'.osc_get_preference('footer-vera', 'sahara'). '.php') ; ?>
<!-- /footer -->
<a href="#0" class="cd-top">
    <?php _e("Top", 'sahara');?> </a>
<script src="<?php echo osc_current_web_theme_js_url('metisMenu.min.js') ; ?>"></script>
<script src="<?php echo osc_current_web_theme_js_url('tuxedo-menu.js') ; ?>"></script>
<script src="<?php echo osc_current_web_theme_js_url('top.js') ; ?>"></script>
<script>
    (function ($) {
        var isFixed = true;
        $('#sidebar5').tuxedoMenu({isFixed: isFixed}).metisMenu({
            toggle: false,
            activeClass: 'active'
        });
        $('#toggle-is-fixed').on('click', function () {
            $('#sidebar5').tuxedoMenu({isFixed: isFixed = !isFixed});
            $('#menu-container').toggleClass('col-sm-3');
            $('.tuxedo-menu-trigger').toggleClass('hidden');
            $('#menu-style').html(isFixed ? 'Sidebar' : 'Drawer');
        });
    })(jQuery);
</script>
<?php osc_run_hook('footer') ; ?>