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
        <div class="col-md-8 col-md-offset-2">
            <div class="wraps">
                <form action="<?php echo osc_base_url(true); ?>" method="post" class="form-signin">
                    <input type="hidden" name="page" value="login" />
                    <input type="hidden" name="action" value="recover_post" />
                    <fieldset>
                        <div class="cat-box-title">
                            <h1 class="judul"><?php _e("Recover your password", 'sahara'); ?></h1>
                            <div class="stripe-line"></div>
                        </div>
                        <input type="text" class="form-control bawah" name="s_email" placeholder="<?php echo osc_esc_html(__('E-mail','sahara')); ?>" required="" autofocus="" />
                        <div class="jarak"></div>
                        <?php osc_show_recaptcha('recover_password'); ?>
                        <div class="jarak"></div>
                        <br>
                        <button class="btn btn-lg btn-primary btn-block" name="Submit" value="Login" type="Submit">
                            <?php _e("Send me a new password", 'sahara');?></button><br> 
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <?php osc_current_web_theme_path('footer.php'); ?> 
</body>
</html>