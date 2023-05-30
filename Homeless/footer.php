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
		<footer>
			<div class="items">
				<div class="item">
					<h1>About Company</h1>
					<p>Homeless Sadqa Welfare Trust is a registered nonprofit organization dedicated to tackling homelessness and providing support to those in need. Our mission is to alleviate the hardships faced by homeless individuals and families and empower them towards a brighter future.</p>
				</div>
				<div class="item">
					<h1>Links</h1>
					<ul>
						<li><a href="<?php echo home_url();?>">Home</a></li>
						<li><a href="<?php echo home_url();?>/about-us">About</a></li>
						<li><a href="<?php echo home_url();?>/projects">Projects</a></li>
						<li><a href="<?php echo home_url();?>/branches">Branches</a></li>
						<li><a href="<?php echo home_url();?>/contact">Contact</a></li>
					</ul>
				</div>
				<div class="item">
					<h1>Contact Details</h1>
					<div class="dtl">
						<strong>Email</strong>
						<p>Shakeelsheikhefu@gmail.com</p>
					</div>
					<div class="dtl">
						<strong>Phone</strong>
						<p>03312329276 <br> 03028221165</p>
					</div>
					<div class="dtl">
						<strong>Address</strong>
						<p>Sunny Terrace Gulistan e Johar Karachi Sindh Pakistan</p>
					</div>
				</div>
			</div>
			<hr>
			<p class="copy">All Rights Reserved</p>
		</footer>
		</div>

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div>

	<?php wp_footer(); ?>
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/myjs.js"></script>
</body>
</html>
