<?php
    /*
     *       Sahara Responsive Osclass Themes
     *       
     *       Copyright (C) 2017 OSCLASS.me
     * 
     *       This is Sahara Osclass Themes with Single License
     *  
     *       This program is a commercial software. Copying or distribution without a license is not allowed.
     *         
     *       If you need more licenses for this software. Please read more here <http://www.osclass.me/osclass-me-license/>.
     */
?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
<head>
    <?php osc_current_web_theme_path('common/head.php') ; ?>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow" />
    <script type="text/javascript" src="<?php echo osc_current_web_theme_js_url('jquery.validate.min.js') ; ?>"></script>
</head>
<body>
    <?php osc_current_web_theme_path('header.php') ; ?>
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="wraps">
                        <ul id="error_list"></ul>
                        <form action="<?php echo osc_base_url(true) ; ?>" method="post" name="contact_form">
                            <input type="hidden" name="page" value="contact" />
                            <input type="hidden" name="action" value="contact_post" />
                            <fieldset>
                                <div class="cat-box-title">
                                    <h1 class="judul"><?php _e("Contact us", 'sahara') ; ?></h1>
                                    <div class="stripe-line"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            <?php _e("Subject", 'sahara') ; ?> (
                                            <?php _e("optional", 'sahara'); ?>)</label>
                                        <?php ContactForm::the_subject() ; ?>
                                        <label>
                                            <?php _e("Your name", 'sahara') ; ?> (<?php _e("optional", 'sahara'); ?>)</label>
                                        <?php ContactForm::your_name() ; ?>
                                        <label>
                                            <?php _e("Your e-mail address", 'sahara') ; ?> </label>
                                        <?php ContactForm::your_email(); ?> </div>
                                    <div class="col-md-6">
                                        <label>
                                            <?php _e("Message", 'sahara') ; ?> </label>
                                        
                                        <?php ContactForm::your_message() ; ?>
                                        <div class="topper">
                                        <?php osc_run_hook('contact_form'); ?>
                                        <?php osc_show_recaptcha(); ?>
                                         </div>
                                        <div class="tombol">
                                            <button type="submit" class="seratus btn btn-primary pull-right"><?php _e("Send", 'sahara');?></button>
                                        </div>
                                        <?php osc_run_hook('admin_contact_form'); ?> 
                                    </div>
                                </div>
                            </fieldset>
                        </form><div class="stripe-line"></div>
                </div>
            </div>
            <div class="clear"></div>
           <?php ContactForm::js_validation() ; ?> 
        </div>
    <?php osc_current_web_theme_path('footer.php') ; ?> 
</body>
</html>