<?php get_header(); ?>
    <!-- Column 1 /Content -->
    <div class="grid_8" id="index_page">
        <!-- Blog Post -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post">
            <!-- Post Title -->
            <h3 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
            <!-- Post Data -->
            <p class="sub"><?php the_tags('Tags：', ', ', ''); ?> &bull;<?php the_time('y-m-d H:i:s') ?> &bull;<?php comments_popup_link('0 comment', '1 comment', '% comments', '', 'comment is closed'); ?><?php edit_post_link('Edit', ' &bull; ', ''); ?></p>
            
            <!-- Post Content -->
            <?php the_excerpt(); ?>
            <!-- Read More Button -->
            <a href="<?php the_permalink(); ?>">read more...</a>
        </div>
        <div class="hr dotted clearfix">&nbsp;</div>
        <?php endwhile; ?>
        <?php else : ?>
            <h3 class="title"><a href="#" rel="bookmark">Not Found</a></h3>
        <p>There have no articles any more.</p>
        <?php endif; ?>
    <p class="clearfix"><?php previous_posts_link('&lt;&lt;  NEWER POSTS->', 0); ?> <span class="float right"><?php next_posts_link('<- OLDER POSTS &gt;&gt;', 0); ?></span></p>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>