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

    define('SAHARA_THEME_VERSION', '1.4.0');
    define('SAHARA_THEME_PATH', dirname(__FILE__) . '/' );
    osc_enqueue_style('font-awesome', osc_current_web_theme_url('css/css/font-awesome.min.css'));
    osc_enqueue_script('php-date');

    if( !OC_ADMIN ) {
        if( !function_exists('add_close_button_action') ) {
            function add_close_button_action(){
                echo '<script type="text/javascript">';
                    echo '$(".flashmessage .ico-close").click(function(){';
                        echo '$(this).parent().hide();';
                    echo '});';
                echo '</script>';
            }
            osc_add_hook('footer', 'add_close_button_action');
        }
    }

// install themes

    if( !function_exists('sahara_theme_install') ) {
        function sahara_theme_install() {
            osc_set_preference('keyword_placeholder', __('ie. PHP Programmer', 'sahara'), 'sahara');
            osc_set_preference('version', '1.4.0', 'sahara');
            osc_set_preference('footer_link', true, 'sahara');
            osc_set_preference('defaultShowAs@all', 'list', 'sahara_theme'); 
            
            osc_set_preference('default_logo', '1', 'sahara');
            osc_set_preference('email-us', 'yes', 'sahara');
            osc_set_preference('google_fonts', 'PT Serif', 'sahara_theme');

            osc_set_preference('slider1-us', 'welcome to classifieds 1', 'sahara');
            osc_set_preference('slider2-us', 'welcome to classifieds 2', 'sahara');
            osc_set_preference('slider3-us', 'welcome to classifieds 3', 'sahara');
            osc_set_preference('slider4-us', 'welcome to classifieds 4', 'sahara');

            osc_set_preference('judulmu-us', 'Do you want to grow your business?', 'sahara');
            osc_set_preference('status-font', 'standart', 'sahara');
            osc_set_preference('ari-font', 'Arial', 'sahara');

            osc_set_preference('judul1-us', 'widget title 1', 'sahara');
            osc_set_preference('judul2-us', 'widget title 2', 'sahara');
            osc_set_preference('judul3-us', 'widget title 3', 'sahara');
            osc_set_preference('judul4-us', 'widget title 4', 'sahara');
            osc_set_preference('blog-text', 'Blogs', 'sahara');
            osc_set_preference('footer-us1', 'insert your widget', 'sahara');
            osc_set_preference('footer-us2', 'insert your widget', 'sahara');
            osc_set_preference('footer-us3', 'insert your widget', 'sahara');
            osc_set_preference('footer-us4', 'insert your widget', 'sahara');

            osc_set_preference('judul6-us', 'Useful Information', 'sahara');
            osc_set_preference('footer-us6', 'Avoid scams by acting locally or paying with PayPal', 'sahara');

            osc_set_preference('facebook-us', 'https://facebook/osclass', 'sahara');
            osc_set_preference('twitter-us', 'https://twitter.com/osclass', 'sahara');
            osc_set_preference('instagram-us', 'https://instagram.com/osclass', 'sahara');
            osc_set_preference('gplus-us', 'https://plus.google.com/osclass', 'sahara');
            osc_set_preference('copyright-us', 'Copyright 2017', 'sahara');
            osc_set_preference('premi-color', 'FFF7C5', 'sahara');
            osc_set_preference('theme-color', '53A318', 'sahara');
            osc_set_preference('a-color', '53A318', 'sahara');
            osc_set_preference('b-color', 'F2A900', 'sahara');
            osc_set_preference('a2-color', 'FFFFFF', 'sahara');
            osc_set_preference('back-color', 'F1EFEF', 'sahara');
            osc_set_preference('h1-color', '53A318', 'sahara');

            osc_set_preference('primary-color', '53A318', 'sahara');
            osc_set_preference('primaryh-color', '468A14', 'sahara');
            osc_set_preference('blue-color', '5BC0DE', 'sahara');
            osc_set_preference('blueh-color', '4796AD', 'sahara');

            osc_set_preference('green-color', '53A318', 'sahara');
            osc_set_preference('greenh-color', '468A14', 'sahara');
            osc_set_preference('yellow-color', 'f0ad4e', 'sahara');
            osc_set_preference('yellowh-color', 'ec971f', 'sahara');

            osc_set_preference('red-color', 'd9534f', 'sahara');
            osc_set_preference('redh-color', 'c9302c', 'sahara');

            osc_set_preference('header-vera', 'header1', 'sahara');
            osc_set_preference('select-us', 'home1', 'sahara');
            osc_set_preference('footer-vera', 'footer1', 'sahara');
            osc_set_preference('single-vera', 'single1', 'sahara');
            osc_set_preference('inc-vera', 'country', 'sahara');

            osc_set_preference('related', '3', 'sahara');
            osc_set_preference('popularads_num_ads', '5', 'sahara');
            osc_set_preference('latest_num_ads', '8', 'sahara');
            osc_set_preference('premiumads_num_ads', '6', 'sahara');
            osc_set_preference('premiumads_search_ads', '6', 'sahara');
            osc_set_preference('side_view', '1', 'sahara_theme');
            osc_set_preference('sect1_view', '1', 'sahara_theme');
            osc_set_preference('sect2_view', '1', 'sahara_theme');
            osc_set_preference('sect3_view', '1', 'sahara_theme');
            osc_set_preference('sect4_view', '1', 'sahara_theme');
            osc_set_preference('sect5_view', '1', 'sahara_theme');
            osc_set_preference('sect6_view', '1', 'sahara_theme');
          
            osc_set_preference('sect7_view', '0', 'sahara_theme');
            osc_set_preference('sect8_view', '0', 'sahara_theme');
            osc_set_preference('sect9_view', '0', 'sahara_theme');
            osc_set_preference('sect10_view', '0', 'sahara_theme');
            osc_set_preference('sect11_view', '1', 'sahara_theme');
            osc_set_preference('sect12_view', '1', 'sahara_theme');
            osc_set_preference('sect13_view', '0', 'sahara_theme');
            osc_set_preference('sect14_view', '0', 'sahara_theme');
            osc_set_preference('sect15_view', '0', 'sahara_theme');
            osc_set_preference('sect16_view', '0', 'sahara_theme');
            osc_set_preference('multi_view', '0', 'sahara_theme');        
            osc_set_preference('font_view', '1', 'sahara_theme');
            osc_reset_preferences();
        }
    }

