	<?php /* Template Name: resources */ ?>

<?php
/**
 * The resources template file.
 *
 * The template for displaying resources pages.
 *
 * This is the template that displays resources pages.
 *
 *
 */

include (TEMPLATEPATH . '/helpers/mime-types-helper.php');

get_header();

$custom_fields = get_post_custom();
?>
<div id="main-wrapper" class="clearfix">
  <div class="clearfix">
    <?php echo do_shortcode( '[page_feature]' ); ?>

    <div id="content" class="site-content">
      <?php echo do_shortcode( '[asu_breadcrumbs]' ); ?>
      <main id="main" class="site-main space-top-md" role="main">
        <div class="container">
          <div class="row">
        <div class="col-sm-4 hidden-xs">
              <div id="secondary" class="widget-area row" role="complementary" style="width: 100%;">
                <?php get_sidebar('resources'); ?>
              <div>
            </div>
          </div>
        </div>
            <div class="col-sm-8">
              <?php
              while ( have_posts() ) {
                the_post();
                get_template_part( 'content', get_post_format() );

            
              } // end of the loop.
              ?>
            </div> 
      </main><!-- #main -->
    </div>
  </div><!-- #main -->
</div><!-- #main-wrapper -->


<?php get_footer(); ?>