<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rfernand
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- My code -->
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MMP-460</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://path/to/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="wp-content/themes/rfernand/js/audio.js"></script>
  

<!-- End -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--my code-->
	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <!--music-->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--end-->
      <a class="navbar-brand" href="https://wpmmp.bmcc.cuny.edu/~rfernand/" rel="home">Ruben Fernandez</a>
    </div>

    <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="https://wpmmp.bmcc.cuny.edu/~rfernand/" rel="home">Home</a></li>
        <li><a href="https://wpmmp.bmcc.cuny.edu/~rfernand/?page_id=2">Resume</a>
        </li>
        <li class="page_item page-item-2">
          <a href="https://wpmmp.bmcc.cuny.edu/~rfernand/?page_id=36">Blog</a>
        <ul class="dropdown">
                <li class="page_item page-item-225"><a href="https://wpmmp.bmcc.cuny.edu/~rfernand/?page_id=225">Slideshow</a></li>
                <li class="page_item page-item-186"><a href="https://wpmmp.bmcc.cuny.edu/~rfernand/?page_id=186">Websites</a></li>
            <li class="page_item page-item-122"><a href="https://wpmmp.bmcc.cuny.edu/~rfernand/?page_id=122">Videos</a></li>
          </ul></li>
     <li class="page_item page-item-13"><a href="https://wpmmp.bmcc.cuny.edu/~rfernand/?page_id=13">About Me</a>
      </li>
      </ul>
    </div>
  </div>
</div>
</nav>
	<!--end-->
<!--<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rfernand' ); ?></a>-->

	<!--<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .site-branding -->

		<!--<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'rfernand' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<!--<div id="content" class="site-content">-->
</body>
</html>
