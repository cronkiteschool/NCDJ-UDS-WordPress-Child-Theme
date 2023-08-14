<?php
/**
 * The main template file.
 *
 * The template for displaying blog pages.
 *
 * This is the template that displays blog pages.
 *
 * @author Global Insititue of Sustainability
 * @author Ivan Montiel
 *
 * @package asu-wordpress-web-standards
 */

require TEMPLATEPATH . '/helpers/mime-types-helper.php';

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
						<div class="col-sm-8">
							<?php require STYLESHEETPATH . '/frontpage_feature.php'; ?>

							<a id="main-target" name="main-target" tabindex="-1"></a>
							<div class="main">
								<?php query_posts( 'cat=92&showposts=2' ); ?>
								<?php
								if ( have_posts() ) :
									while ( have_posts() ) :
										the_post();
										?>

										<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" class="post">
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
											<?php include STYLESHEETPATH . '/inc/meta.php'; ?>

											<?php the_content( 'Continue reading...' ); ?>
										</article>
								<?php endwhile; ?>
									<?php wp_reset_query(); ?>

								<?php else : ?>
									<h2>Not Found</h2>
								<?php endif; ?>
							</div><!-- /.main -->
						</div>
						<div class="col-sm-4 hidden-xs">
							<div id="secondary" class="widget-area row" role="complementary">
								<?php get_sidebar(); ?>
							</div>
						</div>
					</div>
				</div>
			</main><!-- #main -->
		</div>
	</div><!-- #main -->
</div><!-- #main-wrapper -->

<?php get_footer(); ?>
