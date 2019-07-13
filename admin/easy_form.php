<?
/**
 * Copyright (c) 2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_admin_before.php");

use Bitrix\Main\Localization\Loc;
use Easy\Form;

$modules = 'easy.form';
if ($APPLICATION->GetGroupRight($modules) < 'R')
	$APPLICATION->AuthForm(Loc::getMessage('ACCESS_DENIED'));


Loc::loadMessages($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/".$modules."/include.php");
\Bitrix\Main\Loader::IncludeModule($modules);

$APPLICATION->SetTitle(Loc::GetMessage("EASY_FORM_LIST"));


$MODULE_RIGHT = $APPLICATION->GetGroupRight($modules);


if ($MODULE_RIGHT == "D")
    $APPLICATION->AuthForm(Loc::GetMessage("ACCESS_DENIED"));


$tblObj = new EasyForm\EasyFormTable();
$queryObj = $tblObj->query();
$map = $tblObj->getMap();



$sTableID = $tblObj->getTableName();
$oSort = new CAdminSorting($sTableID, "ID", "ASC");
$lAdmin = new CAdminList($sTableID, $oSort);

$back_url = '/bitrix/admin/' . basename(__FILE__);
$url = "/bitrix/admin/" .  basename(__FILE__, ".php") . "_edit.php";

require 'listBulder.php';
