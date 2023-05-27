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
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora accusantium labore sit suscipit, vero dolore amet voluptate doloremque aspernatur corporis maxime. Fuga, officia, vero distinctio, odit doloremque tempora harum corrupti natus ea veniam odio praesentium?</p>
				</div>
				<div class="item">
					<h1>Links</h1>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Projects</a></li>
						<li><a href="#">Branches</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
				<div class="item">
					<h1>Contact Details</h1>
					<div class="dtl">
						<strong>Email</strong>
						<p>email@compan.com</p>
					</div>
					<div class="dtl">
						<strong>Phone</strong>
						<p>1234567</p>
					</div>
					<div class="dtl">
						<strong>Address</strong>
						<p>Office Address</p>
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
</body>
</html>
