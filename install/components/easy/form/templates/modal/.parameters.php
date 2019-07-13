<?
/**
 * Copyright (c) 2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

$arTemplateParameters['NAME_MODAL_BUTTON'] = Array(
    'NAME' => Loc::getMessage('EASY_FORM_NAME_MODAL_BUTTON'),
    'TYPE' => 'STRING',
    'DEFAULT' =>  Loc::getMessage('EASY_FORM_DEFAULT_NAME_MODAL_BUTTON'),
    'PARENT' => 'BASE',
);
?>