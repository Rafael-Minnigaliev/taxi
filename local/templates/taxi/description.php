<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

use Bitrix\Main\Localization\Loc;

$arTemplate = array(
	'NAME' => Loc::getMessage('NAME'),
	'DESCRIPTION' => Loc::getMessage('DESCRIPTION')
);
