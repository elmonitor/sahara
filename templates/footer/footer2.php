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
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ari-12 topbot">
                <h3 class="title"><?php echo osc_get_preference('judul1-us', 'sahara'); ?></h3>
                <div class="widget-footer">
                    <?php echo osc_get_preference('footer-us1', 'sahara'); ?> </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ari-12 topbot">
                <h3 class="title"><?php echo osc_get_preference('judul2-us', 'sahara'); ?></h3>
                <div class="widget-footer">
                    <?php echo osc_get_preference('footer-us2', 'sahara'); ?> </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ari-12 topbot">
                <h3 class="title"><?php echo osc_get_preference('judul3-us', 'sahara'); ?></h3>
                <div class="widget-footer">
                    <?php echo osc_get_preference('footer-us3', 'sahara'); ?> </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ari-12 topbot">
                <h3 class="title"><?php echo osc_get_preference('judul4-us', 'sahara'); ?></h3>
                <div class="widget-footer">
                    <?php echo osc_get_preference('footer-us4', 'sahara'); ?> </div>
            </div>
        </div>
    </div>
<?php if ( osc_count_web_enabled_locales()> 1) { ?>
                    <?php osc_goto_first_locale(); ?>
<div class="areabahasa">
                    <ul class="negara">
                        <li class="layang">
                            <?php _e("Language", 'sahara') ; ?> </li>
                        <?php $i=0 ; ?>
                        <?php while ( osc_has_web_enabled_locales() ) { ?>
                        <li <?php if( $i==0 ) { echo "class='first'"; } ?>><a id="<?php echo osc_locale_code(); ?>" href="<?php echo osc_change_language_url ( osc_locale_code() ); ?>"><img src="<?php echo osc_current_web_theme_url() ; ?>/images/language/<?php echo osc_locale_code(); ?>.png"></a> </li>
                        <?php $i++; ?>
                        <?php } ?> </ul></div>
                    <?php } ?> 
</div>
<div id="footer-copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 clearfix">
                <div class="copyright pull-left">
                    <?php echo osc_get_preference('copyright-us', 'sahara'); ?> </div>
                <div class="links pull-right">
                    <a class="kanan2" href="<?php echo osc_contact_url(); ?>">
                        <?php _e("Contact", 'sahara'); ?> </a>
                    <?php if(osc_get_preference('blog-links', 'sahara')!='' ) { ?>
                         <a target="_blank" class="kanan2" href="<?php echo osc_get_preference('blog-links', 'sahara'); ?>"><?php echo osc_get_preference('blog-text', 'sahara'); ?></a><?php } ?>
                    <?php osc_reset_static_pages(); ?>
                    <?php while( osc_has_static_pages() ) { ?>
                    <a class="kanan2" href="<?php echo osc_static_page_url(); ?>">
                        <?php echo osc_static_page_title(); ?> </a>
                    <?php } ?> </div>
            </div>
        </div>
    </div>
</div>