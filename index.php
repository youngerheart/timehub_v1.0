<?php get_header(); ?>
	<!-- Column 1 /Content -->
	<div class="grid_8" id="index_page">
		<!-- Blog Post -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">
			<!-- Post Title -->
			<h3 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<!-- Post Data -->
			<p class="sub"><?php the_tags('Tags：', ', ', ''); ?> &bull;Posted on：<?php the_time('y-m-d') ?></p>
			
			<!-- Post Content -->
			<?php the_excerpt(); ?>
			<!-- Read More Button -->
			<a class="a_blue" href="<?php the_permalink(); ?>">Continue reading →</a>
		</div>
		<div class="hr dotted clearfix">&nbsp;</div>
		<?php endwhile; ?>
		<?php else : ?>
        	<h3 class="title"><a href="#" rel="bookmark">Not Found</a></h3>
        <p>There have no articles any more.</p>
        <?php endif; ?>
	<?php pagenavi(); ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>