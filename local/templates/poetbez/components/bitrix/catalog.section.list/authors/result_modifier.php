<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

foreach ($arResult['SECTIONS'] as $key => $arSection) {
	$sectionId = $arSection['ID'];

    $section = CIBlockSection::GetList(
        [],
        ['ID' => $sectionId, 'IBLOCK_ID' => $arParams["IBLOCK_ID"]],
        false,
        ['UF_AUTHOR_NAME', 'UF_AUTHOR_LAST_NAME']
    )->Fetch();

    if ($section) {
		$arResult['SECTIONS'][$key]['UF_AUTHOR_NAME'] = $section['UF_AUTHOR_NAME'];
		$arResult['SECTIONS'][$key]['UF_AUTHOR_LAST_NAME'] = $section['UF_AUTHOR_LAST_NAME'];
    }
}
