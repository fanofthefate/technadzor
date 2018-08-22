<?php get_header(); ?>

<?php get_sidebar(); ?>

	<main role="main">
		<!-- section -->
		<section>
		<?php the_post(); ?>

			<div id="post-<?php the_ID(); ?>"  class="clear">

				<?php the_content(); ?>

			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
