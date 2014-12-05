<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
<meta name="keywords" content="younger, 大船, Wordpress, 前端开发, html, javascript, css">
<meta name="description" content="younger的博客，谈谈工作，生活中有趣的片段。庆幸的是，我们都在彷徨中前进，迷茫的是，我们都在时间的岔路口。时间永远分叉，通向无数的将来">
<title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?>
</title>
<!-- Stylesheets -->
<link id="favicon" href="<?php bloginfo('template_url'); ?>/favicon.ico" rel="icon" type="image/x-icon" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - All Article" href="<?php echo get_bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - All Comment" href="<?php bloginfo('comments_rss2_url'); ?>" />
<?php wp_head(); ?>
</head>

<body>
    <!-- Text Logo -->
    <div class="site_header"> 
	   <div class="header_inner">
    	    <span><a class="site_name a_blue" href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></span>
    	    <span><?php bloginfo('description'); ?></span>
    	    <!-- Navigation Menu -->
	        <span class="header_nav">
   	            <a title="<?php bloginfo('name'); ?>"  href="/sitemap/">sitemap</a>
	            <a title="<?php bloginfo('name'); ?>"  href="/younger的栖息地/">about younger</a> 
    	    </span>
	    </div>
	</div>
    <div class="header_upper"></div>
    <div id="wrapper" class="container_12 clearfix">

   