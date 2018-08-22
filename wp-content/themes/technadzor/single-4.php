<?php get_header(); ?>
<style>
	.communication .bid, .communication .question{
		display: none;
	}
</style>
<main role="main">
	<!-- section -->
	<section>
		<h1><?php the_title(); ?></h1>
		<div class="delimiter"></div>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="contact-info overflow">
					<div class="cols col-3" id="site-info">
						<a target="_blank" href="http://<?php echo get_post_meta($post->ID, 'web-site', true); ?>"><?php echo get_post_meta($post->ID, 'web-site', true); ?></a>
					</div>
					<div class="cols col-3" id="phone-info">

						<a target="" href="tel:"><?php echo get_post_meta($post->ID, 'phone_number', true); ?></a>
					</div>
					<div class="cols col-3" id="e-mail-info">
						<a target="_blank" href="mailto:<?php echo get_post_meta($post->ID, 'e-mail', true); ?>"><?php echo get_post_meta($post->ID, 'e-mail', true); ?></a>
					</div>
					<div class="cols col-3"><?php echo get_post_meta($post->ID, 'stat-prov', true); ?></div>
				</div>
				  <div class="full-block-post">
  	<div class="img-prew"><?php echo get_the_post_thumbnail($page->ID, 'medium'); ?></div>
  	<div class="block-info-post">
  		<div class="prew-text clear"><?php the_content(); ?></div>

  			<div class="comments-count overflow">
  			<a href="#reply-title"><div class="text-count">
  				Оставить отзыв 
  			</div></a>
  		</div>
  		</a>
  	</div>
  </div>
				

				<div class="clear"></div>

			</article>
			<!-- /article -->
			<?
// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template('/comments-otz.php');
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
