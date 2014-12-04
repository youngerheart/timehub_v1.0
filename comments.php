		<!-- Comment's List -->
<?php
		if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        		die ('Please do not load this page directly. Thanks!');
?>
		<h3>Comments</h3>
		<div class="hr dotted clearfix">&nbsp;</div>
		<ol class="commentlist">
			<?php 
   			 if (!empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) { 
        			// if there's a password
       			 // and it doesn't match the cookie
    			?>
    <li class="decmt-box">
        <p><a href="#addcomment">plaease enter password to view comments context.</a></p>
    </li>
    <?php 
        } else if ( !comments_open() ) {
    ?>
    <li class="decmt-box">
        <p><a href="#addcomment">comments function is closed!</a></p>
    </li>
    <?php 
        } else if ( !have_comments() ) { 
    ?>
    <li class="decmt-box">
        <p><a href="#addcomment">There are nobody comment,go and pick up the sofa!</a></p>
    </li>
    <?php 
        } else {
            wp_list_comments('type=comment&callback=aurelius_comment');
        }
    ?>
		</ol>
		<div class="hr clearfix">&nbsp;</div>
		<!-- Comment Form -->
<?php 
if ( !comments_open() ) :
// If registration required and not logged in.
elseif ( get_option('comment_registration') && !is_user_logged_in() ) : 
?>
<p>you must <a href="<?php echo wp_login_url( get_permalink() ); ?>">login</a> to send comments</p>
<?php else  : ?>
<!-- Comment Form -->
<form id="commentform" name="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
    <h3>Send Comments</h3>
    <div class="hr dotted clearfix">&nbsp;</div>
    <ul>
        <?php if ( !is_user_logged_in() ) : ?>
        <li class="clearfix">
            <label for="name">name</label>
            <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="23" tabindex="1" />
        </li>
        <li class="clearfix">
            <label for="email">email</label>
            <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="23" tabindex="2" />
        </li>
        <li class="clearfix">
            <label for="email">url(optional)</label>
            <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="23" tabindex="3" />
        </li>
        <?php else : ?>
        <li class="clearfix">you already logged in <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="log off">log off &raquo;</a></li>
        <?php endif; ?>
        <li class="clearfix">
            <label for="message">comments context</label>
            <textarea id="comment" name="comment" tabindex="4" rows="3" cols="40"></textarea>
        </li>
        <li class="clearfix">
            <!-- Add Comment Button -->
            <a href="javascript:void(0);" onClick="Javascript:document.forms['commentform'].submit()" class="button medium black right">send comment</a> </li>
    </ul>
    <?php comment_id_fields(); ?>
    <?php do_action('comment_form', $post->ID); ?>
</form>
<script type="text/javascript">
function reply(authorId, commentId, commentBox) {
    // 评论者名字
    var author = document.getElementById(authorId).innerHTML;
    // 拼接成 '@评论者名字' 链接
    var insertStr = '<a href="#' + commentId + '">@' + author.replace(/\t|\n/g, "") + '</a> \n';
 
    // 追加到评论输入框
    appendReply(insertStr, commentBox);
}
/**
 * 追加到输入框
 * @param insertStr     追加字符串
 * @param commentBox    评论输入框 ID
 */
function appendReply(insertStr, commentBox) {
    // 如果指定的输入框存在, 将它设为目标区域
    if(document.getElementById(commentBox) && document.getElementById(commentBox).type == 'textarea') {
        field = document.getElementById(commentBox);
    // 否则提示不能追加, 并退出操作
    } else {
        alert("The comment box does not exist!");
        return false;
    }
 
    // 如果一次评论中重复回复, 提示并退出操作
    if (field.value.indexOf(insertStr) > -1) {
        alert("You've already appended this reply!");
        return false;
    }
 
    // 如果输入框内无内容 (忽略空格, 跳格和换行), 将输入框内容设置为需要追加的字符串
    if (field.value.replace(/\s|\t|\n/g, "") == '') {
        field.value = insertStr;
    // 否则清除多余换行, 并将字符串追加到输入框中
    } else {
        field.value = field.value.replace(/[\n]*$/g, "") + '\n\n' + insertStr;
    }
 
    // 聚焦评论输入框
    field.focus();
}
</script>
<?php endif; ?>