// Google font

    if( !osc_get_preference('google_fonts', 'sahara_theme') ) {
        osc_set_preference('google_fonts', 'PT Serif', 'sahara_theme');
    }

    function sahara_add_google_fonts(){
   if(osc_get_preference('status-font', 'sahara') == "standart") {
 echo "<style>body, .thumbnail .caption, h1, h2, h3, h4, h5, h6, .listings h2 a, .listing-attr .currency-value, input[type=text], input[type=password], textarea, select, div.fancy-select div.trigger, .main-search label {
    font-family: ".osc_get_preference('ari-font', 'sahara').", Helvetica, sans-serif;
}
</style>";
} else {
    echo "<link href='https://fonts.googleapis.com/css?family=".sahara_google_fonts()."' rel='stylesheet' type='text/css'>";
    echo "<style>body, .thumbnail .caption, h1, h2, h3, h4, h5, h6, .listings h2 a, .listing-attr .currency-value, input[type=text], input[type=password], textarea, select, div.fancy-select div.trigger, .main-search label {
    font-family: '".str_replace('+',' ',sahara_google_fonts())."', sans-serif;
}
</style>";
    }
}   

    function theme_sahara_actions_admin() {
        if( Params::getParam('file') == 'oc-content/themes/sahara/admin/settings.php' ) {
            if( Params::getParam('donation') == 'successful' ) {
                osc_set_preference('donation', '1', 'sahara');
                osc_reset_preferences();
            }
        }

        switch( Params::getParam('action_specific') ) {
            case('settings'):
                $side_view   =   Params::getParam('side_view', 'sahara_theme');
                $sect1_view   =   Params::getParam('sect1_view', 'sahara_theme');
                $sect2_view   =   Params::getParam('sect2_view', 'sahara_theme');
                $sect3_view   =   Params::getParam('sect3_view', 'sahara_theme');
                $sect4_view   =   Params::getParam('sect4_view', 'sahara_theme');

                $sect5_view   =   Params::getParam('sect5_view', 'sahara_theme');
                $sect6_view   =   Params::getParam('sect6_view', 'sahara_theme');
                $sect7_view   =   Params::getParam('sect7_view', 'sahara_theme');
                $sect8_view   =   Params::getParam('sect8_view', 'sahara_theme');
                $sect9_view   =   Params::getParam('sect9_view', 'sahara_theme');
                $sect10_view   =   Params::getParam('sect10_view', 'sahara_theme');
                $sect11_view   =   Params::getParam('sect11_view', 'sahara_theme');
                $sect12_view   =   Params::getParam('sect12_view', 'sahara_theme');
                $sect13_view   =   Params::getParam('sect13_view', 'sahara_theme');
                $sect14_view   =   Params::getParam('sect14_view', 'sahara_theme');
                $sect15_view   =   Params::getParam('sect15_view', 'sahara_theme');
                $sect16_view   =   Params::getParam('sect16_view', 'sahara_theme');
                
                $multi_view   =   Params::getParam('multi_view', 'sahara_theme');
                $font_view   =  Params::getParam('font_view', 'sahara_theme');
                $footerLink  = Params::getParam('footer_link');
                $defaultLogo = Params::getParam('default_logo');

                osc_set_preference('keyword_placeholder', Params::getParam('keyword_placeholder'), 'sahara');
                osc_set_preference('footer_link', ($footerLink ? '1' : '0'), 'sahara');
                osc_set_preference('default_logo', ($defaultLogo ? '1' : '0'), 'sahara');
                osc_set_preference('side_view', ($side_view ? '1' : '0'), 'sahara_theme');
                osc_set_preference('sect1_view', ($sect1_view ? '1' : '0'), 'sahara_theme');
                osc_set_preference('sect2_view', ($sect2_view ? '1' : '0'), 'sahara_theme');
                osc_set_preference('sect3_view', ($sect3_view ? '1' : '0'), 'sahara_theme');
                osc_set_preference('sect4_view', ($sect4_view ? '1' : '0'), 'sahara_theme');

                osc_set_preference('sect5_view', ($sect5_view ? '1' : '0'), 'sahara_theme');
                osc_set_preference('sect6_view', ($sect6_view ? '1' : '0'), 'sahara_theme');
                osc_set_preference('sect7_view', ($sect7_view ? '1' : '0'), 'sahara_theme');
                osc_set_preference('sect8_view', ($sect8_view ? '1' : '0'), 'sahara_theme');

                osc_set_preference('sect9_view', ($sect9_view ? '1' : '0'), 'sahara_theme');
                osc_set_preference('sect10_view', ($sect10_view ? '1' : '0'), 'sahara_theme');
                osc_set_preference('sect11_view', ($sect11_view ? '1' : '0'), 'sahara_theme');
                osc_set_preference('sect12_view', ($sect12_view ? '1' : '0'), 'sahara_theme');
                osc_set_preference('sect13_view', ($sect13_view ? '1' : '0'), 'sahara_theme');
                osc_set_preference('sect14_view', ($sect14_view ? '1' : '0'), 'sahara_theme');
                osc_set_preference('sect15_view', ($sect15_view ? '1' : '0'), 'sahara_theme');
                osc_set_preference('sect16_view', ($sect16_view ? '1' : '0'), 'sahara_theme');
                
                osc_set_preference('multi_view', ($multi_view ? '1' : '0'), 'sahara_theme');
                osc_set_preference('blog-text',         trim(Params::getParam('blog-text', false, false, false)),                  'sahara');
                osc_set_preference('blog-links',         trim(Params::getParam('blog-links', false, false, false)),                  'sahara');

                osc_set_preference('font_view', ($font_view ? '1' : '0'), 'sahara_theme');
                osc_set_preference('google_fonts', Params::getParam('google_fonts'), 'sahara_theme');

                osc_set_preference('header-vera',         trim(Params::getParam('header-vera', false, false, false)),                  'sahara');
                osc_set_preference('footer-vera',         trim(Params::getParam('footer-vera', false, false, false)),                  'sahara');
                osc_set_preference('single-vera',         trim(Params::getParam('single-vera', false, false, false)),                  'sahara');
                osc_set_preference('inc-vera',         trim(Params::getParam('inc-vera', false, false, false)),                  'sahara');
                osc_set_preference('select-us',         trim(Params::getParam('select-us', false, false, false)),                  'sahara');
                osc_set_preference('company-us',         trim(Params::getParam('company-us', false, false, false)),                  'sahara');

                osc_set_preference('email-us',         trim(Params::getParam('email-us', false, false, false)),                  'sahara');
                osc_set_preference('address-us',         trim(Params::getParam('address-us', false, false, false)),                  'sahara');
                osc_set_preference('judulmu-us',         trim(Params::getParam('judulmu-us', false, false, false)),                  'sahara');
                osc_set_preference('status-font',         trim(Params::getParam('status-font', false, false, false)),                  'sahara');
                osc_set_preference('ari-font',         trim(Params::getParam('ari-font', false, false, false)),                  'sahara');

                osc_set_preference('judul1-us',         trim(Params::getParam('judul1-us', false, false, false)),                  'sahara');
                osc_set_preference('judul2-us',         trim(Params::getParam('judul2-us', false, false, false)),                  'sahara');
                osc_set_preference('judul3-us',         trim(Params::getParam('judul3-us', false, false, false)),                  'sahara');
                osc_set_preference('judul4-us',         trim(Params::getParam('judul4-us', false, false, false)),                  'sahara');
                osc_set_preference('judul6-us',         trim(Params::getParam('judul6-us', false, false, false)),                  'sahara');

                osc_set_preference('footer-us1',         trim(Params::getParam('footer-us1', false, false, false)),                  'sahara');
                osc_set_preference('footer-us2',         trim(Params::getParam('footer-us2', false, false, false)),                  'sahara');
                osc_set_preference('footer-us3',         trim(Params::getParam('footer-us3', false, false, false)),                  'sahara');
                osc_set_preference('footer-us4',         trim(Params::getParam('footer-us4', false, false, false)),                  'sahara');
                osc_set_preference('footer-us6',         trim(Params::getParam('footer-us6', false, false, false)),                  'sahara');

                osc_set_preference('copyright-us',         trim(Params::getParam('copyright-us', false, false, false)),                  'sahara');
                osc_set_preference('memo-us',         trim(Params::getParam('memo-us', false, false, false)),                  'sahara');
                osc_set_preference('facebook-us',         trim(Params::getParam('facebook-us', false, false, false)),                  'sahara');
                osc_set_preference('instagram',         trim(Params::getParam('instagram', false, false, false)),                  'sahara');
                osc_set_preference('twitter-us',         trim(Params::getParam('twitter-us', false, false, false)),                  'sahara');
                osc_set_preference('gplus-us',         trim(Params::getParam('gplus-us', false, false, false)),                  'sahara');
                osc_set_preference('linkedin-us',         trim(Params::getParam('linkedin-us', false, false, false)),                  'sahara');
                osc_set_preference('youtube-us',         trim(Params::getParam('youtube-us', false, false, false)),                  'sahara');
                                      
                osc_set_preference('vera-us',         trim(Params::getParam('vera-us', false, false, false)),                  'sahara');
                osc_set_preference('slider1-us',         trim(Params::getParam('slider1-us', false, false, false)),                  'sahara');
                osc_set_preference('slider12-link',         trim(Params::getParam('slider12-link', false, false, false)),                  'sahara');

                osc_set_preference('slider2-us',         trim(Params::getParam('slider2-us', false, false, false)),                  'sahara');
                osc_set_preference('slider22-link',         trim(Params::getParam('slider22-link', false, false, false)),                  'sahara');

                osc_set_preference('slider3-us',         trim(Params::getParam('slider3-us', false, false, false)),                  'sahara');
                osc_set_preference('slider32-link',         trim(Params::getParam('slider32-link', false, false, false)),                  'sahara');

                osc_set_preference('slider4-us',         trim(Params::getParam('slider4-us', false, false, false)),                  'sahara');
                osc_set_preference('slider42-link',         trim(Params::getParam('slider42-link', false, false, false)),                  'sahara');

                osc_set_preference('brand1-link',         trim(Params::getParam('brand1-link', false, false, false)),                  'sahara');
                osc_set_preference('brand2-link',         trim(Params::getParam('brand2-link', false, false, false)),                  'sahara');
                osc_set_preference('brand3-link',         trim(Params::getParam('brand3-link', false, false, false)),                  'sahara');
                osc_set_preference('brand4-link',         trim(Params::getParam('brand4-link', false, false, false)),                  'sahara');
                osc_set_preference('brand5-link',         trim(Params::getParam('brand5-link', false, false, false)),                  'sahara');
                osc_set_preference('brand6-link',         trim(Params::getParam('brand6-link', false, false, false)),                  'sahara');
                osc_set_preference('brand7-link',         trim(Params::getParam('brand7-link', false, false, false)),                  'sahara');
                osc_set_preference('brand8-link',         trim(Params::getParam('brand8-link', false, false, false)),                  'sahara');

                osc_set_preference('fb-code',         trim(Params::getParam('fb-code', false, false, false)),                  'sahara');
                osc_set_preference('back-color',         trim(Params::getParam('back-color', false, false, false)),                  'sahara');
                osc_set_preference('defaultShowAs@all', Params::getParam('defaultShowAs@all'), 'sahara_theme');
                osc_set_preference('defaultShowAs@search', Params::getParam('defaultShowAs@all'));
                osc_set_preference('premi-color',         trim(Params::getParam('premi-color', false, false, false)),                  'sahara');
                osc_set_preference('theme-color',         trim(Params::getParam('theme-color', false, false, false)),                  'sahara');
                osc_set_preference('a-color',         trim(Params::getParam('a-color', false, false, false)),                  'sahara');
                osc_set_preference('b-color',         trim(Params::getParam('b-color', false, false, false)),                  'sahara');
                osc_set_preference('a2-color',         trim(Params::getParam('a2-color', false, false, false)),                  'sahara');

                osc_set_preference('primary-color',         trim(Params::getParam('primary-color', false, false, false)),                  'sahara');
                osc_set_preference('primaryh-color',         trim(Params::getParam('primaryh-color', false, false, false)),                  'sahara');
                osc_set_preference('blue-color',         trim(Params::getParam('blue-color', false, false, false)),                  'sahara');
                osc_set_preference('blueh-color',         trim(Params::getParam('blueh-color', false, false, false)),                  'sahara');
                osc_set_preference('yellow-color',         trim(Params::getParam('yellow-color', false, false, false)),                  'sahara');

                osc_set_preference('yellowh-color',         trim(Params::getParam('yellowh-color', false, false, false)),                  'sahara');
                osc_set_preference('green-color',         trim(Params::getParam('green-color', false, false, false)),                  'sahara');
                osc_set_preference('greenh-color',         trim(Params::getParam('greenh-color', false, false, false)),                  'sahara');
                osc_set_preference('red-color',         trim(Params::getParam('red-color', false, false, false)),                  'sahara');
                osc_set_preference('redh-color',         trim(Params::getParam('redh-color', false, false, false)),                  'sahara');
                osc_set_preference('h1-color',         trim(Params::getParam('h1-color', false, false, false)),                  'sahara');

                osc_set_preference('tos-me',         trim(Params::getParam('tos-me', false, false, false)),                  'sahara');
                osc_set_preference('header-728x90',         trim(Params::getParam('header-728x90', false, false, false)),                  'sahara');
                osc_set_preference('homepage-728x90',       trim(Params::getParam('homepage-728x90', false, false, false)),                'sahara');
                osc_set_preference('ads-member',       trim(Params::getParam('ads-member', false, false, false)),                'sahara');
                osc_set_preference('sidebar-160x600',       trim(Params::getParam('sidebar-160x600', false, false, false)),                'sahara');
                osc_set_preference('sidebar-300x250',       trim(Params::getParam('sidebar-300x250', false, false, false)),                'sahara');
                osc_set_preference('search-results-top-728x90',     trim(Params::getParam('search-results-top-728x90', false, false, false)),          'sahara');

                osc_set_preference('premiumads_search_ads',  trim(Params::getParam('premiumads_search_ads', false, false, false)),       'sahara');
                osc_set_preference('related',  trim(Params::getParam('related', false, false, false)),       'sahara');
                osc_set_preference('popularads_num_ads',  trim(Params::getParam('popularads_num_ads', false, false, false)),       'sahara');
                osc_set_preference('latest_num_ads',  trim(Params::getParam('latest_num_ads', false, false, false)),       'sahara');
                osc_set_preference('premiumads_num_ads',  trim(Params::getParam('premiumads_num_ads', false, false, false)),       'sahara');

osc_add_flash_ok_message(__('Theme settings updated correctly', 'sahara'), 'admin');
osc_redirect_to(osc_admin_render_theme_url('oc-content/themes/sahara/admin/settings.php'));
            break;

//category icons
            case('categories_icons'):
                $catsIcons  = Params::getParam('cat-icons');
                foreach($catsIcons as $catId => $iconName)
                {
                    osc_set_preference('cat-icons-'.$catId, $iconName, 'saharas_theme_cat_icons');
                }
                osc_add_flash_ok_message(__('Category icons settings updated correctly', 'sahara'), 'admin');
                osc_redirect_to(osc_admin_render_theme_url( 'oc-content/themes/sahara/admin/admin.php#icon' ));
           break;
//upload category
            case('up_category'):
            $package = Params::getFiles('set_image');
            $idt = $_POST['id_category'];
            if( $package['error'] == UPLOAD_ERR_OK ) {
                if( move_uploaded_file($package['tmp_name'], WebThemes::newInstance()->getCurrentThemePath() . "images/categorys/".$idt.".jpg" ) ) {
                    osc_add_flash_ok_message(__('The image has been uploaded correctly', 'sahara'), 'admin');
                    } else {
                    osc_add_flash_error_message(__("An error has occurred, please try again", 'sahara'), 'admin');
                }
                } else {
                osc_add_flash_error_message(__("An error has occurred, please try again", 'sahara'), 'admin');
            }
            header('Location: ' . osc_admin_render_theme_url('oc-content/themes/sahara/admin/images.php')); exit;
            break;      
//remove category
            case('remove_category'):
            $id_remove = $_POST['id_remove'];
            if(file_exists (osc_themes_path() . 'sahara/images/categorys/' . $id_remove . '.jpg') ) {
                @unlink(osc_themes_path() . 'sahara/images/categorys/' . $id_remove . '.jpg') ;
                osc_add_flash_ok_message(__('The image has been removed', 'sahara'), 'admin');
                } else {
                osc_add_flash_error_message(__("Image not found", 'sahara'), 'admin');
            }
            header('Location: ' . osc_admin_render_theme_url('oc-content/themes/sahara/admin/images.php')); exit;
            break;
            
            
       
        }
    }

