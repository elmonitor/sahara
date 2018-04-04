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
    osc_enqueue_script('fancybox');
    osc_enqueue_style('fancybox', osc_assets_url('js/fancybox/jquery.fancybox.css'));
    osc_enqueue_script('jquery-validate');
?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
<head>
    <?php osc_current_web_theme_path('common/head.php'); ?>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" /> 
</head>
<body class="item-page">
    <?php osc_current_web_theme_path('header.php'); ?>
    <?php osc_current_web_theme_path('templates/single/'.osc_get_preference('single-vera', 'sahara').'.php') ; ?>
    <?php osc_current_web_theme_path('footer.php'); ?>
    <script src="<?php echo osc_current_web_theme_js_url('owl.carousel.js') ; ?>"></script>
    <script src="<?php echo osc_current_web_theme_js_url('power3.js') ; ?>"></script>
</body>
</html>