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
                        <?php osc_current_web_theme_path( 'templates/plugin/avatar.php') ; ?></div>
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
                    <div class="cat-box-title">
                        <h1 class="judul"><?php _e("Change your password", 'sahara'); ?></h1>
                        <div class="stripe-line"></div>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo osc_base_url(true); ?>" method="post">
                            <input type="hidden" name="page" value="user" />
                            <input type="hidden" name="action" value="change_password_post" />
                            <fieldset>
                                <div class="form-group">
                                    <label class="control-label" for="password">
                                        <?php _e("Current password", 'sahara'); ?> *</label>
                                    <input type="password" name="password" id="password" value="" /> 
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="new_password">
                                        <?php _e("New password", 'sahara'); ?> *</label>
                                    <input type="password" name="new_password" id="new_password" value="" /> 
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="new_password2">
                                        <?php _e("Repeat new password", 'sahara'); ?> *</label>
                                    <input type="password" name="new_password2" id="new_password2" value="" /> 
                                </div>
                                <div style="clear:both;"></div>
                                <button class="btn btn-primary btn-lg" type="submit"><span class="fa fa-check-square" aria-hidden="true"></span>
                                    <?php _e("Update", 'sahara'); ?> </button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php osc_current_web_theme_path('footer.php'); ?> 
</body>
</html>