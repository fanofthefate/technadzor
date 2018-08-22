<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<?get_search_form();?>
			<h1 class="h1-search"><?php echo sprintf( __( '%s Компания найдена по запросу ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
			<p class="non-rezult-text">Не нашли что искали ?</p><a href="/new-otz/" class="btn-new-firm">Добавте свой отзыв</a> 
			<?php get_template_part('loop-otz-block'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
