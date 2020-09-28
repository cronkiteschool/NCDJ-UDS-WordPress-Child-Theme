<?php
/*
Template Name: Archive-Blog
*/

include 'helpers/mime-types-helper.php';

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

          </div>
        </div>
            <div class="col-sm-12">
              
              <div class="main">
	<?php
		$limit = get_option('posts_per_page');
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		query_posts('showposts=' . $limit=10 . '&paged=' . $paged . '&post_type=blog');
		$wp_query->is_archive = true; $wp_query->is_home = false;
	?>
	
	 <?php posts_nav_link( $sep, $prelabel, $nextlabel ); ?> 


	  
			<?php while (have_posts()) : the_post(); ?>
			
				<article <?php post_class() ?>>
					<?php
						global $more;
						$more = 0;
					?>
					<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
					
					<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

					<?php the_content('Read more.'); ?>
						
					<aside class="entry-meta postmetadata" role="complementary">	
	
						<span class="comments-link">
						<?php edit_post_link('Edit post','',''); ?>
						</span> 
						
							<!--< ?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>-->
					</aside>

				</article>

			<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>	
<?php wp_reset_query();?>	

<?php posts_nav_link(); ?>


</div>
              
            </div> 
      </main><!-- #main -->
    </div>
  </div><!-- #main -->
</div><!-- #main-wrapper -->

<?php get_footer(); ?>