//Category Icons

    if( osc_get_preference('first_load_cat_icons', 'saharas_theme_cat_icons') == "" ){
        osc_set_preference('cat-icons-1', 'shopping-cart', 'saharas_theme_cat_icons');
        osc_set_preference('cat-icons-2', 'car', 'saharas_theme_cat_icons');
        osc_set_preference('cat-icons-3', 'graduation-cap', 'saharas_theme_cat_icons');
        osc_set_preference('cat-icons-4', 'home', 'saharas_theme_cat_icons');
        osc_set_preference('cat-icons-5', 'wrench', 'saharas_theme_cat_icons');
        osc_set_preference('cat-icons-6', 'users', 'saharas_theme_cat_icons');
        osc_set_preference('cat-icons-7', 'heart', 'saharas_theme_cat_icons');
        osc_set_preference('cat-icons-8', 'suitcase', 'saharas_theme_cat_icons');

        osc_set_preference('cat-icons-9', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-10', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-11', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-12', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-13', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-14', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-15', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-16', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-17', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-18', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-19', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-20', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-21', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-22', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-23', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-24', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-25', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-26', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-27', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-28', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-29', 'shopping-cart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-30', 'shopping-cart', 'saharas_theme_cat_icons');
                
                osc_set_preference('cat-icons-31', 'car', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-32', 'car', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-33', 'car', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-34', 'car', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-35', 'car', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-36', 'car', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-37', 'car', 'saharas_theme_cat_icons');

                osc_set_preference('cat-icons-38', 'graduation-cap', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-39', 'graduation-cap', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-40', 'graduation-cap', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-41', 'graduation-cap', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-42', 'graduation-cap', 'saharas_theme_cat_icons');

                osc_set_preference('cat-icons-43', 'home', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-44', 'home', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-45', 'home', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-46', 'home', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-47', 'home', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-48', 'home', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-49', 'home', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-50', 'home', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-51', 'home', 'saharas_theme_cat_icons');
                

                osc_set_preference('cat-icons-52', 'wrench', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-53', 'wrench', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-54', 'wrench', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-55', 'wrench', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-56', 'wrench', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-57', 'wrench', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-58', 'wrench', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-59', 'wrench', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-60', 'wrench', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-61', 'wrench', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-62', 'wrench', 'saharas_theme_cat_icons');
     
                osc_set_preference('cat-icons-63', 'users', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-64', 'users', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-65', 'users', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-66', 'users', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-67', 'users', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-68', 'users', 'saharas_theme_cat_icons');

                osc_set_preference('cat-icons-69', 'heart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-70', 'heart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-71', 'heart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-72', 'heart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-73', 'heart', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-74', 'heart', 'saharas_theme_cat_icons');

                osc_set_preference('cat-icons-75', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-76', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-77', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-78', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-79', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-80', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-81', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-82', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-83', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-84', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-85', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-86', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-87', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-88', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-89', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-90', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-91', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-92', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-93', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-94', 'suitcase', 'saharas_theme_cat_icons');
                osc_set_preference('cat-icons-95', 'suitcase', 'saharas_theme_cat_icons');
                
        osc_set_preference('first_load_cat_icons', 'loaded', 'saharas_theme_cat_icons');
    }



if( !function_exists('sahara_show_as') ){
        function sahara_show_as(){

            $p_sShowAs    = Params::getParam('sShowAs');
            $aValidShowAsValues = array('list', 'gallery');
            if (!in_array($p_sShowAs, $aValidShowAsValues)) {
                $p_sShowAs = sahara_default_show_as();
            }

            return $p_sShowAs;
        }
    }

if( !function_exists('sahara_default_show_as') ){
        function sahara_default_show_as(){
            return getPreference('defaultShowAs@all','sahara_theme');
        }
    }

 if( !function_exists('sahara_search_number') ) {
        /**
          *
          * @return array
          */
        function sahara_search_number() {
            $search_from = ((osc_search_page() * osc_default_results_per_page_at_search()) + 1);
            $search_to   = ((osc_search_page() + 1) * osc_default_results_per_page_at_search());
            if( $search_to > osc_search_total_items() ) {
                $search_to = osc_search_total_items();
            }

            return array(
                'from' => $search_from,
                'to'   => $search_to,
                'of'   => osc_search_total_items()
            );
        }
    }

//item title

if( !function_exists('sahara_item_title') ) {
        function sahara_item_title() {
            $title = osc_item_title();
            foreach( osc_get_locales() as $locale ) {
                if( Session::newInstance()->_getForm('title') != "" ) {
                    $title_ = Session::newInstance()->_getForm('title');
                    if( @$title_[$locale['pk_c_code']] != "" ){
                        $title = $title_[$locale['pk_c_code']];
                    }
                }
            }
            return $title;
        }
    }

//item description

if( !function_exists('sahara_item_description') ) {
        function sahara_item_description() {
            $description = osc_item_description();
            foreach( osc_get_locales() as $locale ) {
                if( Session::newInstance()->_getForm('description') != "" ) {
                    $description_ = Session::newInstance()->_getForm('description');
                    if( @$description_[$locale['pk_c_code']] != "" ){
                        $description = $description_[$locale['pk_c_code']];
                    }
                }
            }
            return $description;
        }
    }



//select countries 

function sahara_countries_select($name, $id, $label)
{
    $aCountries = Country::newInstance()->listAll(); 
    if(count($aCountries) > 0 ) { 
        $html  = '<select name="'.$name.'" class="form-control dpn" id="'.$id.'">';
        $html .= '<option value="">'.$label.'</option>';
        foreach($aCountries as $country) { 
            $html .= '<option value="'. $country['pk_c_code'].'">'. $country['s_name'].'</option>';
        } 
        $html .= '</select>';
    } 

    echo $html;
}


//select state

function sahara_regions_select($name, $id, $label)
{
    $aRegions = Region::newInstance()->listAll(); 
    if(count($aRegions) > 0 ) { 
        $html  = '<select name="'.$name.'" class="form-control dpn" id="'.$id.'">';
        $html .= '<option value="" id="sRegionSelect">'.$label.'</option>';
        foreach($aRegions as $region) { 
            $html .= '<option value="'. $region['pk_i_id'].'">'. $region['s_name'].'</option>';
        } 
        $html .= '</select>';
    } 

    echo $html;
}

//select city

function sahara_cities_select($name, $id, $label)
{
    $html  = '<select name="'.$name.'" class="form-control dpn" id="'.$id.'">';
    $html .= '<option value="" id="sCitySelect">'.$label.'</option>';
    if(osc_count_list_cities() > 0 ) {
        while(osc_has_list_cities() ) { 
            $html .= '<option value="'.osc_esc_html( osc_list_city_name() ).'">'. osc_list_city_name().'</option>';
        }
    }
    $html .= '</select>';

    echo $html;
}


//logo header

    if( !function_exists('logo_header') ) {
        function logo_header() {
            $html = '<img alt="'. osc_esc_html( osc_page_title() ).'" src="' . osc_current_web_theme_url('images/logo.jpg') . '" />';
            if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/logo.jpg" ) ) {
                return $html;
            } else if( osc_get_preference('default_logo', 'sahara') && (file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/default-logo.jpg")) ) {
                return '<img alt="'.osc_esc_html( osc_page_title() ).'" src="' . osc_current_web_theme_url('images/default-logo.jpg') . '" />';
            } else {
                return osc_page_title();
            }
        }
    }

    

// favicon images

if( !function_exists('logo_footer') ) {
        function logo_footer() {

             $html = '<link href="' . osc_current_web_theme_url('images/favicon.jpg') . '" rel="shortcut icon">';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/favicon.jpg" ) ) {
                return $html;
             } else {
                return '<link href="' . osc_current_web_theme_url('images/favicon.png') . '" rel="shortcut icon">';

            }
        }
    }

// slider images

if( !function_exists('logo_slider') ) {
        function logo_slider() {

             $html = '<div class="item"><a href="'.osc_get_preference('slider12-link', 'sahara').'"><img alt="'.osc_esc_html( osc_get_preference('slider1-us', 'sahara') ).'" src="' . osc_current_web_theme_url('images/slider/slider11.jpg') . '" /></a></div>';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/slider/slider11.jpg" ) ) {
                return $html;
             } else {
                return '';

            }
        }
    }

if( !function_exists('logo_slider_1') ) {
        function logo_slider_1() {

             $html = '<div class="item"><a href="'.osc_get_preference('slider22-link', 'sahara').'"><img alt="'.osc_esc_html( osc_get_preference('slider2-us', 'sahara') ).'" src="' . osc_current_web_theme_url('images/slider/slider22.jpg') . '" /></a></div>';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/slider/slider22.jpg" ) ) {
                return $html;
             } else {
                return '';

            }
        }
    }

