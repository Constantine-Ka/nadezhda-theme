<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nadezhda_v2
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="container">
	<header class="entry-header d-none">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

 <?//php nadezhda_v2_post_thumbnail(); ?>
	<div class="row jus1tify-content-center p-0">
		<div class="col-md-12 col-lg-12">
			<?php the_content();?>
		</div>
	</div>

	<div class="entry-content d-none">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nadezhda_v2' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<div class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Изменить <span class="screen-reader-text">%s</span>', 'nadezhda_v2' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</div><!-- .entry-footer -->
	<?php endif; ?>
</div><!-- #post-<?php the_ID(); ?> -->
