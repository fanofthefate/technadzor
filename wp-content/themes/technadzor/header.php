<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- full-width -->
		<div class="header-wrap">
			<!-- wrapper -->
			<div class="wrapper">

				<!-- header -->
				<header class="header clear" role="banner">

						<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo" class="logo-img">
							</a>
						</div>

						<div class="site-title">
							<p class="site-name"><?php bloginfo('name'); ?></p>
							<p class="site-description"><?php bloginfo( 'description' ); ?></p>
						</div>

						<div class="connect">
							<div class="phone"><?php the_field('phone_header', 'options'); ?></div>
							<div class="schedule"><?php the_field('schedule', 'options'); ?></div>
							<div class="clear"></div>
							<a href="#popup-callback" class="callback popup-btn"></a>
							<div class="clear"></div>
						</div>

				</header>
				<!-- /header -->
			</div>
			<!-- /wrapper -->
		</div>
		<!-- /full-width -->
		
		<!-- navigation -->
		<div class="navigation">
			<!-- wrapper -->
			<div class="wrapper">
				<!-- nav -->
				<nav class="nav clear" role="navigation">
                  <div class="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
					<?php html5blank_nav(); ?>
				</nav>
				<!-- /nav -->
			</div>
			<!-- /wrapper -->
			<div class="clear"></div>
		</div>
		<!-- /navigation -->
		
		<!-- full-width -->
		<div class="main-wrapper">
			<!-- wrapper -->
			<div class="wrapper">

				<?php get_sidebar(); ?>

				<div class="content">

					<div class="breadcrumbs">
						<?php dimox_breadcrumbs(); ?>
					</div>