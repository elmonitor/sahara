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
    osc_enqueue_script('jquery-validate');
?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
    <head>
        <?php osc_current_web_theme_path('common/head.php'); ?>
        <meta name="robots" content="noindex, nofollow" />
        <meta name="googlebot" content="noindex, nofollow" />
        <script type="text/javascript">
            $(document).ready(function() {
                $('form#change-username').validate({
                    rules: {
                        s_username: {
                            required: true
                        }
                    },
                    messages: {
                        s_username: {
                            required: '<?php echo osc_esc_js(__("Username: this field is required", "sahara")); ?>.'
                        }
                    },
                    errorLabelContainer: "#error_list",
                    wrapper: "li",
                    invalidHandler: function(form, validator) {
                        $('html,body').animate({ scrollTop: $('h1').offset().top }, { duration: 250, easing: 'swing'});
                    },
                    submitHandler: function(form){
                        $('button[type=submit], input[type=submit]').attr('disabled', 'disabled');
                        form.submit();
                    }
                });

                var cInterval;
                $("#s_username").keydown(function(event) {
                    if($("#s_username").attr("value")!='') {
                        clearInterval(cInterval);
                        cInterval = setInterval(function(){
                            $.getJSON(
                                "<?php echo osc_base_url(true); ?>?page=ajax&action=check_username_availability",
                                {"s_username": $("#s_username").attr("value")},
                                function(data){
                                    clearInterval(cInterval);
                                    if(data.exists==0) {
                                        $("#available").text('<?php echo osc_esc_js(__("The username is available", "sahara")); ?>');
                                    } else {
                                        $("#available").text('<?php echo osc_esc_js(__("The username is NOT available", "sahara")); ?>');
                                    }
                                }
                            );
                        }, 1000);
                    }
                });

            });
        </script>
    </head>
    <body>
    <?php osc_current_web_theme_path('header.php'); ?>
    <div class="container">
        <div class="veraari">
            <div class="col-md-3">
                <div class="profile-userpic">
                    <?php osc_current_web_theme_path('templates/plugin/avatar.php') ; ?>
                </div>
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
                        <h1 class="judul"><?php _e("Change your username", 'sahara'); ?></h1>
                        <div class="stripe-line"></div>
                    </div>
                    <div class="panel-body">
                        <ul id="error_list"></ul>
                        <form id="change-username" action="<?php echo osc_base_url(true); ?>" method="post">
                            <input type="hidden" name="page" value="user" />
                            <input type="hidden" name="action" value="change_username_post" />
                            <fieldset>
                                <p>
                                    <label for="s_username">
                                        <?php _e("Username", 'sahara'); ?> </label>
                                    <input type="text" name="s_username" id="s_username" value="" /> </p>
                                <p> <span class="help-box"><?php _e("WARNING: Once set, you will not be able to change your username again. Choose wisely.", 'sahara'); ?></span> </p>
                                <div style="clear:both;"></div>
                                <div id="available"></div>
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