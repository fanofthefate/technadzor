<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class();?> >

  <div class="block-post">
  	<div class="img-prew"><?php echo get_the_post_thumbnail($page->ID, 'medium'); ?></div>
  	<div class="block-info-post">
  		<h1 class="header-text-post"><a class="link-on-blog" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  		<?php echo get_post_meta($post->ID, 'stat-prov', true); ?>
  		<div class="prew-text clear"><?php echo get_post_meta($post->ID, 'min_info_firm', true); ?></div>
  		<div class="contact-info overflow">
  			<div class="cols col-4" id="site-info">
  				<a target="_blank" href="http://<?php echo get_post_meta($post->ID, 'web-site', true); ?>"><?php echo get_post_meta($post->ID, 'web-site', true); ?></a>
  			</div>
  			<div class="cols col-4" id="phone-info">
  				<a target="_blank" href="tel:"><?php echo get_post_meta($post->ID, 'phone_number', true); ?></a>
  			</div>
  			<div class="cols col-4" id="e-mail-info">
  				<a target="_blank" href="mailto:<?php echo get_post_meta($post->ID, 'e-mail', true); ?>"><?php echo get_post_meta($post->ID, 'e-mail', true); ?></a>
  			</div>
  		</div>
  		<a href="<?php the_permalink(); ?>">
  			<div class="comments-count overflow">
  			<div class="count">
  				<?php comments_number('0', '1', '%'); ?>	
  			</div>
  			<div class="text-count">
  				Читать отзывы
  			</div>
  		</div>
  		</a>
  	</div>
  </div>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2 class="h2-search"><?php _e( 'Извените ничего не найдено. Попробуйте поискать ещё раз', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
