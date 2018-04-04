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
<?php osc_goto_first_category() ; ?>
                <?php if(osc_count_categories ()> 0) { ?>
                <ul class="list-group">
                    <?php while ( osc_has_categories() ) { ?>
                    <li onclick="parent.location='<?php echo osc_search_category_url() ; ?>'" class="list-group-item cursor1"> <?php if(osc_get_preference('sect15_view', 'sahara_theme')=="1" ) { ?>
            <span class="badge"><?php echo osc_category_total_items() ; ?></span>
             <?php } else { ?> 
             <span class="badges warna"><?php if(arabic_language_direction()=='rtl'){ ?><i class="fa fa-angle-left"></i><?php } else { ?><i class="fa fa-angle-right"></i><?php } ?></span>
             <?php } ?>  <i class="fa fa-<?php echo saharas_category_icon( osc_category_id() ); ?> warna"></i>
                        <?php echo osc_category_name() ; ?>
                        <div class="dropdown-menu subbox box">
                            <h4><i class="fa fa-<?php echo saharas_category_icon( osc_category_id() ); ?> warna"></i> <?php echo osc_category_name() ; ?></h4>
                            <?php if ( osc_count_subcategories()> 0 ) { ?>
                            <ul class="row">
                                <?php while ( osc_has_subcategories() ) { ?>
                                <li class="col-md-4 manis">
                                    <i class="fa fa-<?php echo saharas_category_icon( osc_category_id() ); ?> warna"></i> <a class="<?php echo osc_category_slug() ; ?>" href="<?php echo osc_search_category_url() ; ?>">
                                        <?php echo osc_category_name() ; ?> <?php if(osc_get_preference('sect15_view', 'sahara_theme')=="1" ) { ?>
             <span>(<?php echo osc_category_total_items() ; ?>)</span>
             <?php } else { ?> 
             <?php } ?> </a>
                                </li>
                                <?php } ?>
                                <div class="clearfix"></div>
                            </ul>
                            <?php } ?> </div>
                    </li>
                    <?php } ?> </ul>
                <?php } ?>