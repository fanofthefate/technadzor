<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Статьи', 'html5blank' ); ?></h1>
			<div class="delimiter"></div>
			<div class="articles-wrapper">
				<?php get_template_part('loop', 'articles'); ?>
				
				<?php paging(); ?>
			</div>

		</section>
		<!-- /section -->
	</main>
	<div class="main-bottom"></div>


<?php get_footer(); ?>
