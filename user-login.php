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
    <style>
    .controls {
        margin-top: 0px;
    }
    </style>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="wraps">
                <form action="<?php echo osc_base_url(true); ?>" method="post" class="form-signin">
                    <input type="hidden" name="page" value="login" />
                    <input type="hidden" name="action" value="login_post" />
                    <fieldset>
                        <div class="cat-box-title">
                            <h1 class="judul"><?php _e("Access to your account", 'sahara'); ?></h1>
                            <div class="stripe-line"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email">
                                <?php _e("E-mail", 'sahara'); ?> </label>
                            <div class="controls">
                                <?php UserForm::email_login_text(); ?> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">
                                <?php _e("Password", 'sahara'); ?> </label>
                            <div class="controls">
                                <?php UserForm::password_login_text(); ?> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <?php UserForm::rememberme_login_checkbox();?>
                                <label for="remember">
                                    <?php _e("Remember me", 'sahara'); ?> </label>
                            </div>
                        </div>
                        <button class="btn btn-success btn-lg seratus" type="submit"><span class="fa fa-sign-in" aria-hidden="true"></span>
                            <?php _e("Log in", 'sahara');?> </button>
                        <br>
                        <div class="jarak"></div>
                        <?php osc_current_web_theme_path('templates/plugin/fb.php') ; ?>
                        <div class="forg">
                            <div class="control">
                                <div style="padding-top:15px">
                                    <a class="forgot2" href="<?php echo osc_recover_user_password_url(); ?>">
                                        <?php _e("Forgot password?", 'sahara'); ?> </a>
                                </div>
                            </div>
                        </div>
                        <div class="forg">
                            <div class="control">
                                <div style="padding-top:15px;padding-bottom:15px">
                                    <?php _e("Don't have an account!", 'sahara') ; ?>
                                    <a class="kir10" href="<?php echo osc_register_account_url() ; ?>">
                                        <?php _e("Sign Up here", 'sahara') ; ?> </a>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <?php osc_current_web_theme_path('footer.php'); ?> 
</body>
</html>