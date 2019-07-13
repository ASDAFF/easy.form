<?
/**
 * Copyright (c) 2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/local/modules/easy.form/admin/easy_form.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/modules/easy.form/admin/easy_form.php");
} else {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/easy.form/admin/easy_form.php");
}
?>