if( !function_exists('logo_slider_2') ) {
        function logo_slider_2() {

             $html = '<div class="item"><a href="'.osc_get_preference('slider32-link', 'sahara').'"><img alt="'.osc_esc_html( osc_get_preference('slider3-us', 'sahara') ).'" src="' . osc_current_web_theme_url('images/slider/slider33.jpg') . '" /></a></div>';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/slider/slider33.jpg" ) ) {
                return $html;
             } else {
                return '';

            }
        }
    }
if( !function_exists('logo_slider_3') ) {
        function logo_slider_3() {

             $html = '<div class="item"><a href="'.osc_get_preference('slider42-link', 'sahara').'"><img alt="'.osc_esc_html( osc_get_preference('slider4-us', 'sahara') ).'" src="' . osc_current_web_theme_url('images/slider/slider44.jpg') . '" /></a></div>';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/slider/slider44.jpg" ) ) {
                return $html;
             } else {
                return '';

            }
        }
    }

// background images

if( !function_exists('logo_slider_4') ) {
        function logo_slider_4() {

             $html = '<img src="' . osc_current_web_theme_url('css/img/background.jpg') . '" />';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "css/img/background.jpg" ) ) {
                return $html;
             } else {
                return '<img src="' . osc_current_web_theme_url('css/img/0.jpg') . '" />';

            }
        }
    }

