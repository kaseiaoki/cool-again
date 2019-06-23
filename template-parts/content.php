<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cool_again
 */

?>
        <hr/>
        <!-- START ARTICLE -->
<!--        <div class="card article">-->
<!--            <div class="card-content">-->
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

                    </header><!-- .entry-header -->
                    <?php cool_again_post_thumbnail(); ?>

                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div><!-- .entry-summary -->

                    <footer class="entry-footer">
                        <?php cool_again_entry_footer(); ?>
                    </footer><!-- .entry-footer -->
                </article><!-- #post-<?php the_ID(); ?> -->
