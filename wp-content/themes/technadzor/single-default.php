<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>
			<div class="delimiter"></div>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<div class="clear"></div>

			</article>
			<!-- /article -->
			<?php
			$from = $till = $price = false;
			$from = get_field('from');
			$till = get_field('till');
			$price = get_field('price');
			if($price || ($from && $till)){ ?>
				<div class="add-info">
					<?php if($from && $till){ ?>
						<div class="terms info-block">
							<h2>Срок проведения экспертизы</h2>
							<div class="add-delimiter"></div>
							От <span class="mark"><?php echo $from; ?></span> от <span class="mark"><?php echo $till; ?></span> дней*
							<div class="explain">*в зависимости от технического задания и сложности исследования</div>
						</div>
					<?php } ?>
					<?php if($price){ ?>
						<div class="price info-block">
							<h2>Срок проведения экспертизы</h2>
							<div class="add-delimiter"></div>
							От <span class="mark"><?php echo $price; ?></span> рублей*
							<div class="explain">*в зависимости от технического задания</div>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
			<div class="main-bottom"></div>
			<?php/*<div class="single-bottom"></div>*/?>

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
