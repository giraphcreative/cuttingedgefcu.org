<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>	
	
	</section>
	
	<footer class="footer">
		<div class="column twenty first">
			<?php print apply_filters( 'the_content', do_shortcode('[snippet slug="footer-1" /]')) ?>
		</div>
		<div class="column twenty">
			<?php print apply_filters( 'the_content', do_shortcode('[snippet slug="footer-2" /]')) ?>
		</div>
		<div class="column thirty">
			<?php print apply_filters( 'the_content', do_shortcode('[snippet slug="footer-3" /]')) ?>
		</div>
		<div class="column thirty last">
			<?php print apply_filters( 'the_content', do_shortcode('[snippet slug="footer-4" /]')) ?>
		</div>
		<a href="https://www.facebook.com/FRFCU/" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/img/social-facebook.png" class="social-facebook" alt="Go to our Facebook Page"></a>
	</footer><!-- #colophon -->

	<div class="colophon">
		<div class="third">
			<img src="<?php bloginfo( 'template_url' ); ?>/img/logo-ncua.png" class="alignleft" alt="NCUA Logo">This credit union is federally insured by the National Credit Union Administration 
		</div>
		<div class="third">
			<img src="<?php bloginfo( 'template_url' ); ?>/img/logo-equal-housing.png" class="alignleft" alt="Equal Housing Lender">Equal Housing Lender - We do business in accordance with the Federal Fair Housing Law and the Equal Housing Opportunity Act. 
		</div>
		<div class="third links">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-notices', 'menu_class' => 'nav-menu' ) ); ?>
		</div>
	</div>

</div><!-- #container -->

<?php wp_footer(); ?>
</body>
</html>