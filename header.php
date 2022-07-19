<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nadezhda_v2
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="apple-mobile-web-app-status-bar-style" content="#549fc7">
    <meta name="theme-color" content="#549fc7" media="(prefers-color-scheme: dark)">
    <meta name="theme-color" content="#cf9a99" media="(prefers-color-scheme: light)">
	<?php wp_head(); ?>
    <meta property="og:image" content="/wp-content/themes/nadezhda_v2/images/reposts.png">
</head>

<body <?php body_class(); ?>>
<?php

    if( is_front_page() ) {
     echo('<div class="bg"></div>');
    };
	
	
?>

<?php wp_body_open(); 
    if( is_front_page() ) {
        echo('<style>
        @media (min-width: 1380px){
            header {
                transform: translate(0,-100vh);
            }
        }
        </style>');
        echo('<section class="header5-custom  " id="header5-4" style="overflow: hidden; ">');
    } else{
        echo('<section class="header5-custom  " id="header5-4" style="overflow: hidden;height: 70vh ">');
    };
?>

	<!-- <section class="header5-custom  " id="header5-4" style="overflow: hidden; "> -->
        <div class="banner">
            <div class="row justify-content-center align-self-center align-items-center header  scene-Elem"
                data-modifier="20" style="z-index:1000;height: 100%; width: 100vw ; position: absolute">
                <img src="/wp-content/themes/nadezhda_v2/assets/images/logoHeader_cr.png" class="logo ">
                <img src="/wp-content/themes/nadezhda_v2/assets/images/organization_name.png" class="companyName ">
                <img src="/wp-content/themes/nadezhda_v2/assets/images/old_people.png" class="oldPeople ">
            </div>
            <div class="bg-img">
                <div class="left  scene-Elem" data-modifier="40" style="border:none"></div>
                <div class="bg  scene-Elem" data-modifier="75" style="border:none"></div>
                <div class="right  scene-Elem" data-modifier="45" style="border:none"></div>
            </div>
            <div class="btn-block-custom justify-content-center scene-Elem wow  animate__animated animate__backInUp"
                data-modifier="10">
                <a href="/%d1%81%d0%b1%d0%be%d1%80-%d0%bd%d0%b0-%d0%bf%d0%be%d0%b4%d1%8a%d1%91%d0%bc%d0%bd%d0%b8%d0%ba/">Сбор на подъемник</a>
                <a href="/help/">Помочь сейчас</a>
            </div>
        </div>
    </section>	
	<header>
        <nav class="dws-menu">
            <input type="checkbox" name="toggle" id="menu" class="toggleMenu">
            <label for="menu" class="toggleMenu justify-content-center" style="text-align: center;"><i class="fa fa-bars"></i> Меню</label>
            <?php
						$nav_args = [
							'theme_location'  => 'menu-1',
							'menu'            => '',
							'container'       => 'ul',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => false,
							'echo'            => true,
							# 'fallback_cb'     => 'wp_page_menu',
							'before'          => '<input type="checkbox" class="checkDown"id="check-id">',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							// 'items_wrap'      => '<ul class="%2$s" da1ta-app-modern-menu="true">%3$s</ul>',
							'depth'           => 0,
							'walker'          => new My_Walker_Nav_Menu(),
						]
					?>
					<?php wp_nav_menu( $nav_args) ?>
			<ul class="d-none" >
                <li class=" justify-content-center align-self-center">
					<a class="justify-content-center" href="#">Главная</a>
				</li>
                <li class=" justify-content-center align-self-center dropmenu-custom">
                    <input type="checkbox" name="toggle" class="toggleSubmenu" id="sub_m1-1">
                    <a href="#">Новости</a>

                    <label for="sub_m1-1" class="toggleSubmenu"><i class="fa"></i></label>
                    <ul>
                        <li><a href="#">Фото</a></li>
                    </ul>

                </li>
                <li class=" justify-content-center align-self-center"><a href="#">Благодарим за помощь</a></li>
                <li class=" justify-content-center align-self-center dropmenu-custom">
                    <input type="checkbox" name="toggle" class="toggleSubmenu" id="sub_m1-2">
                    <a href="#">Документы</a>
                    <label for="sub_m1-2" class="toggleSubmenu"><i class="fa"></i></label>
                    <ul>
                        <li><a href="#">Отчетность</a></li>
                        <!-- <li><a href="#"></a></li> -->
                    </ul>
                </li>
                <li class=" justify-content-center align-self-center dropmenu-custom">
                    <input type="checkbox" name="toggle" class="toggleSubmenu" id="sub_m1-3">
                    <a href="#">Контакты</a>
                    <label for="sub_m1-3" class="toggleSubmenu"><i class="fa"></i></label>
                    <ul>
                        <li><a href="#">Наша команда</a></li>
                        <li><a href="#">О6ратная связь</a></li>
                    </ul>
                </li>
                <li class=" justify-content-center align-self-center"><a href="#">Программы</a></li>
            </ul>
        </nav>
        <div class="warning-block"  style='display:none'>
            <div class="icon">
                <input type="checkbox" name="toggle" id="quarantine" style="z-index: 20000;">
                <label for="quarantine">!</label>
            </div>
            <p id="alert">Посещение структурного подразделения в с. Покрово - Марфино Знаменского района
                запрещено в соответствии с
                <a href="https://anonadegda.ru/wp-content/uploads/2021/06/%D0%9F%D0%BE%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5_%D0%93%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE_%D0%B3%D0%BE%D1%81%D1%83%D0%B4%D0%B0%D1%80%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE%D0%B3%D0%BE_%D1%81%D0%B0%D0%BD%D0%B8%D1%82%D0%B0%D1%80%D0%BD%D0%BE%D0%B3%D0%BE_%D0%B2%D1%80%D0%B0%D1%87%D0%B0_%D0%BF%D0%BE_%D0%A2%D0%B0%D0%BC.pdf"
                    target="_blank" rel="noopener noreferrer"> постановлением Главного санитарного врача
                    от&nbsp;12.01.2021&nbsp;года</a>
            </p>

        </div>
    </header>

