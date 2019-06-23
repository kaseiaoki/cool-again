<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cool_again
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/bulma-prefers-dark" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<div id="page" class="site">
    <header class="hero is-12-mobile is-bold is-family-sans-serif">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                        <div class="column is-2 is-12-mobile">
                            <figure class="image is-128x128">
                                <img class="is-rounded" src="<?php header_image(); ?>" alt="" />
                            </figure>
                        </div>
                        <div class="title column is-10 is-12-mobile">
                                <?php
                                if ( is_front_page() && is_home() ) :
                                    ?>
                                <h1 class="site-title title is-1"><a  class=""<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                <?php
                                else:
                                ?>
                                <p class="site-title title is-1"><a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                <?php
                                endif;
                                $cool_again_description = get_bloginfo( 'description', 'display' );
                                if ( $cool_again_description || is_customize_preview() ) :
                                ?>
                                <p class="site-description subtitle is-4"><?php echo $cool_again_description; /* WPCS: xss ok. */ ?></p>
                                <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="content" class="site-conten"  >