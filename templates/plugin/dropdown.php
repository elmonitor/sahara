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
<div id="MainMenu">
                <div class="list-group panel categories">
                    <?php osc_goto_first_category() ; ?>
                    <?php if(osc_count_categories ()> 0) { ?>
                    <?php while ( osc_has_categories() ) { ?>
                    <a data-parent="#MainMenu" data-toggle="collapse" class="category 1 list-group-item list-group-item-warning collapsed caret-up-down" href="#category-<?php echo osc_category_id() ; ?>"><i class="fa fa-<?php echo saharas_category_icon( osc_category_id() ); ?> warnas"></i><?php echo osc_category_name(); ?> <?php if(osc_get_preference('sect15_view', 'sahara_theme')=="1" ) { ?>
             <span class="badge"><?php echo osc_category_total_items() ; ?></span>
             <?php } else { ?> 
             <span class="badge"><i class="fa fa-plus"></i></span>
             <?php } ?></a>
            
                    <div class="collapse list-subgroups" id="category-<?php echo osc_category_id() ; ?>">
                        <?php if ( osc_count_subcategories()> 0 ) { ?>
                        <?php while ( osc_has_subcategories() ) { ?>
                        <?php if( osc_category_total_items()> 0 ) { ?>
                        <a class="list-group-item list-subgroup-item category sub-category" href="<?php echo osc_search_category_url() ; ?>">
                            <i class="fa fa-<?php echo saharas_category_icon( osc_category_id() ); ?> warnas"></i><?php echo osc_category_name() ; ?> 
<?php if(osc_get_preference('sect15_view', 'sahara_theme')=="1" ) { ?>
             (<?php echo osc_category_total_items() ; ?>)
             <?php } else { ?> 
             <?php } ?></a>
                        <?php } else { ?>
                        <a class="list-group-item list-subgroup-item category sub-category" href="<?php echo osc_search_category_url() ; ?>">
                            <i class="fa fa-<?php echo saharas_category_icon( osc_category_id() ); ?> warnas"></i><?php echo osc_category_name() ; ?> <?php if(osc_get_preference('sect15_view', 'sahara_theme')=="1" ) { ?>
             (<?php echo osc_category_total_items() ; ?>)
             <?php } else { ?> 
             <?php } ?></a>
                        <?php } ?>
                        <?php } ?>
                       
                        <?php } ?> <a class="list-group-item list-subgroup-item category sub-category" href="<?php echo osc_search_category_url() ; ?>"><?php _e("See all ads", 'sahara'); ?> <?php echo osc_category_name() ; ?></a>
                    </div>
                    <?php } ?>
                    <?php } ?>
              </div>
            </div>