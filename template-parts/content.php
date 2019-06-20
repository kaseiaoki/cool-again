<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cool_again
 */

?>
<div class="columns is-vcentered">
    <div class="column is-10">
        <!-- START ARTICLE -->
        <div class="card article">
            <div class="card-content">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <div class="media">
                            <div class="media-content has-text-centered">
                                <?php
                                if ( is_singular() ) :
                                    the_title( '<h1 class="entry-title ">', '</h1>' );
                                else :
                                    the_title( '<h2 class="entry-title title is-2"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                                endif;

                                if ( 'post' === get_post_type() ) :
                                    ?>
                                    <span class="entry-meta sub-title is-4">
                                        <?php
                                        cool_again_posted_on();
                                        cool_again_posted_by();
                                        ?>
                                    </span><!-- .entry-meta -->
                                <?php endif; ?>
                            </div>
                        </div>
                        <hr>

                    </header><!-- .entry-header -->
                    </hr>
                    <?php cool_again_post_thumbnail(); ?>

                    <div class="entry-content">
                        </hr>
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
                    </div><!-- .entry-content -->

                    <footer class="entry-footer">
                        <?php cool_again_entry_footer(); ?>
                    </footer><!-- .entry-footer -->
                </article><!-- #post-<?php the_ID(); ?> -->
            </div>
        </div>
    </div>
</div>