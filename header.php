<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <!-->

<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="content-language" content="<?php bloginfo('language'); ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <meta name="copyright" content="Copyright <?php bloginfo('name');?> <?php echo date('Y');?>. All Rights Reserved.">
    <meta name="description" content="Welcome to the City of Milford, Nebraska. Milford was established in 1864 and has a rich history of pioneer stories, the coming of the railroad, a spring of medicinal waters, and a legend of an Indian princess."/>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <title><?php echo wp_title();?></title>
    <?php wp_head();?>

<!-- alert -->
	<script type="text/javascript">
		jQuery(function($){
			$("#menu-quick li.alert a").fancybox({type:'iframe',width:400,maxHeight:247});
			$("#menu-quick li.concern a").fancybox({type:'iframe',width:625,maxHeight:425});
		});
	</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="top">
			<div class="contain">
				<div class="right">
					<a class="login" href="<?php echo wp_login_url( get_permalink() ); ?>" title="Login">Login</a>
					<div id="search-container" class="search-box-wrapper">
						<div class="search-box">
							<?php get_search_form(); ?>
						</div>
					</div>
					<nav id="social">
						<h2>Social Navigation</h2>
						<?php wp_nav_menu(array( 'menu' => 'social')); ?>
					</nav>
					<span class="connect">Connect with us</span>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header-main">
			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<div class="contain">
					<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<h2>Primary Navigation</h2>
					<div id="weather">
						<?php date_default_timezone_set('America/Chicago');
			              $today = date("l, F d g:ia T"); ?>
			            <p><?php echo $today; ?></p>
			            <?php echo do_shortcode("[forecast]"); ?>
			            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/clear.png"/>
			        </div>
				</div>
			</nav>
		</div>
	</header><!-- #masthead -->

	<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<h1 class="site-title"><?php bloginfo( 'name' ); ?> – The official government &amp; community website of Milford, Nebraska</h1>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Milford-Nebraska-logo.png" alt="Milford Nebraska logo">
	</a>

	<div id="main" class="site-main">