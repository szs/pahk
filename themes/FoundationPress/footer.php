<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

</section>
<div id="footer-container">

<footer id="footer">
  <div class="row">
    <div class="column large-3 medium-12">
      <h6>Contact Us</h6>
      <p>Public Art Hong Kong <br>
      2 Harbour Road, Wanchai,  <br>
      Hong Kong <br>
      (852) 2582 0280 <br>
      info@publicart.org.hk</p>
    </div>
    <div class="column large-4 medium-6 small-12">
      <h6>Executing Organization</h6>
      <img src="./images/logo-hkac.png">
    </div>
    <div class="column large-4 medium-6 small-12">
      <h6>Partner Organization</h6>
      <img src="./images/logo-hkas.png">
    </div>
    <div class="column large-12"><h6>Copyright 2015 Public Art Hong Kong. All rights reserved. Design by szs.io</h6></div>
  </div>
	<?php do_action( 'foundationpress_before_footer' ); ?>
	<?php dynamic_sidebar( 'footer-widgets' ); ?>
	<?php do_action( 'foundationpress_after_footer' ); ?>
</footer>
</div>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>

<a class="exit-off-canvas"></a>
<?php endif; ?>

	<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	</div>
</div>
<?php endif; ?>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
