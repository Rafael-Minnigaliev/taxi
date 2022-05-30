<?php

use Sprint\Options\Builder\Builder;

return (new Builder)
    ->setTitle('Настройки контента')
    ->setSort(60)
    ->addPage('Страница 1')
    ->addTab('О компании')
    ->addOption('PHONE', [
        'TITLE'   => 'Телефон компании',
        'DEFAULT' => '+7 (999) 123-45-69',
        'WIDTH'   => '400',
    ]);