//brand images

if( !function_exists('brand_1') ) {
        function brand_1() {

             $html = '<div class="item"><a href="'.osc_get_preference('brand1-link', 'sahara').'"><img src="' . osc_current_web_theme_url('images/brand/1.jpg') . '" /></a></div>';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/brand/1.jpg" ) ) {
                return $html;
             } else {
                return '';

            }
        }
    }

if( !function_exists('brand_2') ) {
        function brand_2() {

             $html = '<div class="item"><a href="'.osc_get_preference('brand2-link', 'sahara').'"><img src="' . osc_current_web_theme_url('images/brand/2.jpg') . '" /></a></div>';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/brand/2.jpg" ) ) {
                return $html;
             } else {
                return '';

            }
        }
    }

if( !function_exists('brand_3') ) {
        function brand_3() {

             $html = '<div class="item"><a href="'.osc_get_preference('brand3-link', 'sahara').'"><img src="' . osc_current_web_theme_url('images/brand/3.jpg') . '" /></a></div>';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/brand/3.jpg" ) ) {
                return $html;
             } else {
                return '';

            }
        }
    }

if( !function_exists('brand_4') ) {
        function brand_4() {

             $html = '<div class="item"><a href="'.osc_get_preference('brand4-link', 'sahara').'"><img src="' . osc_current_web_theme_url('images/brand/4.jpg') . '" /></a></div>';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/brand/4.jpg" ) ) {
                return $html;
             } else {
                return '';

            }
        }
    }

