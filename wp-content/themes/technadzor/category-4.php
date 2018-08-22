<?php get_header(); ?>
<style>
  .communication .bid, .communication .question{
    display: none;
  }
</style>
<div class="bild-rev">
	<h1 class="main-header-text">Отзывы о строительных компаниях</h1>
	<div class="delimiter"></div>
    <div class="new-firm-form clear">
    <?get_search_form();?>

    <a href="/new-otz/" class="btn-new-firm red">Оставить отзыв о компании, которой нет в нашем списке</a>
    </div>
	<?php


if ( have_posts() ) : // если имеются записи в блоге.
  query_posts(array('post_id'=>'4','paged' => get_query_var('paged')));   // указываем ID рубрик, которые необходимо вывести.
  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
  ?>
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
  <?
  endwhile;  // завершаем цикл.
  endif;
  /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
  wp_reset_query();                
  ?>

</div>
<div class="pagination-block"><? the_posts_pagination() ?></div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
