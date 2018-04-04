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
<div class="wrapper">
    <!-- header -->
<style>.head2 {
    padding-top: 15px;}</style>
    <div id="header">
        <div class="head2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <center><a id="logo" href="<?php echo osc_base_url() ; ?>">
                            <?php echo logo_header(); ?> </a></center>
                    </div>
                    <div class="col-md-9">
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-121">
                            <?php osc_current_web_theme_path('templates/inc/'.osc_get_preference('inc-vera', 'sahara').'.php') ; ?> </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /header -->
    <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <a type="button" class="navbar-toggle putihh" href="<?php echo osc_item_post_url_in_category(); ?>" title="<?php echo osc_esc_html(__('Publish','sahara')); ?>"><i class="fa fa-camera"></i> </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-121"> <i class="fa fa-search"></i> </button> <span class="tuxedo-menu-trigger navbar-brand"><i class="fa fa-bars"></i></span> </div>
                <nav id="bs-navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo osc_base_url() ; ?>"><span class="fa fa-home" aria-hidden="true"></span> <?php _e("Home", 'sahara') ; ?></a> </li>
                        <li>
                            <a href="<?php echo osc_contact_url(); ?>">
                                <?php _e("Contact", 'sahara'); ?> </a>
                        </li>
                        <?php osc_reset_static_pages(); ?>
                        <?php while( osc_has_static_pages() ) { ?>
                        <li>
                            <a href="<?php echo osc_static_page_url(); ?>">
                                <?php echo osc_static_page_title(); ?> </a>
                        </li>
                        <?php } ?> 
                        <?php if(osc_get_preference('blog-links', 'sahara')!='' ) { ?>
                            <li><a target="_blank" href="<?php echo osc_get_preference('blog-links', 'sahara'); ?>"><?php echo osc_get_preference('blog-text', 'sahara'); ?></a></li>
                        <?php } ?> 
                        </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if(osc_users_enabled()) { ?>
                        <?php if( osc_is_web_user_logged_in() ) { ?>
                        <li><a href="<?php echo osc_user_dashboard_url(); ?>"><i class="fa fa-user"></i> <?php _e("My account", 'sahara'); ?></a> </li>
                        <li><a href="<?php echo osc_user_logout_url(); ?>"><i class="fa fa-power-off"></i>  <?php _e("Logout", 'sahara'); ?></a> </li>
                        <?php } else { ?>
                        <li><a href="<?php echo osc_user_login_url(); ?>"><i class="fa fa-lock"></i> <?php _e("Login", 'sahara'); ?></a> </li>
                        <?php if(osc_user_registration_enabled()) { ?>
                        <li><a href="<?php echo osc_register_account_url(); ?>"><i class="fa fa-user"></i>  <?php _e("Register", 'sahara'); ?></a> </li>
                        <?php }; ?>
                        <?php }; ?>
                        <?php }; ?>
                        <li><a class="possa" href="<?php echo osc_item_post_url_in_category(); ?>"> <i class="fa fa-camera"></i> <?php _e("Publish", 'sahara'); ?>
                           </a></li>
                        </ul>
                </nav>
            </div>
        </header>

<div style="clear:both;"></div>
<?php $breadcrumb = osc_breadcrumb('&raquo;', false);
    if( $breadcrumb != '') { ?>
         <div class="suka">
             <div class="container">
                <?php echo $breadcrumb; ?>
              </div>
         </div>
<?php } ?>
<div class="container">
       <?php osc_show_widgets('header') ; ?>
       <?php if(osc_get_preference('header-728x90', 'sahara')!='') { ?>
            <div class="ads non">
                <div class="ada">
                 <?php echo osc_get_preference('header-728x90', 'sahara'); ?>
                </div>
            </div>
       <?php } ?>
</div>
<div class="forcemessages-inline container">
    <?php osc_show_flash_message(); ?>
</div>