if( !function_exists('brand_5') ) {
        function brand_5() {

             $html = '<div class="item"><a href="'.osc_get_preference('brand5-link', 'sahara').'"><img src="' . osc_current_web_theme_url('images/brand/5.jpg') . '" /></a></div>';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/brand/5.jpg" ) ) {
                return $html;
             } else {
                return '';

            }
        }
    }

if( !function_exists('brand_6') ) {
        function brand_6() {

             $html = '<div class="item"><a href="'.osc_get_preference('brand6-link', 'sahara').'"><img src="' . osc_current_web_theme_url('images/brand/6.jpg') . '" /></a></div>';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/brand/6.jpg" ) ) {
                return $html;
             } else {
                return '';

            }
        }
    }

if( !function_exists('brand_7') ) {
        function brand_7() {

             $html = '<div class="item"><a href="'.osc_get_preference('brand7-link', 'sahara').'"><img src="' . osc_current_web_theme_url('images/brand/7.jpg') . '" /></a></div>';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/brand/7.jpg" ) ) {
                return $html;
             } else {
                return '';

            }
        }
    }

if( !function_exists('brand_8') ) {
        function brand_8() {

             $html = '<div class="item"><a href="'.osc_get_preference('brand8-link', 'sahara').'"><img src="' . osc_current_web_theme_url('images/brand/8.jpg') . '" /></a></div>';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/brand/8.jpg" ) ) {
                return $html;
             } else {
                return '';

            }
        }
    }


//currency symbol

function sahara_currency_symbol($currCode){
$currencies =  array(
        'USD' => array('name'=>'USD - U.S. Dollars', 'symbol'=>'$','symbol_html'=>'$'),
        'GBP' => array('name'=>'GBP - British Pounds', 'symbol'=>'£','symbol_html'=>'&pound;'),
        'EUR' => array('name'=>'EUR - Euros', 'symbol'=>'€','symbol_html'=>'&euro;'),
        'AUD' => array('name'=>'AUD - Australian Dollars', 'symbol'=>'$','symbol_html'=>'$'),
        'BRL' => array('name'=>'BRL - Brazilian Real', 'symbol'=>'R$','symbol_html'=>'R$'),
        'CAD' => array('name'=>'CAD - Canadian Dollars', 'symbol'=>'$','symbol_html'=>'$'),
        'CZK' => array('name'=>'CZK - Czech koruny', 'symbol'=>'Kc','symbol_html'=>''),
        'DKK' => array('name'=>'DKK - Danish Kroner', 'symbol'=>'kr','symbol_html'=>'kr'),
        'HKD' => array('name'=>'HKD - Hong Kong Dollars', 'symbol'=>'$','symbol_html'=>'$'),
        'HUF' => array('name'=>'HUF - Hungarian Forints', 'symbol'=>'Ft','symbol_html'=>'Ft'),
        'ILS' => array('name'=>'ILS - Israeli Shekels', 'symbol'=>'?','symbol_html'=>'&#8362;'),
        'JPY' => array('name'=>'JPY - Japanese Yen', 'symbol'=>'¥','symbol_html'=>'&#165;'),
        'MYR' => array('name'=>'MYR - Malaysian Ringgits', 'symbol'=>'RM','symbol_html'=>'RM'),
        'MXN' => array('name'=>'MXN - Mexican Pesos', 'symbol'=>'$','symbol_html'=>'$'),
        'NZD' => array('name'=>'NZD - New Zealand Dollars', 'symbol'=>'$','symbol_html'=>'$'),
        'NOK' => array('name'=>'NOK - Norwegian Kroner', 'symbol'=>'kr','symbol_html'=>'kr'),
        'PHP' => array('name'=>'PHP - Philippine Pesos', 'symbol'=>'Php','symbol_html'=>'Php'),
        'PLN' => array('name'=>'PLN - Polish zloty', 'symbol'=>'zl','symbol_html'=>''),
        'SGD' => array('name'=>'SGD - Singapore Dollars', 'symbol'=>'$','symbol_html'=>'$'),
        'SEK' => array('name'=>'SEK - Swedish Kronor', 'symbol'=>'kr','symbol_html'=>'kr'),
        'CHF' => array('name'=>'CHF - Swiss Francs', 'symbol'=>'CHF','symbol_html'=>'CHF'),
        'TWD' => array('name'=>'TWD - Taiwan New Dollars', 'symbol'=>'$','symbol_html'=>'$'),
        'THB' => array('name'=>'THB - Thai Baht', 'symbol'=>'?','symbol_html'=>' &#3647;'),
        'TRY' => array('name'=>'TRY - Turkish Liras', 'symbol'=>'TL','symbol_html'=>' &#3647;'),
    );  
    if(isset($currencies[$currCode]))
    {
        return $currencies[$currCode]['symbol_html'];
    }
    return false;
}

//select region
    function chosen_region_select() {
        View::newInstance()->_exportVariableToView('list_regions', Search::newInstance()->listRegions('%%%%', '>=', 'region_name ASC') ) ;

        if( osc_count_list_regions() > 0 ) {
            echo '<select name="sRegion" id="sahara_sCategory_chosen" data-placeholder="'.osc_esc_html( __('Select a region...', 'sahara') ).'" class="form-control" >' ;
            echo '<option>' . __('Select a region...', 'sahara') . '</option>' ;
            while( osc_has_list_regions() ) {
                echo '<option value="' .osc_esc_html( osc_list_region_name() ) . '">' . osc_list_region_name() . '</option>' ;
            }
            echo '</select>' ;
        }

        View::newInstance()->_erase('list_regions') ;
    }

    if( !function_exists('item_detail_location') ) {
        /*
         * @return array the list of location: starting with the address and finishing with the country
         */
        function item_detail_location() {
            $location = array() ;
            if( osc_item_address() != '' ) {
                $location[] = osc_item_address() ;
            }
            if( osc_item_city_area() != '' ) {
                $location[] = osc_item_city_area() ;
            }
            if( osc_item_city() != '' ) {
                $location[] = osc_item_city() ;
            }
            if( osc_item_region() != '' ) {
                $location[] = osc_item_region() ;
            }
            if( osc_item_country() != '' ) {
                $location[] = osc_item_country() ;
            }

            return $location ;
        }
    }

