<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}
/** @var array $arParams */
$arParams['MEDIA_PROPERTY'] = (string)($arParams['MEDIA_PROPERTY'] ?? 'N');
$arParams['USE_SHARE'] = (string)($arParams['USE_SHARE'] ?? 'N');
$arParams['USE_SHARE'] = $arParams['USE_SHARE'] === 'Y' ? 'Y' : 'N';
$arParams['SHARE_HIDE'] = (string)($arParams['SHARE_HIDE'] ?? 'N');
$arParams['SHARE_HIDE'] = $arParams['SHARE_HIDE'] === 'Y' ? 'Y' : 'N';
$arParams['LIST_USE_SHARE'] ??= [];
$arParams['LIST_USE_SHARE'] = is_array($arParams['LIST_USE_SHARE']) ? $arParams['LIST_USE_SHARE'] : [];
$arParams['SHARE_TEMPLATE'] = (string)($arParams['SHARE_TEMPLATE'] ?? 'N');
$arParams['SHARE_HANDLERS'] ??= [];
$arParams['SHARE_HANDLERS'] = is_array($arParams['SHARE_HANDLERS']) ? $arParams['SHARE_HANDLERS'] : [];
$arParams['SHARE_SHORTEN_URL_LOGIN'] = (string)($arParams['SHARE_SHORTEN_URL_LOGIN'] ?? 'N');
$arParams['SHARE_SHORTEN_URL_KEY'] = (string)($arParams['SHARE_SHORTEN_URL_KEY'] ?? 'N');

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
$select = ['ID', 'CODE', 'NAME', 'SECTION_PAGE_URL', 'PICTURE'];

$res = CIBlockSection::GetList(['SORT' => 'ASC'], $filter, false, $select);

while ($arSection = $res->GetNext()) {
    $arResult["SECTIONS"][$arSection['ID']] = [
        'CODE' => $arSection['CODE'],
        'SECTION_PAGE_URL' => $arSection['SECTION_PAGE_URL'],
        'DETAIL_PICTURE' => $arSection['PICTURE'],
        'NAME' => $arSection['NAME'],
    ];
}