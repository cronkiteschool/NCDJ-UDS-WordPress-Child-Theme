<?php // ASU Header ?>
<header class="" id="masthead">
  <div class="container">
    <div class="region region-header">
      <div id="block-asu-brand-asu-brand-header" class="block block-asu-brand visible-lg-md-sm">
        <div class="content">
          <!-- START /asuthemes/4.0-rsp-up.0/headers/default_white.shtml -->
          <div id="asu_hdr" class=" asu_hdr_white chrome" >
            <div id="asu_mobile_menu" class="toggle_off">
              <div id="asu_nav_wrapper">
            
        <div id="site-name-desktop" class="section site-name-desktop">
          <div class="container">
         <div class="row"> 
         <div class="col-sm-1 hidden-xs">
          <a href="/"> <img alt="NCDJ" class="img-responsive" title="National Center on Disability and Journalism" src="https://ncdj.org/wp-content/uploads/2015/04/ncdj-logo-box.jpg"></a>
          </div>
          <div class="col-sm-4 hidden-xs">
            <div class="site-title hidden-xs" id="asu_school_name"
	      style="<?php 
if(isset($site_title_attr)){
	echo esc_attr( $site_title_attr );
}	
?>"
            >
              <?php
                // Print the parent organization and its link
              $prefix   = '<span class="first-word">%1$s</span>&nbsp;|&nbsp;';
              $cOptions = get_option( 'wordpress_asu_theme_options' );

                // Do we have a parent org?
              if ( isset( $cOptions ) && is_array( $cOptions ) &&
                       array_key_exists( 'org', $cOptions ) &&
                       $cOptions['org'] !== '' ) {
                  // Does the parent org have a link?
                if ( array_key_exists( 'org_link', $cOptions ) &&
                       $cOptions['org_link'] !== '' ) {
                    $wrapper = '<a href="%1$s" id="org-link-site-title">%2$s</a>';

                    $wrapper = sprintf( $wrapper, esc_html( $cOptions['org_link'] ), '%1$s' );
                    $prefix  = sprintf( $prefix, $wrapper );
                }

                echo wp_kses( sprintf( $prefix, esc_html( $cOptions['org'] ) ), wp_kses_allowed_html( 'post' ) );
              }
              ?>
              
              <a href="<?php echo esc_url( home_url() ); ?>" id="blog-name-site-title"><h1><?php bloginfo( 'name' ); ?></a></h1>
                    
                    
                        
              </div>
              

              
              <div class="col-sm-1 hidden-xs">  </div>
              
              </div>
             
           
              
              <div class="col-sm-3 hidden-xs">              <div id="asu_nav_wrapper">
<div id="asu_nav_menu">  <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
		
	</form> 
	</div></div> </div>
              
                <div class="col-sm-3 hidden-xs"> 
             
    
              <div id="asu_nav_wrapper"><ul class="social-media">
                           <div id="asu_nav_menu">

          <a href="https://cronkite.asu.edu"> <img src="https://ncdj.org/wp-content/uploads/cronkite-logo-maroon.png" alt="Cronkite School Logo" height=80></a>
            
              </div>
              </div>
              </div>
              
          </div>
        </div>
        </div>
        
        
      </div>
            </div>
            </div>
            
                  </div>
                  <!-- /#asu_universal_nav -->
                </div>
                <!-- /#asu_nav_menu -->
              </div>
              <!-- /#asu_nav_wrapper -->
             
              </div>
              <!-- /#asu_search -->
            </div>
            <!-- /#asu_mobile_menu -->
<div id="asu_mobile_hdr">
        
            </div>           
            <!-- /#asu_mobile_header  -->
          </div>
          <!-- /#asu_hdr -->
          <div style="clear:both;"></div>
          <!-- END /asuthemes/4.0-rsp-up.0/headers/default_white.shtml -->
        </div>
      </div>
    </div>
  </div>
</header>
