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
        <div id="primary" class="content-area">
            <main id="main"  class="site-main">
                <section class="columns has-background-white-ter">
                <?php
                /* query */
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 12,
                    'orderby' => 'post_date',
                    'order'   => 'DESC',
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                ?>
                <?php
                    $index = 0;
                    /* Start the Loop */
                    while ( $query->have_posts() ) :
                        $index++;
                        $query->the_post();
                        /*
                         * Include the Post-Type-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', get_post_type() );
                        if ($index % 4 ===0) {
                            echo '</section><section class="columns has-background-white-ter">';
                        }
                    endwhile;

                    the_posts_navigation();

                else :

                    get_template_part( 'template-parts/content', 'none' );
                endif;
                ?>
            </main><!-- #main -->
<!--        </div>-->
<?php
get_footer();

