<?php

foreach ($arResult["ITEMS"] as &$arItem) {
    $filter = ['ID' => $arItem['IBLOCK_SECTION_ID'], 'ACTIVE' => 'Y'];
    $select = ['ID', 'NAME', 'PICTURE'];

    $res = CIBlockSection::GetList([], $filter, true, $select);

    if ($arSection = $res->Fetch()) {
        $arItem["SECTION_PICTURE"] = CFile::GetPath($arSection['PICTURE']);
        $arItem["SECTION_NAME"] = $arSection['NAME'];
    }
}
