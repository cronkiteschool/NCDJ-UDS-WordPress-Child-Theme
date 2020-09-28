<?php
/**
 * The Sidebar containing the news widget areas.
 *
 * @package asu-wordpress-web-standards-theme
 */
?>
<?php
if ( is_active_sidebar( 'footer' ) ) :
  dynamic_sidebar( 'footer' );
endif;

if ( is_active_sidebar( 'news' ) ) : ?>
  <div id="sidebarNav" class="sidebar-nav affix-top">
    <?php dynamic_sidebar( 'news' ); ?>
  </div>
<?php
endif;
?>