//flash message

if( !function_exists('sahara_show_flash_message') ) {
        function sahara_show_flash_message() {
            $message = Session::newInstance()->_getMessage('pubMessages') ;

            if (isset($message['msg']) && $message['msg'] != '') {
                if( $message['type'] == 'ok' ) $message['type'] = 'success' ;
                echo '<div class="alert-message ' . $message['type'] . '">' ;
                echo '<a class="close" href="#">×</a>';
                echo '<p>' . $message['msg'] . '</p>';
                echo '</div>' ;

                Session::newInstance()->_dropMessage('pubMessages') ;
            }
        }
    }


function arabic_language_direction(){
		$rtllang = array('ar_SY','he_HE','fa_IR');
		if(in_array(osc_current_user_locale(), $rtllang)){
			return 'rtl';
		}else{
			return 'ltr';
		}
	}

//fine uploader

if (sahara_is_fineuploader()) {
    if (!OC_ADMIN) {
        osc_enqueue_style('fine-uploader-css', osc_current_web_theme_styles_url('fineuploader.css'));
    }
    osc_enqueue_script('jquery-fineuploader');
}

function sahara_is_fineuploader() {
    return Scripts::newInstance()->registered['jquery-fineuploader'] && method_exists('ItemForm', 'ajax_photos');
}

if( !function_exists('get_user_menu') ) {
        function get_user_menu() {
            $options   = array();
            $options[] = array(
                'name' => __('Public Profile', 'sahara'),
                 'url' => osc_user_public_profile_url(),
               'class' => 'opt_publicprofile'
            );
            $options[] = array(
                'name'  => __('Listings', 'sahara'),
                'url'   => osc_user_list_items_url(),
                'class' => 'opt_items'
            );
            $options[] = array(
                'name' => __('Your alerts', 'sahara'),
                'url' => osc_user_alerts_url(),
                'class' => 'opt_alerts'
            );
            $options[] = array(
                'name'  => __('My account', 'sahara'),
                'url'   => osc_user_profile_url(),
                'class' => 'opt_account'
            );
            $options[] = array(
                'name'  => __('Change your e-mail', 'sahara'),
                'url'   => osc_change_user_email_url(),
                'class' => 'opt_change_email'
            );
            $options[] = array(
                'name'  => __('Change password', 'sahara'),
                'url'   => osc_change_user_password_url(),
                'class' => 'opt_change_password'
            );
            $options[] = array(
                'name'  => __('Logout', 'sahara'),
                'url'   => osc_user_logout_url(),
                'class' => 'opt_delete_account'
            );

            return $options;
        }
    }

//redirect

    if(!function_exists('user_dashboard_redirect')) {
        function user_dashboard_redirect() {
            $page   = Params::getParam('page');
            $action = Params::getParam('action');
            if($page=='user' && $action=='dashboard') {
                if(ob_get_length()>0) {
                    ob_end_flush();
                }
                header("Location: ".osc_user_list_items_url(), TRUE,301);
            }
        }
        osc_add_hook('init', 'user_dashboard_redirect');
    }

function sahara_redirect_user_dashboard()
    {
        if( (Rewrite::newInstance()->get_location() === 'user') && (Rewrite::newInstance()->get_section() === 'dashboard') ) {
            header('Location: ' .osc_user_list_items_url());
            exit;
        }
}
    
    if( !function_exists('user_info_js') ) {
        function user_info_js() {
            $location = Rewrite::newInstance()->get_location();
            $section  = Rewrite::newInstance()->get_section();

            if( $location === 'user' && in_array($section, array('dashboard', 'profile', 'alerts', 'change_email', 'change_username',  'change_password', 'items')) ) {
                $user = User::newInstance()->findByPrimaryKey( Session::newInstance()->_get('userId') );
                View::newInstance()->_exportVariableToView('user', $user);
                ?>
<script type="text/javascript">
    sahara.user = {};
    sahara.user.id = '<?php echo osc_user_id(); ?>';
    sahara.user.secret = '<?php echo osc_user_field("s_secret"); ?>';
</script>
            <?php }
        }
        osc_add_hook('header', 'user_info_js');
    }
    if(!function_exists('check_install_sahara_theme')) {
        function check_install_sahara_theme() {
            $current_version = osc_get_preference('version', 'sahara');
            //check if current version is installed or need an update
            if( !$current_version ) {
                sahara_theme_install();
            }
        }
    }

    function sahara_footer_css(){
    

    sahara_add_google_fonts();
    
}
osc_add_hook('footer', 'sahara_footer_css');

function sahara_google_fonts()
{
    return trim(osc_get_preference('google_fonts', 'sahara_theme'));

}


    function sahara_delete() {
        Preference::newInstance()->delete(array('s_section' => 'sahara'));
    }

    osc_add_hook('init', 'sahara_redirect_user_dashboard', 2);
    osc_add_hook('init_admin', 'theme_sahara_actions_admin');
    osc_add_hook('theme_delete_sahara', 'sahara_delete');
    osc_admin_menu_appearance(__('Sahara Images', 'sahara'), osc_admin_render_theme_url('oc-content/themes/sahara/admin/admin.php'), 'sahara_images');
    osc_admin_menu_appearance(__('Sahara Category', 'sahara'), osc_admin_render_theme_url('oc-content/themes/sahara/admin/images.php'), 'sahara_category');
    osc_admin_menu_appearance(__('Sahara Settings', 'sahara'), osc_admin_render_theme_url('oc-content/themes/sahara/admin/settings.php'), 'sahara_admin');
osc_admin_menu_appearance(__('Documentation', 'sahara'), osc_admin_render_theme_url('oc-content/themes/sahara/admin/documentation.php'), 'sahara_doc');

    check_install_sahara_theme();

