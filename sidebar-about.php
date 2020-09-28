<?php
/**
 * The Sidebar containing the resources widget areas.
 *
 * @package asu-wordpress-web-standards-theme
 */
?>
<?php
if ( is_active_sidebar( 'footer' ) ) :
  dynamic_sidebar( 'footer' );
endif;

if ( is_active_sidebar( 'about' ) ) : ?>
  <div id="sidebarNav" class="sidebar-nav affix-top">
    <?php dynamic_sidebar( 'about' ); ?>
  </div>
<?php
endif;
?>