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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/bulma-prefers-dark" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header class="hero is-12-mobile is-info is-bold">
        <div class="hero-body">
            <div class="container has-text-centered ">
                <div class="title column is-12-mobile is-quater is-herf">
                    <div class="media">
                        <div class="media-left">
                            <?php the_custom_logo();?>
                        </div>
                        <div class="media-content">
                            <?php
                            if ( is_front_page() && is_home() ) :
			                    ?>
                            <h1 class="site-title title is-1"><a  class="has-text-white"<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <?php
			                else:
				            ?>
                            <p class="site-title title is-1"><a class="has-text-white" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
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
    <div id="content" class="site-content section"  >