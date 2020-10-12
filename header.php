<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kenedy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
    <!--CSS============================================= -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/linearicons.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/main.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<?php get_template_part( 'template-parts/preloader');?>

<?php if (is_front_page()) :?>
<header id="header">
    <div class="container main-menu">
        <div class="row align-items-center d-flex">
            <div id="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class=""><a class="active" href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li class="menu-has-children"><a href="#">Pages</a>
                        <ul>
                            <li><a href="elements.html">Elements</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="services.html">Service</a></li>
                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="">Blog</a>
                        <ul>
                            <li><a href="blog-home.html">Blog Home</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<?php else :?>
    <header id="header" class="dark">
		<div class="container main-menu">
			<div class="row align-items-center d-flex">
				<div id="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo2.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container" class="ml-auto">
					<ul class="nav-menu white">
						<li class=""><a href="index.html">Home</a></li>
						<li><a class="active" href="about.html">About</a></li>
						<li><a href="portfolio.html">Portfolio</a></li>
						<li class="menu-has-children"><a href="#">Pages</a>
							<ul class="dark">
								<li><a href="elements.html">Elements</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="services.html">Service</a></li>
								<li><a href="portfolio-details.html">Portfolio Details</a></li>
							</ul>
						</li>
						<li class="menu-has-children"><a href="">Blog</a>
							<ul class="dark">
								<li><a href="blog-home.html">Blog Home</a></li>
								<li><a href="blog-single.html">Blog Single</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
    <section class="banner-area relative">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        <?php echo wp_title('')?>
                    </h1>
                    <p class="link-nav">
						<span class="box">
							<!--<a href="index.html">Home </a>
							<a href="about.html">About</a></p>-->
                            <?php echo kenedy_breadcrumb();?>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>
