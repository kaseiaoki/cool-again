<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cool_again
 */

?>
	</div><!-- #content -->
<footer id="colophon" class="footer">
    <div class="site-info content has-text-centered ">
        <p>
            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cool-again' ) ); ?>">
                <?php
                /* translators: %s: CMS name, i.e. WordPress. */
                printf( esc_html__( 'Proudly powered by %s', 'cool-again' ), 'WordPress' );
                ?>
            </a>
            <span class="sep"> | </span>
            <?php
            /* translators: 1: Theme name, 2: Theme author. */
            printf( esc_html__( 'Theme: %1$s', 'cool-again' ), 'cool-again', '' );
            ?>
        </p>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
