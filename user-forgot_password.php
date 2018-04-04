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
                    <input type="hidden" name="page" value="login" />
                    <input type="hidden" name="action" value="forgot_post" />
                    <input type="hidden" name="userId" value="<?php echo osc_esc_html(Params::getParam('userId')); ?>" />
                    <input type="hidden" name="code" value="<?php echo osc_esc_html(Params::getParam('code')); ?>" />
                    <fieldset>
                        <div class="cat-box-title">
                            <h1 class="judul"><?php _e("Recover your password", 'sahara'); ?></h1>
                            <div class="stripe-line"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control bawah" name="new_password" value="" placeholder="<?php echo osc_esc_html(__('New password','sahara')); ?>" required="" autofocus="" /> </div>
                        <div class="form-group">
                            <input type="password" class="form-control bawah" name="new_password2" value="" placeholder="<?php echo osc_esc_html(__('Repeat new password','sahara')); ?>" required="" autofocus="" /> </div>
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block" name="Submit" value="Login" type="Submit">
                                <?php _e("Change password", 'sahara');?> </button>
                        </div><br> 
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <?php osc_current_web_theme_path('footer.php'); ?> 
</body>
</html>