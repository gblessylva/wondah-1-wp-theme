<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 *
 * 
 *
 * @package Wondah
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header >
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;?>

		<div class="nav-previous"><?php the_posts_navigation();?></div>	
<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
