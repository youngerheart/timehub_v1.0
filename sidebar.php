<!-- Column 2 / Sidebar -->
    <div class="grid_4" id="sidebar">
        
    <?php if ( !function_exists('dynamic_sidebar') 
                        || !dynamic_sidebar('First_sidebar') ) : ?>
        <h4>Split Catalog</h4>
        <ul>
            <?php wp_list_categories('depth=1&title_li=&orderby=id&show_count=0&hide_empty=1&child_of=0'); ?>
        </ul>
    <?php endif; ?>
        
    <?php if ( !function_exists('dynamic_sidebar') 
                            || !dynamic_sidebar('Second_sidebar') ) : ?>        
        <h4>New </h4>
        <ul>
            <?php
                $posts = get_posts('numberposts=5&orderby=post_date');
                foreach($posts as $post) {
                    setup_postdata($post);
                    echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                }
                $post = $posts[0];
            ?>
        </ul>
    <?php endif; ?>
    <div id="tagcloud"></div>
    <script type="text/javascript" src="http://timehub.cn/api/tagcloud/tagcloud.js"></script>
        
    <?php if ( !function_exists('dynamic_sidebar') 
                        || !dynamic_sidebar('Fourth_sidebar') ) : ?>                    
        <h4>Article Cache</h4>
        <ul>
            <?php wp_get_archives('limit=10'); ?>
        </ul>
    <?php endif; ?>
    
    </div>
    <div style="clear:both"></div>