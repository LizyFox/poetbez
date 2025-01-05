<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$iblockId = 4;
$sectionCount = 6;

$arFilter = array(
    'IBLOCK_ID' => $iblockId,
    'ACTIVE' => 'Y',
);

$arSelect = array(
    'ID',
    'NAME',
    'SECTION_PAGE_URL',
    'PICTURE',
    'DETAIL_PICTURE',
    'UF_AUTHOR_ANONS_TEXT'
);

$res = CIBlockSection::GetList(array('RAND' => 'ASC'), $arFilter, true, $arSelect);

$arResult['SECTIONS_NEW'] = array();

while ($section = $res->GetNext()) {
    $arResult['SECTIONS_NEW'][] = array(
        'ID' => $section['ID'],
        'NAME' => $section['NAME'],
        'SECTION_PAGE_URL' => $section['SECTION_PAGE_URL'],
        'PICTURE' => CFile::GetPath($section['PICTURE']),
        'DETAIL_PICTURE' => CFile::GetPath($section['DETAIL_PICTURE']),
        'UF_AUTHOR_ANONS_TEXT' => $section['UF_AUTHOR_ANONS_TEXT'],
    );
}

shuffle($arResult['SECTIONS_NEW']);

$arResult['SECTIONS_NEW'] = array_slice($arResult['SECTIONS_NEW'], 0, $sectionCount);
