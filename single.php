<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nadezhda_v2
 */

get_header();
?>

	
<section class="content14 cid-sEIJh0SMYf 555" id="content14-2" >
	<div class="container">

		
		<?php
		while ( have_posts() ) :
			the_post();
			
			get_template_part( 'template-parts/content', get_post_type() );
			
			#the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Предыдущая новость:', 'nadezhda_v2' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Следующая новость:', 'nadezhda_v2' ) . '</span> <span class="nav-title">%title</span>',
					);
				
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					#comments_template();
				endif;

			endwhile; // End of the loop.
			?>

	</div>
</section><!-- #main -->

<?php
// get_sidebar();
get_footer();
