<?php get_header(); ?>
	<!-- Column 1 /Content -->
	<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
	<div class="grid_8" id="index_page">
		<!-- Blog Post -->
		<div class="post">
			<!-- Post Title -->
			<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<!-- Post Title -->
			<p class="sub"><?php the_tags('标签：', ', ', ''); ?> &bull;<?php the_time('y-m-d H:i:s') ?> &bull;<?php comments_popup_link('0 comment', '1 comment', '% comments', '', 'comment is closed'); ?><?php edit_post_link('Edit', ' &bull; ', ''); ?></p>
			<div class="hr dotted clearfix">&nbsp;</div>
			<!-- Post Content -->
			<?php the_content(); ?>
		</div>
		<!-- <div class="hr clearfix">&nbsp;</div>
		<?php comments_template(); ?> -->
	</div>
<?php else : ?>
    <div class="errorbox">
        没有文章！
    </div>
    <?php endif; ?>
    <?php get_sidebar(); ?>
<?php get_footer(); ?>