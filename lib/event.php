<?
/**
 * Copyright (c) 2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

namespace Easy\Form;
class event
{
    public function eventHandler(\Bitrix\Main\Entity\Event $event)
    {
        $result = new \Bitrix\Main\Entity\EventResult;
        $result->modifyFields(array('result' => true));
        return $result;
    }
}