<?php get_header(); ?>
<main role="main">
	<!-- section -->
	<section>
		<h1><?php the_title(); ?></h1>
		<div class="delimiter"></div>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<!-- /article -->
			<?
// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template('/comments-new-otz.php');
			endif;

			// Previous/next post navigation.
			?>
		<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
</section>
<!-- /section -->

</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>