<?php
if ( et_theme_builder_overrides_layout( ET_THEME_BUILDER_HEADER_LAYOUT_POST_TYPE ) || et_theme_builder_overrides_layout( ET_THEME_BUILDER_FOOTER_LAYOUT_POST_TYPE ) ) {
    // Skip rendering anything as this partial is being buffered anyway.
    // In addition, avoids get_sidebar() issues since that uses
    // locate_template() with require_once.
    return;
}

/**
 * Fires after the main content, before the footer is output.
 *
 * @since 3.10
 */
do_action( 'et_after_main_content' );

if ( 'on' === et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

<footer id="Footer"style="background-color:#000;" class="page-footer font-small stylish-color-dark pt-4">
      <div  class="container text-center text-md-left">
        <div class="row">
          <div class="col-md-4 mx-auto">
            <!-- Content -->
            <h5 class="text-uppercase font-weight-bold mt-3 mb-4">About our Company</h5>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 70px;">
            <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
              consectetur
              adipisicing elit.</p>
          </div>
          <hr class="clearfix w-100 d-md-none">
          <div id="link10" class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Products</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 70px;">
            <p>
              <a href="#!">Travelling</a>
            </p>
            <p>
              <a href="#!">About</a>
            </p>
            <p>
              <a href="#!">BrandFlow</a>
            </p>
            <p>
              <a href="#!">Services</a>
            </p>
          </div>
          <hr class="clearfix w-100 d-md-none">
          <div id="link10" class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Useful links</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 70px;">
            <p>
              <a href="#!">Your Account</a>
            </p>
            <p>
              <a href="#!">Become an Affiliate</a>
            </p>
            <p>
              <a href="#!">Shipping Rates</a>
            </p>
            <p>
              <a href="#!">Help</a>
            </p>
          </div>
          <hr class="clearfix w-100 d-md-none">
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase font-weight-bold">Contact</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
              <i class="fas fa-home mr-3"></i> Mumbai, Maharashtra</p>
            <p>
              <i class="fas fa-envelope mr-3"></i> collab@codewithfaraz.com</p>
            <p>
              <i class="fas fa-phone mr-3"></i> + 91 80254 52xxx</p>
            <p>
              <i class="fas fa-print mr-3"></i> + 91 80254 55xxx</p>
          </div>
        </div>
      </div>
      <hr>
     
      
      <!-- Copyright -->
      <div  style="background-color:#000;" class="footer-copyright text-center py-3">
        Copyright© 2023: Design and Develop by Faraz
      </div>
    </footer>
		</div>

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div>

	<?php wp_footer(); ?>
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>
