<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

use Bitrix\Main\Page\Asset;
?>

<!doctype html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
	<?php
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
	Asset::getInstance()->addString('<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">');
	Asset::getInstance()->addString('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>');
	Asset::getInstance()->addString('<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>');
	Asset::getInstance()->addJs('https://unpkg.com/swiper@7/swiper-bundle.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/aos.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/main.js');
	?>
    <script type="module">
        import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js'

        const menuSwiper = ['Slide 1', 'Slide 2', 'Slide 3'];
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            // direction: 'vertical',
            loop: true,
            centeredSlides: true,
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                // 	renderBullet: function (index, className) {
                // 		return '<span class="' + className + '">' + (menuSwiper[index]) + '</span>';
                // 	},
            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            // autoplay: {
            // 	delay: 2500,
            // 	disableOnInteraction: false,
            // },
            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
    <script>AOS.init();</script>
<body>
<?php $APPLICATION->ShowPanel(); ?>
<header class="header-wrapper">
    <div class="container header-container">
        <div class="header-logo animate__animated animate__lightSpeedInLeft ">
            <img src="<?= SITE_TEMPLATE_PATH ?>/images/logo.svg" alt="">
        </div>
		<? $APPLICATION->IncludeComponent(
			"bitrix:menu",
			"menu",
			array(
				"ALLOW_MULTI_SELECT" => "N",
				"CHILD_MENU_TYPE" => "left",
				"DELAY" => "N",
				"MAX_LEVEL" => "1",
				"MENU_CACHE_GET_VARS" => array(),
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_TYPE" => "Y",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"ROOT_MENU_TYPE" => "top",
				"USE_EXT" => "N",
				"COMPONENT_TEMPLATE" => "menu"
			),
			false
		); ?>
    </div>
</header>
