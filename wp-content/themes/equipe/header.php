<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Equipe
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

    <!--META tag-->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name ='description' content = "description">
    <meta name ='keywords' content = "keywords">
    <meta name='author' content = "SvyatoslavGGi">
	<meta name ="viewport" content = "width=device-width, initial-scale=1" />
    <!--/META tag--> 

    <!--Links tag-->
	<link rel="shortcut icon" href="<?php bloginfo("template_directory");?>/images/favicon-92x92.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php bloginfo("template_directory");?>/style/fonts/fonts.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory");?>/style/reset.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory");?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory");?>/style/media.css">
    <!--/Link tag-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(80522593, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        trackHash:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/80522593" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

    <header>
        <section class="container">
            <div class="header__logo">
                <a href="http://equipecreative.ru.com">
                    <img src="<?php bloginfo("template_directory");?>/images/Logo.png" alt="logo">
                    <h1>Equipe Creative</h1>
                </a>
                
            </div>
            <div class="header-nav adaptive-block">
                <nav>
                    <?php wp_nav_menu('Navigation'); ?>
                </nav>
            </div>
            <div class='mob-block'>
                
            </div>
        </section>
        
    </header>
	<main>
        <section class='container'>
       