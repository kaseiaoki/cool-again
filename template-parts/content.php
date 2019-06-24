<div class="cloumn is-4-desktop is-4-tablet is-12-mobile has-text-centered">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="card has-text-centered">
            <?php
            if ( is_singular() ) :
                the_title( '<h1 class="entry-title  has-text-centered title is-3 ">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title title is-3 has-text-centered"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;

            if ( 'post' === get_post_type() ) :
                ?>
                <span class="entry-meta sub-title is-5">
                    <?php
                    cool_again_posted_on();
                    cool_again_posted_by();
                    ?>
                </span><!-- .entry-meta -->
            <?php endif; ?>
            <?php cool_again_post_thumbnail(); ?>
            <div class="card-content">
                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                    <hr>
                    <?php cool_again_entry_footer(); ?>
                </div><!-- .entry-summary -->
            </div>
        </div>
    </article><!-- #post-<?php the_ID(); ?> -->
</div>