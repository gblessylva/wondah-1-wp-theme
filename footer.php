<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wondah
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php
		
		if (   ! is_active_sidebar( 'first-footer-widget-area'  )
        && ! is_active_sidebar( 'second-footer-widget-area' )
        && ! is_active_sidebar( 'third-footer-widget-area'  )
		&& ! is_active_sidebar( 'fourth-footer-widget-area' ) )
		
        return;

		if (   is_active_sidebar( 'first-footer-widget-area'  )
		&& is_active_sidebar( 'second-footer-widget-area' )
		&& is_active_sidebar( 'third-footer-widget-area'  )
		&& is_active_sidebar( 'fourth-footer-widget-area' )
	) :
	
	endif; ?>
	 
	<aside class="fatfooter" role="complementary">
		<div class="first quarter left widget-area">
			<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
		</div><!-- .first .widget-area -->
	 
		<div class="second quarter widget-area">
			<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
		</div><!-- .second .widget-area -->
	 
		<div class="third quarter widget-area">
			<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
		</div><!-- .third .widget-area -->
	 
		<div class="fourth quarter right widget-area">
			<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
		</div><!-- .fourth .widget-area -->
	</aside><!-- #fatfooter -->
	
		

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wondah' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'wondah' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'wondah' ), 'wondah', '<a href="https://finavlys.com/sylva/">gblessylva</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
