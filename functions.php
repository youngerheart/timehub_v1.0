<?php
/** widgets */
if( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'First_sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Second_sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Third_sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Fourth_sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
}

function author_rule(){
	?>
<?php if (get_comment_author_url()) : ?><a id="commentauthor-<?php comment_ID() ?>" href="<?php comment_author_url() ?>">
<?php else : ?><span id="commentauthor-<?php comment_ID() ?>">
<?php endif; ?>
<?php comment_author() ?>
<?php if(get_comment_author_url()) : ?></a>
<?php else : ?></span><?php endif; ?>
<?php
}
function aurelius_comment($comment, $args, $depth) 
{
   $GLOBALS['comment'] = $comment; ?>
   <li class="comment" id="li-comment-<?php comment_ID(); ?>">
        <div class="gravatar"> <?php if (function_exists('get_avatar') && get_option('show_avatars')) { echo get_avatar($comment, 48); } ?>
  			<a href="javascript:void(0);" onclick="reply('commentauthor-<?php comment_ID() ?>', 'comment-<?php comment_ID() ?>', 'comment');">reply</a>
  		</div>
        <div class="comment_content" id="comment-<?php comment_ID(); ?>">   
            <div class="clearfix">
                    <?php printf(__(author_rule()), get_comment_author_link()); ?>
                    <span class="comment-meta commentmetadata">Published in:<?php echo get_comment_time('Y-m-d H:i:s'); ?></span><?php edit_comment_link('Modify'); ?>
            </div>

            <div class="comment_text">
                <?php if ($comment->comment_approved == '0') : ?>
                    <em>Your comments are auditing, later will be displayed!</em><br />
        <?php endif; ?>
        <?php comment_text(); ?>
            </div>
        </div>

<?php } 
function new_excerpt_length($length) {
    return 200;
}
add_filter('excerpt_more', '...');
add_filter('excerpt_length', 'new_excerpt_length');


/* Pagenavi */  
function pagenavi( $before = '', $after = '', $p = 2 ) {   
if ( is_singular() ) return;   
global $wp_query, $paged;   
$max_page = $wp_query->max_num_pages;   
if ( $max_page == 1 ) return;   
if ( empty( $paged ) ) $paged = 1;   
echo $before.'<div id="pagenavi">'."\n";   
echo '<span class="pages">Page: ' . $paged . ' of ' . $max_page . ' </span>';   
if ( $paged > 1 ) p_link( $paged - 1, 'Previous Page', '<' );   
if ( $paged > $p + 1 ) p_link( 1, 'First Page' );   
if ( $paged > $p + 2 ) echo '<span class="page-dot">...</span> ';   
for( $i = $paged - $p; $i <= $paged + $p; $i++ ) {   
if ( $i > 0 && $i <= $max_page ) $i == $paged ? print "<span class='page-numbers current'>{$i}</span>" : p_link( $i );   
}   
if ( $paged < $max_page - $p - 1 ) echo '<span class="page-dot">...</span> ';   
if ( $paged < $max_page - $p ) p_link( $max_page, 'Last Page' );   
if ( $paged < $max_page ) p_link( $paged + 1,'Next Page', '>' );   
echo '</div>'.$after."\n";   
}   
function p_link( $i, $title = '', $linktype = '' ) {   
if ( $title == '' ) $title = "Page {$i}";   
if ( $linktype == '' ) { $linktext = $i; } else { $linktext = $linktype; }   
echo "<a class='page-numbers' href='", esc_html( get_pagenum_link( $i ) ), "' title='{$title}'>{$linktext}</a>";   
} 
?>
