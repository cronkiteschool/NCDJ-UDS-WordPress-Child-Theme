<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package asu-wordpress-web-standards
 */
?>
  </div><!-- #page -->
</div><!-- #page-wrapper -->

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @author Global Insititue of Sustainability
 * @author Ivan Montiel
 *
 * @package asu-wordpress-web-standards
 */

if ( is_array( get_option( 'wordpress_asu_theme_options' ) ) ) {
  $cOptions = get_option( 'wordpress_asu_theme_options' );
}
?>
  <div class="footer">
    <div class="big-foot">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 space-bot-md">
            <?php
            //  =============================
            //  = Logo                      =
            //  =============================
            // Do we have a logo?
            $logo = '<a class="footer-logo-link" href="%3$s"><img class="footer-logo" src="%1$s" alt="%2$s"/></a><br>';
            if ( isset( $cOptions ) &&
              array_key_exists( 'logo', $cOptions ) &&
              $cOptions['logo'] !== '' ) {
              echo wp_kses( sprintf( $logo, $cOptions['logo'], get_bloginfo( 'name' ) . ' Logo', home_url( '/' ) ), wp_kses_allowed_html( 'post' ) );
            } else {
              echo '<h2>' .wp_kses( get_bloginfo( 'description' ), wp_kses_allowed_html( 'post' ) ) . '</h2>';
            }
            // Do we want Text Below Logo in Footer?
            if ( isset( $cOptions ) &&
                   array_key_exists( 'campus_address', $cOptions ) &&
                   $cOptions['campus_address'] !== '' ) {
              echo wp_kses( nl2br( $cOptions['campus_address'] ), wp_kses_allowed_html( 'post' ) );
            }
            ?><br/>
            <?php
            //  =============================
            //  = Phone                     =
            //  =============================
            $phone = 'Phone: <a class="phone-link" href="tel:%1$s" id="phone-link-in-footer">%1$s</a><br>';

            // Do we have a phone number?
            if ( isset( $cOptions ) &&
                   array_key_exists( 'phone', $cOptions ) &&
                   $cOptions['phone'] !== '' ) {
              echo wp_kses( sprintf( $phone, $cOptions['phone'] ), wp_kses_allowed_html( 'post' ) );
            }

            //  =============================
            //  = Fax                       =
            //  =============================
            //$fax = 'Fax: <a class="phone-link" href="fax:%1$s">%1$s</a><br>';
            $fax = 'Fax: %1$s<br>';

            // Do we have a fax number?
            if ( isset( $cOptions ) &&
                   array_key_exists( 'fax', $cOptions ) &&
                   $cOptions['fax'] !== '' ) {
              echo wp_kses( sprintf( $fax, $cOptions['fax'] ), wp_kses_allowed_html( 'post' ) );
            }
            ?>
            <!--  <ul class="social-media">  THIS <UL> IS INVALID BY ITSELF AND DOES NOTHING -->
          </div>

          <div class="col-sm-2 space-bot-md"></div>
        </div><!-- /.row -->
      </div><!-- /.container -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php dynamic_sidebar( 'footer' ); ?>
          </div>
        </div>
      </div>
    </div><!-- /.big-foot -->
  </div><!-- /.footer -->
  <!-- End Footer -->

  <?php wp_footer(); ?>
</body>
</html>
