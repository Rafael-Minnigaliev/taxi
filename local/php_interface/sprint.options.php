<?php

use Sprint\Options\Builder\Builder;

return (new Builder)
    ->setTitle('Настройки контента')
    ->setSort(60)
    ->addPage('Шапка')
    ->addTab('Телефон')
    ->addOption('PHONE1', [
        'TITLE'   => 'Телефон компании',
        'DEFAULT' => '+7 (999) 123-45-69',
        'WIDTH'   => '400',
    ])
	->addPage('Подвал')
	->addTab('Адрес')
	->addOption('ADDRESS', [
		'TITLE'   => 'Адрес компании',
		'DEFAULT' => 'г. Уфа, ул. Тестовая, д. 28, стр. 1, офис 205',
		'WIDTH'   => '400',
	])
	->addTab('Телефон')
	->addOption('PHONE2', [
		'TITLE'   => 'Телефон компании',
		'DEFAULT' => '+7 (999) 123-45-69',
		'WIDTH'   => '400',
	])
	->addTab('Соц-сети')
	->addOption('FACE_BOOK', [
		'TITLE'   => 'Фейсбук',
		'DEFAULT' => 'facebook.com',
		'WIDTH'   => '400',
	])
	->addOption('YOUTUBE', [
		'TITLE'   => 'Ютуб',
		'DEFAULT' => 'youtube.com',
		'WIDTH'   => '400',
	])
	->addOption('INSTAGRAM', [
		'TITLE'   => 'Инстаграм',
		'DEFAULT' => 'instagram.com',
		'WIDTH'   => '400',
	])
	->addOption('TG', [
		'TITLE'   => 'Телеграм',
		'DEFAULT' => 'telegram.com',
		'WIDTH'   => '400',
	])
	->addOption('VK', [
		'TITLE'   => 'Вконтакте',
		'DEFAULT' => 'vk.ru',
		'WIDTH'   => '400',
	]);
