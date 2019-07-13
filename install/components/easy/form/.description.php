<?
/**
 * Copyright (c) 2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

$arComponentDescription = array(
	"NAME"        => Loc::getMessage("CL_NAME"),
	"DESCRIPTION" => Loc::getMessage("CL_DESCRIPTION"),
	"ICON"        => "/images/cp.png",
	"PATH"        => array(
		"ID"   => "easy_form",
		"NAME" => Loc::getMessage("CL_NODE_NAME"),
	),
);