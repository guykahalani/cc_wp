<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corporate-cringe
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<section id="footer-top">
      <div class="container">
        <div class="content-holder">
          <div class="description">
          <?php 
            if(is_active_sidebar('footer-address')){
              dynamic_sidebar('footer-address');
            }
          ?>
          </div>
          <div class="links">
          <?php 
            if(is_active_sidebar('footer-links')){
              dynamic_sidebar('footer-links');
            }
          ?>  
          </div>
        <div class="socials">
          <?php 
            if(is_active_sidebar('footer-socials')){
                dynamic_sidebar('footer-socials');
            }
          ?>
          </div>
        </div>
      </div>
    </section>

    <section id="footer-bottom">
      &copy; Copyright
		</section>
		
		<!-- <div class="site-info">
			<a href="<?php //echo esc_url( __( 'https://wordpress.org/', 'corporate-cringe' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf( esc_html__( 'Proudly powered by %s', 'corporate-cringe' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'corporate-cringe' ), 'corporate-cringe', '<a href="http://guykahalani.github.io/portfolio">Guy K.</a>' );
				?>
		</div> -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
