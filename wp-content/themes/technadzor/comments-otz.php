<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>
	<div class="delimiter"></div>
	<h2>Отзывы пользователей</h2>
	

	<ul>
		<?php wp_list_comments('type=comment&callback=OTZcomments'); // Custom callback in functions.php ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type()) ) : ?>

	<p class="clear"><?php _e( 'Comments are closed here.', 'html5blank' ); ?></p>

<?php endif; ?>

<?php comment_form(); ?>

</div>
