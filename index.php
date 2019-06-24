<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cool_again
 */

get_header();
?>
<div class="columns section">
    <div class="column is-9 is-12-mobile">
        <div id="primary" class="content-area">
            <main id="main"  class="site-main">
                <div class="columns">
                <?php
                /* query */
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'orderby' => 'post_date',
                    'order'   => 'ASC',
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                ?>
                <?php
                    /* Start the Loop */
                    while ( $query->have_posts() ) :
                        $query->the_post();
                        /*
                         * Include the Post-Type-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', get_post_type() );

                    endwhile;

                    the_posts_navigation();

                else :

                    get_template_part( 'template-parts/content', 'none' );
                endif;
                ?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_sidebar();
get_footer();

