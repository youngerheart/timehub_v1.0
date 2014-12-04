<?php
/**
 * Template Name: Tagcloud
 * Description: A Page Template with TagCloud.
 */
header("Content-type:application/x-javascript;charset=utf-8");
$args = array(
	'format' => 'array',
	'smallest' => 10, 
	'largest' => 10,
	'number' => 0,
	'order'  => 'DESC',
	'orderby' => 'count'
	);
$tags = wp_tag_cloud($args);
echo 'parseTo('.json_encode($tags).')';
?>
