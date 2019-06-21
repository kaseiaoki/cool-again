<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cool_again
 */

get_header();
?>
<div class="columns">
    <div class="column is-10-mobile is-offset-1-mobile is-7 is-offset-1">
        <div id="primary" class="content-area">
            <main id="main"  class="site-main">
            <?php

            while ( have_posts() ) :
                the_post();
                the_title( '<h1 class="entry-title title is-1">', '</h1>' );
                if ( 'post' === get_post_type() ) :
                    ?>
                    <span class="entry-meta sub-title is-3">
                    <?php
                    cool_again_posted_on();
                    cool_again_posted_by();
                    ?>
                    <?php
                    the_content( sprintf(
                        wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cool-again' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    ) );

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cool-again' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </span><!-- .entry-meta -->
                <?php endif; ?>
                <?php
                the_post_navigation();

            endwhile; // End of the loop.
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>
            </main><!-- #main -->
	    </div><!-- #primary -->
    </div>
    <?php
            get_sidebar();
    ?>
</div>
<?php
get_footer();
