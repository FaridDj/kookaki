<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<met
    a charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	

	<header id="masthead" class="site-header">
	
    <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
   <div id="site-navigation" class="main-navigation">
         
        <ul>
        <div class="orchid"></div>
        <div class="sunflower"></div>
        <div class="flower"></div>
        <div class="random"></div>
        <div class="hibiscus_footer"></div>       
        <div class="tawaneko"></div> 
        <div class="tenshi"></div> 
        <div class="jaakuna"></div> 

        
        <a href="#" id="closeBtn" class="close" >&times;</a>       
        <div><img class="logo-img-mini" src="<?php echo get_stylesheet_directory_uri() . '/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants"></div>

        <li><a href="#story">Histoire</a></li>
                <li><a href="#characters">Personnages</a></li>
                <li><a href="#place">Lieu</a></li>
                <li><a href="#studio">Studio Koukaki</a></li>
                <p>STUDIO KOUKAKI</p>
         
            </ul>
         </div>
       
        
         <a href="#" id="openBtn" class="active" aria-controls="primary-menu" aria-expanded="false">
         
                <span class="burger-icon">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
        </a>
            


		<!-- #site-divigation -->
	</header><!-- #masthead -->
