<?
/**
 * Copyright (c) 2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

namespace Easy\Form;
use \Bitrix\Main\Entity;
use \Bitrix\Main\Type;
use \Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);


class EasyFormTable extends Entity\DataManager
{
    public static function getTableName()
    {
        return 'b_easyform';
    }
    public static function getUfId()
    {
        return 'EASYFORM';
    }
    public static function getMap()
    {
        return array(
            'ID' => new Entity\IntegerField('ID', array(
                'primary' => true,
                'autocomplete' => true,
                'title' => Loc::getMessage('EASY_FORM_ENTITY_ID_FIELD')
            )),
            'DATE_CREATE' => new Entity\DatetimeField('DATE_CREATE', array(
                'default_value' => new \Bitrix\Main\Type\DateTime(),
                'title' => Loc::getMessage('EASY_FORM_ENTITY_DATE_CREATE_FIELD')
            )),
            'NAME' => new Entity\StringField('NAME', array(
                'default_value' => null,
                'title' => Loc::getMessage('EASY_FORM_ENTITY_NAME_FIELD')
            )),
            'FIELDS' => new Entity\TextField('FIELDS', array(
                'serialized' => true,
                'column_name' => 'FIELDS',
                'title' => Loc::getMessage('EASY_FORM_ENTITY_C_FIELDS_FIELD')
            )),

        );
    }
}