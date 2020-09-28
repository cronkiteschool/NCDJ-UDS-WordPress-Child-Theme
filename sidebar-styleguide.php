  <?php
/**
 * The Sidebar containing the styleguide widget areas.
 *
 * @package asu-wordpress-web-standards-theme
 */
?>
<?php
if ( is_active_sidebar( 'footer' ) ) :
  dynamic_sidebar( 'footer' );
endif;

if ( is_active_sidebar( 'styleguide' ) ) : ?>
  <div id="sidebarNav" class="sidebar-nav affix-top">
    <?php dynamic_sidebar( 'styleguide' ); ?>
  </div>
<?php
endif;
?>