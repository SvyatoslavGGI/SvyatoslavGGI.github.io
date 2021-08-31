<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Porkfolio
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<!--     META tag     -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name ='description' content = "description">
    <meta name ='keywords' content = "keywords">
    <meta name='author' content = "Your Name">
	<meta name ="viewport" content = "width=device-width, initial-scale=1" />
   
	<link rel="shortcut icon" href="<?php bloginfo("template_directory");?>images/favicon-92x92.png" type="image/x-icon">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php bloginfo("template_directory");?>/fonts/fonts.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory");?>/media.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <header>
        <section class="container">
            <div class="header__logo">
            <img src="<?php bloginfo("template_directory");?>/images/Logo.png" alt="logo">
                <h2>Equipe Creative</h2>
            </div>
            <div class="header-nav">
                <nav>
                    <?php wp_nav_menu('Navigation'); ?>
                </nav>
            </div>
        </section>
        
    </header>
	<main id="content" class="site-content">
        <div class='container'>
        