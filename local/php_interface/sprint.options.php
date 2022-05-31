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
	->addTab('Время работы офиса')
	->addOption('OFFICE_HOURS', [
		'TITLE'   => 'Время работы офиса компании',
		'DEFAULT' => 'Пн-пт с 10:00 до 19:00',
		'WIDTH'   => '400',
	])
	->addTab('Время работы диспетчерской')
	->addOption('DISPATCHERS_WORKING_HOURS', [
		'TITLE'   => 'Время работы диспетчерской компании',
		'DEFAULT' => 'с 9:00 до 21:00, без выходных',
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
