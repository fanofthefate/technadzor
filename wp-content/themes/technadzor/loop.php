<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class();?> >

		<?php $permalink = get_the_permalink(); ?>

		<!-- post title -->
		<h2><?php the_title(); ?></h2>
		<!-- /post title -->

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php echo $permalink; ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('medium'); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

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
