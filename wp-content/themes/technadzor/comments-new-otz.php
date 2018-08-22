
<div class="new-comment-page">
<?php if (have_comments()) : ?>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type()) ) : ?>


<?php endif; ?>

<?

comment_form();

?>
</div>
