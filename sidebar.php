<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cool_again
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
            <div class="column is-4 is-tablet-12 section">
                <aside id="secondary" class="widget-area class="menu has-text-center">
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                </aside><!-- #secondary -->
            </div >
</div>