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
		<div class="column first">
			<p><span>Cutting Edge Federal Credit Union</span><br>
				4620 SE International Way<br>
				PO Box 22192<br>
				Milwaukie, Oregon 97269-2192</p>
				<p>Phone 503-653-4392<br>
				Fax 503-653-6327</p>
				<p>Routing #: 323274788<br>
				NMLS ID #: 418857</p>
		</div>
		<div class="column">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-one', 'menu_class' => 'nav-menu' ) ); ?>
		</div>
		<div class="column">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-two', 'menu_class' => 'nav-menu' ) ); ?>
		</div>
		<div class="column last">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-three', 'menu_class' => 'nav-menu' ) ); ?>
		</div>
	</footer><!-- #colophon -->

	<div class="colophon">
		<div class="third">
			<img src="<?php bloginfo( 'template_url' ); ?>/img/logo-ncua.png" class="alignright" alt="NCUA Logo">This credit union is federally insured by the National Credit Union Administration 
		</div>
		<div class="third">
			<img src="<?php bloginfo( 'template_url' ); ?>/img/logo-equal-housing.png" class="alignright" alt="Equal Housing Lender">Equal Housing Lender - We do business in accordance with the Federal Fair Housing Law and the Equal Housing Opportunity Act. 
		</div>
		<div class="third links">
			<a href="https://www.facebook.com/FRFCU/" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/img/social-facebook.png" class="alignright" alt="Go to our Facebook Page"></a>
			<?php wp_nav_menu( array( 'theme_location' => 'footer-notices', 'menu_class' => 'nav-menu' ) ); ?>
		</div>
	</div>

</div><!-- #container -->

<?php wp_footer(); ?>
</body>
</html>