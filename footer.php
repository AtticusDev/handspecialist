<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HandSpecialist
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container pt-5">
			<div class="row justify-content-center">
				<div class="col-md-3 text-center">
				</div>
				<div class="col-md-6 text-center text-white">
					<div class="mainLogo">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/hand-specialist-logo.png" class=" pb-4">
					</div>
					18 STREET NUMBER, TOWN, <br />
					CITY, POSTCODE<br />
					020 7946 0725<br>
					<a href="mailto:info@thehandspecialist.com" class="text-white">INFO@THEHANDSPECIALIST.COM</a><br />
					SITE DESIGNED AND BUILT BY <a href="http://www.atticuscreative.co.uk" target="_blank" class="text-white">ATTICUS</a>
				</div>
				<div class="col-md-3 text-center text-white">
				</div>
			</div>
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
