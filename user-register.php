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
    osc_enqueue_style('jquery-ui-custom', osc_current_web_theme_js_url('jquery-ui/jquery-ui-1.10.2.custom.css'));
    osc_enqueue_script('jquery-validate');
?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
    <head>
        <?php osc_current_web_theme_path('common/head.php'); ?>
        <meta name="robots" content="noindex, nofollow" />
        <meta name="googlebot" content="noindex, nofollow" />
    </head>
<body>
    <style>
    .controls {
        margin-top: 0px;
    }
    </style>
    <?php UserForm::js_validation(); ?>
    <?php osc_current_web_theme_path('header.php'); ?>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="wraps">
                <form name="register" id="register" action="<?php echo osc_base_url(true); ?>" method="post" class="form-signin">
                    <input type="hidden" name="page" value="register" />
                    <input type="hidden" name="action" value="register_post" />
                    <fieldset>
                        <div class="cat-box-title">
                            <h1 class="judul"><?php _e("Register an account for free", 'sahara'); ?></h1>
                            <div class="stripe-line"></div>
                        </div>
                        <ul id="error_list"></ul>
                        <div class="form-group">
                            <label class="control-label" for="name">
                                <?php _e("Name", 'sahara'); ?> </label>
                            <div class="controls">
                                <?php UserForm::name_text(); ?> </div>
                             
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">
                                <?php _e("Password", 'sahara'); ?> </label>
                            <div class="controls">
                                <?php UserForm::password_text(); ?> </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">
                                <?php _e("Re-type password", 'sahara'); ?> </label>
                            <div class="controls">
                                <?php UserForm::check_password_text(); ?> </div>
                        </div>
                        <p id="password-error" style="display:none;">
                            <?php _e("Passwords don't match", 'sahara '); ?>.
                   </p>

            <div class="form-group">
                 <label class="control-label" for="email"><?php _e("E-mail",'sahara'); ?></label> 
                 <div class="controls"><?php UserForm::email_text(); ?></div></div>
            <div class="form-group">
                        <?php osc_run_hook('user_register_form'); ?>
            </div>
            <div class="form-group">
                        <?php osc_show_recaptcha('register '); ?>
            </div>
            <div class="form-group">
                        <label><input class="cekk" type="checkbox" required=""><?php _e("I agree to the", 'sahara'); ?> <a target="_blank" href="<?php echo osc_get_preference('tos-me', 'sahara'); ?>"><?php _e("Terms of Use", 'sahara'); ?></a></label>
                        </div>
                        <button class="btn btn-success btn-lg seratus" type="submit"><span class="fa fa-group" aria-hidden="true"></span> <?php _e("Register", 'sahara'); ?></button>
                        <div class="jarak"></div>
<?php osc_current_web_theme_path('templates/plugin/fb.php') ; ?>

            <div class="forg">
                                    <div class="control">
                                        <div class="topper" >
 <?php _e("Already have an account?", 'sahara') ; ?> <a class="kir10" href="<?php echo osc_user_login_url(); ?>"><?php _e("Sign In", 'sahara') ; ?></a>
</div></div></div>
                </fieldset>
            </form>
	</div>
   </div>
</div>
<?php osc_current_web_theme_path('footer.php'); ?>
    </body>
</html>