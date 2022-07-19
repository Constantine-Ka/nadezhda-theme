<?php


/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nadezhda_v2
 */

get_header();
?>

<section class="content14 cid-sEIJh0SMYf" id="content14-2">
	
	<?php
	if ( have_posts() ) :

		if ( is_home() && ! is_front_page() ) :
			?>
			<div class="container contentpage">
				<div class="row justify-content-end">
					<div class="mbr-section-title mb-4 display-5 contentTitle">
						<h1 class="mbr-fonts-style wow  animate__animated  animate__rotateInUpRight">
							<?php single_post_title(); ?>
						</h1>	
						
						<div class="titleRound">
							<div class="roundInside"></div>
						</div>
					</div>
				</div>
				<div class="row 35">
			<!-- <header>
				<h1 class="page-title screen-reader-text"><?php #single_post_title(); ?></h1>
			</header> -->
			<?php
		endif;

		/* Start the Loop */
		while ( have_posts() ) :
			the_post();
			
			/*
			 * Include the Post-Type-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
			 */
			get_template_part( 'template-parts/content', get_post_type() );

		endwhile;
		add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
		function my_navigation_template( $template, $class ){
			/*
			Вид базового шаблона:
			<nav class="navigation %1$s" role="navigation">
				<h2 class="screen-reader-text">%2$s</h2>
				<div class="nav-links">%3$s</div>
			</nav>
			*/

			return '
			<nav class="page_navigation_custom navigation %1$s" role="navigation">
				<div class="nav-links ">%3$s</div>
			</nav>    
			';

		}

		?>
		</div>
		<div class="row justify-content-center ">
			
			
			<?php the_posts_navigation();?>
		</div>

	<?php else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>
	
	</div>
</div>
</section>
<!-- #main -->
	
	

<?php
// get_sidebar();
get_footer();
