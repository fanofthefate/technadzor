<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class();

		$permalink = get_the_permalink(); ?>>

		<!-- post title -->
		<h2><?php the_title(); ?></h2>
		<!-- /post title -->

		<div><?php the_excerpt(); ?></div>

		<div class="more">
			<a href="<?php echo $permalink; ?>" title="<?php the_title(); ?>">Подробнее</a>
		</div>

		<?php edit_post_link(); ?>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
