<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nadezhda_v2
 */

?>

	
	<section class="footer4 cid-sEINqHKY4Y" once="footers" id="footer4-3">	
		<div class="container">
            <div class="row mbr-white" style="align-items: center;">
                <div class="col-12 col-lg-3 ">
                    <div class="media-wrap col-md-12 col-12" style="margin:auto">
                        <a href="#/" style="margin:auto">
                            <img src="/wp-content/themes/nadezhda_v2/assets/images/cropped-google-250x250.png" alt="Логотип Надежды"
                                styl1e="object-fit: none;">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7 "><strong class="">Контактная
                            информация</strong></h5>
                    <p class="mbr-text mbr-fonts-style mb-4 display-4" style=""><b>Юридический адрес:</b><br>г. Тамбов, ул. Шлихтера, д.3, стр.2
                        <br>
						<b>Почтовый адрес (Доп. офис):</b> <br>392018 г.Тамбов, ул. Широкая, д. 4
                        <br><b>Тел.:</b> 8(4752)71-11-73
                        <br><b>Почта:</b> ano.nadegda@gmail.com
                    </p>
                    
                </div>
                <div class="social-row col-md-3 col-lg-4 display-7" style="height: 100%;margin-to1p:20px;">
                    
                    <div class="soc-item">
                        <a href="https://vk.com/ano.csp.nadegda" target="_blank">
                            <span class="mbr-iconfont socicon socicon-vkontakte"></span>
                        </a>
                    </div>
<!--                     <div class="soc-item">
                        <a href="https://www.instagram.com/ano.nadegda/" target="_blank">
                            <span class="mbr-iconfont socicon socicon-instagram"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://www.facebook.com/ano.nadegda/" target="_blank">
                            <span class="mbr-iconfont socicon socicon-facebook"></span>
                        </a>
                    </div> -->
                    <div class="m1t-0 " style="margin-to0p: 55px; position: relative;height: 100%;word-wrap: normal; width:100%">
                        <p class="mbr-text mb-0 mbr-fonts-style copyright align-center display-7">
                            Все права защищены | Тамбов | 2022
                        </p>
                    </div>
                </div>
                
<!-- 
                <div class="col-md-6 col-lg-5">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7 "><strong>Реквизиты</strong></h5>
                    <ul class="mbr-section-subtitle list mbr-fonts-style display-7 wow bounceInUp"
                        style="text-align: start;">
                        <b>Сокращенное название:</b> АНО ЦСП "Надежда"<br>
                        <b>Полное название:</b> Автономная Некоммерческая Организация «Центр Социальной Помощи
                        «Надежда»<br>
                        <b>ИНН/КПП</b> 6829111296/682901001<br>
                        <b>ОГРН</b> 1156800000301
                    </ul>
                </div> -->
               

            </div>

        </div>
    </section>
	<div style="position:fixed;top:50%;left:0;z-index:100000">
		<?php echo do_shortcode( '[bvi]' ); ?>
</div>
	<section style="display:none;background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Rubik', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; ">
        <a href="https://mobirise.site/e" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
        <p style="flex: 0 0 auto; margin:0; padding-right:1rem;">
            <a href="https://mobirise.site/q" style="color:#aaa;"> </a>
        </p>
    </section>
<?php wp_footer(); ?>
	<script>
        // var scene = document.getElementById('scene-bg');
        // var parallaxInstance = new Parallax(scene);

        document.querySelectorAll('.scene-Elem').forEach((elem) => {

            const modifier = elem.getAttribute('data-modifier')

            basicScroll.create({
                elem: elem,
                from: 0,
                to: 519,
                direct: true,
                props: {
                    '--translateY': {
                        from: '0',
                        to: `${ 10 * modifier }px`
                    }
                }
            }).start()

        });
        $('#quarantine').click(function () {
            if ($(this).is(':checked')) {
                console.log(555);
                $('#alert').css({
                    'display': 'block'
                })
            } else {
                $('#alert').css({
                    'display': 'none'
                })
            }
        });

    </script>
    <div id="scrollToTop" class="scrollToTop mbr-arrow-up" >
		<a style="text-align: center;" href="#header5-4">
			<i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i>
		</a>
	</div>
    <input name="animation" type="hidden">

</body>
</html>
