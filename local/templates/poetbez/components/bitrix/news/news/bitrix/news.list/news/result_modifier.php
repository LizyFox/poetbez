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

/*
$sectionIds = [];

$arFilter = array(
    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
    "ACTIVE" => "Y",
);

$arSelect = array("IBLOCK_SECTION_ID");

$res = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);

while ($ob = $res->GetNextElement()) {
    $arFields = $ob->GetFields();
    
    if (!empty($arFields['IBLOCK_SECTION_ID'])) {
        $sectionIds[] = $arFields['IBLOCK_SECTION_ID'];
    }
}

$sectionIds = array_unique($sectionIds);

$sectionsData = [];
$filter = ['ID' => $sectionIds, 'ACTIVE' => 'Y'];
$select = ['ID', 'CODE', 'NAME'];

$res = CIBlockSection::GetList(['SORT' => 'ASC'], $filter, false, $select);

while ($arSection = $res->GetNext()) {
    $arResult["SECTIONS"][$arSection['ID']] = [
        'CODE' => $arSection['CODE'],
        'NAME' => $arSection['NAME'],
    ];
}

$iblockId = $arParams["IBLOCK_ID"];

$allElements = [];

$sectionFilter = [
    'IBLOCK_ID' => $iblockId,
    'ACTIVE' => 'Y',
];

$sections = [];
$sectionResult = CIBlockSection::GetList([], $sectionFilter);

while ($section = $sectionResult->GetNext()) {
    $sections[$section['ID']] = [
        'CODE' => $section['CODE'],
        'NAME' => $section['NAME'],
    ];
}

$elementFilter = [
    'IBLOCK_ID' => $iblockId,
    'ACTIVE' => 'Y',
];

$elementSelect = [
    'ID',
    'IBLOCK_SECTION_ID',
    'DETAIL_PAGE_URL',
    'PREVIEW_PICTURE',
    'DETAIL_PICTURE',
    'ACTIVE_FROM',
    'NAME',
    'PREVIEW_TEXT',
    'DETAIL_TEXT',
];

$elementResult = CIBlockElement::GetList([], $elementFilter, false, false, $elementSelect);

while ($element = $elementResult->GetNext()) {
    $sectionCode = '';

    if ($element['IBLOCK_SECTION_ID'] && isset($sections[$element['IBLOCK_SECTION_ID']])) {
        $sectionCode = $sections[$element['IBLOCK_SECTION_ID']]['CODE'];
    }

    $element['SECTION_CODE'] = $sectionCode;

    $allElements[] = $element;
}

foreach ($allElements as $element) {
    $arResult[$element['SECTION_CODE']][] = $element;
}

foreach ($arResult["ITEMS"] as &$arItem) {
    $sectionId = $arItem['IBLOCK_SECTION_ID'];

    if (isset($arResult["SECTIONS"][$sectionId])) {
        $arItem['IBLOCK_SECTION_CODE'] = $arResult["SECTIONS"][$sectionId]['CODE'];
        $arItem['IBLOCK_SECTION_NAME'] = $arResult["SECTIONS"][$sectionId]['NAME'];
    }

    if (!isset($arSectionElements[$arItem['IBLOCK_SECTION_CODE']])) {
        $arSectionElements[$arItem['IBLOCK_SECTION_CODE']] = [];
    }

    $arSectionElements[$arItem['IBLOCK_SECTION_CODE']][] = $arItem;
}

foreach($arSectionElements as $arItem['IBLOCK_SECTION_CODE'] => $sectionItems) {
    foreach ($sectionItems as $item) {
        $arResult[$arItem['IBLOCK_SECTION_CODE']][] = $item;
    }
}
*/
