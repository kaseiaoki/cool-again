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
        <div class="column is-12-mobile is-offset-1-mobile is-4">
<!--            <span class="title is-1 is-spaced">Title 1</span>-->
            <hr>
            <aside id="secondary" class="widget-area class="menu"">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </aside><!-- #secondary -->
        </div >
    </div>
