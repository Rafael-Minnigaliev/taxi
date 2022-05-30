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
	<?php Asset::getInstance()->AddCss(SITE_TEMPLATE_PATH . '/css/style.css')?>
	<?php Asset::getInstance()->AddCss('https://unpkg.com/aos@2.3.1/dist/aos.css')?>
	<?php Asset::getInstance()->AddCss('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css')?>
	<?php Asset::getInstance()->AddCss('https://unpkg.com/swiper@7/swiper-bundle.min.css')?>
	<?php Asset::getInstance()->AddJs('https://unpkg.com/swiper@7/swiper-bundle.min.js')?>
	<?php Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH.'/js/main.js')?>
	<?php Asset::getInstance()->AddJs(SITE_TEMPLATE_PATH.'/js/aos.js')?>
    <script>AOS.init();</script>
</head>
<body>
<?php $APPLICATION->ShowPanel(); ?>
<header class="header-wrapper">
    <div class="container header-container">
        <div class="header-logo animate__animated animate__lightSpeedInLeft ">
            <img src="<?= SITE_TEMPLATE_PATH ?>/images/logo.svg" alt="">
        </div>
		<? $APPLICATION->IncludeComponent(
			'bitrix:menu',
			'menu',
			array(
				'ALLOW_MULTI_SELECT' => 'N',
				'CHILD_MENU_TYPE' => 'left',
				'DELAY' => 'N',
				'MAX_LEVEL' => '1',
				'MENU_CACHE_GET_VARS' => array(0 => '',),
				'MENU_CACHE_TIME' => '3600',
				'MENU_CACHE_TYPE' => 'N',
				'MENU_CACHE_USE_GROUPS' => 'Y',
				'ROOT_MENU_TYPE' => 'top',
				'USE_EXT' => 'N'
			)
		); ?>
    </div>
</header>
