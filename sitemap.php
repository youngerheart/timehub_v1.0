<?php
/**
 * Template Name: Sitemap
 * Description: A Page Template with Sitemap.
 */
get_header();
query_posts('showposts=999&orderby=new'); //showposts=10表示10篇
while(have_posts()): the_post();
?>
<span class="sitemap_span">
<a href="<?php the_permalink(); ?>"target="_blank"><?php the_title()?></a>
</span>
<?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>