//Ads search

    function search_ads_listing_top_fn1() {
        if(osc_get_preference('search-results-top-728x90', 'sahara')!='') {
            echo '<div class="clear"></div>' . PHP_EOL;
            echo '<div class="ads"><div class="ada">' . PHP_EOL;
            echo osc_get_preference('search-results-top-728x90', 'sahara');
            echo '</div></div>' . PHP_EOL;
        }
    }
    osc_add_hook('search_ads_listing_top1', 'search_ads_listing_top_fn1');

    function search_ads_listing_medium_fn1() {
        if(osc_get_preference('search-results-middle-728x90', 'sahara')!='') {
            echo '<div class="clear"></div>' . PHP_EOL;
            echo '<div class="ads"><div class="ada">' . PHP_EOL;
            echo osc_get_preference('search-results-middle-728x90', 'sahara');
            echo '</div></div>' . PHP_EOL;
        }
    }
    osc_add_hook('search_ads_listing_medium1', 'search_ads_listing_medium_fn1');

    osc_add_hook('admin_page_header', 'theme_sahara_admin_regions_message', 10);

//footer js

function sahara_footer_js(){
    
    echo '<script type="text/javascript" src="'.osc_current_web_theme_js_url('main.js').'"></script>';

}
osc_add_hook('footer', 'sahara_footer_js');

//select category search

function osc_categories_select_sahara($name = 'sCategory', $category = null, $default_str = null) {
        if($default_str == null) $default_str = __('Select a category');
        if(is_array($category)) $category['pk_i_id'] = $category[0];
        CategoryForm::category_select(Category::newInstance()->toTree(), $category, $default_str, $name);
    }

//user type

function sahara_user_type() {
        if(Params::getParam('sCompany') <> '' and Params::getParam('sCompany') <> null) {
            Search::newInstance()->addJoinTable( 'pk_i_id', DB_TABLE_PREFIX.'t_user', DB_TABLE_PREFIX.'t_item.fk_i_user_id = '.DB_TABLE_PREFIX.'t_user.pk_i_id', 'LEFT OUTER' ) ;
            
            if(Params::getParam('sCompany') == 1) {
                Search::newInstance()->addConditions(sprintf("%st_user.b_company = 1", DB_TABLE_PREFIX));
                } else {
                Search::newInstance()->addConditions(sprintf("coalesce(%st_user.b_company, 0) <> 1", DB_TABLE_PREFIX, DB_TABLE_PREFIX));
            }
        }
    }
    
    osc_add_hook('search_conditions', 'sahara_user_type');

//related listings

if( !function_exists('related_listings') ) {
        function related_listings() {
            $related_number = osc_get_preference('related', 'sahara');
            View::newInstance()->_exportVariableToView('items', array());
            
            $mSearch = new Search();
            $mSearch->addCategory(osc_item_category_id());
            $mSearch->addRegion(osc_item_region());
            $mSearch->addItemConditions(sprintf("%st_item.pk_i_id < %s ", DB_TABLE_PREFIX, osc_item_id()));
            $mSearch->limit(0, $related_number);
            
            $aItems      = $mSearch->doSearch();
            $iTotalItems = count($aItems);
            if( $iTotalItems == 3 ) {
                View::newInstance()->_exportVariableToView('items', $aItems);
                return $iTotalItems;
            }
            unset($mSearch);
            
            $mSearch = new Search();
            $mSearch->addCategory(osc_item_category_id());
            $mSearch->addItemConditions(sprintf("%st_item.pk_i_id != %s ", DB_TABLE_PREFIX, osc_item_id()));
            $mSearch->limit(0, $related_number);
            
            $aItems = $mSearch->doSearch();
            $iTotalItems = count($aItems);
            if( $iTotalItems > 0 ) {
                View::newInstance()->_exportVariableToView('items', $aItems);
                return $iTotalItems;
            }
            unset($mSearch);
            
            return 0;
        }
    }

//refine category
    if( !function_exists('get_categoriessahara') ) {
        function get_categoriessahara( ) {
            $location = Rewrite::newInstance()->get_location() ;
            $section  = Rewrite::newInstance()->get_section() ;
            
            if ( $location != 'search' ) {
                return false ;
			}
            
            $category_id = osc_search_category_id() ;
			
            if(count($category_id) > 1) {
                return false;
			}
            
			
            $category_id = (int) $category_id ;
            
            $categoriessahara = Category::newInstance()->hierarchy($category_id) ;
            
            foreach($categoriessahara as &$category) {
                $category['url'] = get_category_url($category) ;
			}
            
            return $categoriessahara ;
		}
	}
	
	if( !function_exists('get_subcategories') ) {
		function get_subcategories( ) {
			$location = Rewrite::newInstance()->get_location() ;
			$section  = Rewrite::newInstance()->get_section() ;
			
			if ( $location != 'search' ) {
				return false ;
			}
            
			$category_id = osc_search_category_id() ;
            
			if(count($category_id) > 1) {
				return false ;
			}
            
			$category_id = (int) $category_id[0] ;
            
			$subCategories = Category::newInstance()->findSubcategories($category_id) ;
            
			foreach($subCategories as &$category) {
				$category['url'] = get_category_url($category) ;			 
			}
            
			return $subCategories ;
		}
	}
	
	if ( !function_exists('get_category_url') ) {
		function get_category_url( $category ) {
			$path = '';
			if ( osc_rewrite_enabled() ) {
                if ($category != '') {
                    $category = Category::newInstance()->hierarchy($category['pk_i_id']) ;
                    $sanitized_category = "" ;
                    for ($i = count($category); $i > 0; $i--) {
                        $sanitized_category .= $category[$i - 1]['s_slug'] . '/' ;
					}
                    $path = osc_base_url() . $sanitized_category ;
				}
				} else {
                $path = sprintf( osc_base_url(true) . '?page=search&sCategory=%d', $category['pk_i_id'] ) ;
			}
            
            return $path;
		}
	}
	
	if ( !function_exists('get_category_num_items') ) {
		function get_category_num_items( $category ) {
            $category_stats = CategoryStats::newInstance()->countItemsFromCategory($category['pk_i_id']) ;
            
            if( empty($category_stats) ) {
                return 0 ;
			}
            
            return $category_stats;
		}
	}
//icon category

function saharas_category_icon($catId){
    $icon = osc_esc_html( strtolower(osc_get_preference('cat-icons-'.$catId, 'saharas_theme_cat_icons') ) );
    if($icon!="")
    return strtolower($icon);
    else
    return "shopping-cart";
}
if( !function_exists('caty_img') ) {
        function caty_img() {

             $html = '<img  src="'.osc_current_web_theme_url().'/images/categorys/'.osc_category_id().'.jpg" class="attachment-full" alt="'.osc_esc_html( osc_category_name() ).'">';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/categorys/".osc_category_id().".jpg" ) ) {
                return $html;
             } else {
                return '<img  src="'.osc_current_web_theme_url().'/images/categorys/0.jpg" class="attachment-full" alt="'.osc_esc_html( osc_category_name() ).'">       ';

            }
        }
    }

?>