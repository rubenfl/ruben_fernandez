<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rfernand
 */

?>

	</div><!-- #content -->

	<!--<footer id="colophon" class="site-footer" role="contentinfo">
		<!--<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'rfernand' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'rfernand' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'rfernand' ), 'rfernand', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>-->
		<!--my code-->
		<footer>
		<div class="row text-center">
			Ruben Fernandez  <?php echo copyright_function_of_mine(); ?>
			<div class="social-media-icons">
<div>
<a href="[full link to your Twitter]">
<img title="Twitter" alt="Twitter" src="https://socialmediawidgets.files.wordpress.com/2014/03/01_twitter.png" width="35" height="35" />
</a>
<a href="https://www.pinterest.com/psarfl/">
<img title="Pinterest" alt="Pinterest" src="https://socialmediawidgets.files.wordpress.com/2014/03/13_pinterest.png" width="35" height="35" />
</a>
<a href="https://www.facebook.com/ruben.fernandez.146">
<img title="Facebook" alt="Facebook" src="https://socialmediawidgets.files.wordpress.com/2014/03/02_facebook.png" width="35" height="35" />
</a>
<a href="https://www.linkedin.com/profile/view?id=129350427&trk=nav_responsive_tab_profile_pic">
<img title="LinkedIn" alt="LinkedIn" src="https://socialmediawidgets.files.wordpress.com/2014/03/07_linkedin.png" width="35" height="35" />
</a>
<a href="[full link to your Instagram]">
<img title="Instagram" alt="RSS" src="https://socialmediawidgets.files.wordpress.com/2014/03/10_instagram.png" width="35" height="35" />
</a>
</div>
        
        <h6>Contact Me at:<br />Phone Number:<span style="color:red;"> 718-807-5640</span><br /> or by email:<span style="color:red;"> psarfl@hotmail.com</span>
    </h6>
    </div>
</footer>
    <!--end-->

		</div><!-- .site-info -->
	<!--</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
