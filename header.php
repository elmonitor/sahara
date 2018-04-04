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
<?php if(osc_get_preference('font_view', 'sahara_theme') == "1") { ?>
    <?php osc_current_web_theme_path('css.php'); ?>
<?php } ?>
<?php osc_current_web_theme_path('templates/header/'.osc_get_preference('header-vera', 'sahara').'.php') ; ?> 