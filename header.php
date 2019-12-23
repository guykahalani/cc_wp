<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corporate-cringe
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Corporate Cringe</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'corporate-cringe' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
      <div class="content-holder">
        <a href="#!" id="logo">
          <!-- <img src="" alt="logo">  --> LOGO
        </a>
        <nav id="desktop-navbar">
          <?php 
            wp_nav_menu(
              array(
                'theme_location' => 'main_menu',
                'container' => 'ul',
                'menu_class' => 'menu'
              )
            );
          ?>
        </nav>

        <nav id="mobile-navbar">
          <div id="menuToggle">
            <input type="checkbox" />

            <span></span>
            <span></span>
            <span></span>
            
            <?php 
              wp_nav_menu(
                array(
                  'theme_location' => 'main_menu',
                  'container' => 'ul',
                  'menu_class' => 'menu'
                )
              );
            ?>
          </div>
        </nav>
      </div>
		</div>
		
		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'corporate-cringe' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav> -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
