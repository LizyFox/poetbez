<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}

$arFilter = array(
    'IBLOCK_ID' => $arResult['IBLOCK']['ID'],
    'ACTIVE' => 'Y',
);

$arSelect = array('ID', 'NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'DETAIL_PICTURE', 'DETAIL_PAGE_URL', 'ACTIVE_FROM', 'IBLOCK_SECTION_ID');

$res = CIBlockElement::GetList(array('RAND' => 'ASC'), $arFilter, false, array('nTopCount' => 5), $arSelect);

while ($ob = $res->GetNext()) {
    $arResult['ANOTHER_ITEMS'][] = $ob;
}

foreach ($arResult["ANOTHER_ITEMS"] as &$arItem) {
    $filter = ['ID' => $arItem['IBLOCK_SECTION_ID'], 'ACTIVE' => 'Y'];
    $select = ['ID', 'NAME', 'PICTURE'];

    $res = CIBlockSection::GetList([], $filter, true, $select);

    if ($arSection = $res->Fetch()) {
        $arItem["SECTION_PICTURE"] = CFile::GetPath($arSection['PICTURE']);
        $arItem["SECTION_NAME"] = $arSection['NAME'];
    }
}