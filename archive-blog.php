<?php
/*
Template Name: Archive-Blog
 */

include TEMPLATEPATH . '/helpers/mime-types-helper.php';

get_header();

$custom_fields = get_post_custom();
?>
<div id="main-wrapper" class="clearfix">
  <div class="clearfix">
    <?php echo do_shortcode('[page_feature]'); ?>

    <div id="content" class="site-content">
      <?php echo do_shortcode('[asu_breadcrumbs]'); ?>
      <main id="main" class="site-main space-top-md" role="main">
        <div class="container">
          <div class="row">

          <div class="col-sm-4 hidden-xs">
            <div id="secondary" class="widget-area row" role="complementary" style="width: 100%;">
                <?php get_sidebar('about');?>
              <div>
            </div>
          </div>
        </div>

            <div class="col-sm-8">

              <div class="main">
	<?php
$limit = get_option('posts_per_page');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts('showposts=' . $limit = 10 . '&paged=' . $paged . '&post_type=blog');
$wp_query->is_archive = true;
$wp_query->is_home = false;
?>

	 <?php posts_nav_link($sep, $prelabel, $nextlabel);?>



			<?php while (have_posts()): the_post();?>

												<article class="post">
													<?php
    global $more;
    $more = 0;
    ?>
													<h1 id="post-<?php the_ID();?>"><a href="<?php the_permalink()?>"><?php the_title();?></a></h1>

													<?php include STYLESHEETPATH . '/inc/meta.php';?>

													<?php the_content('Read more.');?>

													<aside class="entry-meta postmetadata" role="complementary">
														<span class="cat-links"><span class="accessibility">Posted in: </span>
														<?php
    $igc = 0;
    foreach ((get_the_category()) as $category) {
        if ($category->cat_name != 'Uncategorized') {
            if ($igc != 0) {echo ' &bull; ';}
            ;
            $igc++;
            echo '<a href="' . get_category_link($category->term_id) . '" title="' . sprintf(__("View all posts in %s"), $category->name) . '" ' . '>' . $category->name . '</a>';
        }
    }
    ?>
														</span>
														<span class="comments-link">
														<?php edit_post_link('Edit post', '', '');?>
														</span>

															<!--< ?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>-->
													</aside>

												</article>

											<?php endwhile;?>

	<?php include STYLESHEETPATH . '/inc/nav.php';?>
<?php wp_reset_query();?>

<?php posts_nav_link();?>


</div>

            </div>

      </main><!-- #main -->
    </div>
  </div><!-- #main -->
</div><!-- #main-wrapper -->

<?php get_footer();?>