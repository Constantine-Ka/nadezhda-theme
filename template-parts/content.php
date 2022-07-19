<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nadezhda_v2
 */

?>
<?php if ( is_singular()) :?>
		<div class="row justify-content-end"> 
			<div class="mbr-section-title mb-4 display-5 contentTitle">
							
				<div class="titleRound">
					<div class="roundInside"><h1 class="mbr-fonts-style wow  animate__animated  animate__rotateInUpRight"><?php the_title(); ?></h1></div>
					
				</div>
			</div>
		</div>

		<div class="row" style= "margin-top:130px">
			<div class="col news_content_p" style= "margin-top:0px">
				
			<?php 
				
				
				$custom_attr = array(
					'src'   => 'https://anonadegda.ru/wp-content/uploads/2021/08/новости-шаблон1.jpg',
					'class' => "post-img",
					'alt'   => trim(strip_tags( $wp_postmeta->_wp_attachment_image_alt )),
				);
				
					the_post_thumbnail( '', $custom_attr);
					
				
				
				the_content();
				$gallery = CFS()->get( 'gallery' );
				?>
				<div class="slider-post">
					<?
						if($gallery){
							foreach ( $gallery as $key=> $photo ) {?>
								<div><img src="<?php echo ($photo['photo'])?>" alt="" srcset=""></div>
							<?}
						} else{
							echo('Фотоотчета нет');
						}
				
				?>
				  
				</div> 

				
					
			<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!--   <script type="text/javascript" src="slick/slick.min.js"></script> -->
				<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
				<script>
				$('.slider-post').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true
});	
			</script>
		</div>
</div>	
<div class = "date-news" style="text-align:right">
					Дата публикации:<?php the_date(); ?>	   
						   </div>
		<?php else: ?>
		<?php 
		#twentyone_v1_post_thumbnail();
		
		$thumb_id = get_post_thumbnail_id();
		$thumb_url = wp_get_attachment_image_src($thumb_id,'Требуемый_thumbnail-size', false);
		if (!$thumb_url[0]): $thumb_url[0]=get_template_directory_uri().'/images/logoHeader_cr.png';
		// echo ("11" . $thumb_url[0]);
		endif;
		the_title( '<div class="col-xl-4 col-sm-12 col-md-6 p-0  shortNewsBlock " > 
				<a class="shortNewsBlockLink" href="' . esc_url( get_permalink() ) . '" target=""><img src="'. $thumb_url[0] .'" alt=""><p class="text-center m-0 ">','</p></a></div>' );?>

			<!--  -->
		
		<?php endif;?>

