<div class="column is-narrow is-desktop-3 is-3 is-mobile-12 is-narrow">
    <div class="card">
        <div class="card-image">
            <figure class="image is-4by3>
                    <?php cool_again_post_thumbnail();  ?>
                </figure>
        </div>
        <div class="card-content">
            <?php
            the_title( '<h3 class="entry-title title is-4 has-text-centered"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

            if ( 'post' === get_post_type() ) :
                ?>
                <span class="entry-meta sub-title is-5">
                <?php
                cool_again_posted_on();
                cool_again_posted_by();
                ?>
            </span><!-- .entry-meta -->
            <?php endif; ?>
        </div>
    </div>
</div>