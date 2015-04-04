<!-- Column 2 / Sidebar -->
    <div class="grid_4" id="sidebar">
        
    <?php if ( !function_exists('dynamic_sidebar') 
                        || !dynamic_sidebar('First_sidebar') ) : ?>
        <ul>
            <?php wp_list_categories(array(
                'depth'=>1,
                'orderby'=>id,
                'show_count'=>1,
                'hide_empty'=>1,
                'child_of'=>0
            )); ?>
        </ul>
    <?php endif; ?>
    <div id="tagcloud"></div>
    <script type="text/javascript" src="<?php echo home_url()?>/tagcloud.js"></script>
    
    </div>
    <div style="clear:both"></div>