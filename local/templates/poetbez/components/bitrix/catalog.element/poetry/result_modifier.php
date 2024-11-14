<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** Другие стихи автора */
$count = 0;

$iblockId = $arParams['IBLOCK_ID'];
$sectionId = $arResult['SECTION']['ID'];

$arFilter = [
	'IBLOCK_ID' => $iblockId,
	'SECTION_ID' => $sectionId,
	'ACTIVE' => 'Y',
];

$arSelect = [
	'ID',
	'NAME',
	'DETAIL_PAGE_URL',
];

$res = CIBlockElement::GetList(['ID' => 'desc'], $arFilter, false, false, $arSelect);

while ($ob = $res->GetNext()) {
	$arResult['AUTHOR_POETRY'][$count]['NAME'] = $ob['NAME'];
	$arResult['AUTHOR_POETRY'][$count]['DETAIL_PAGE_URL'] = $ob['DETAIL_PAGE_URL'];
	$count++;
}
/** Другие стихи автора */

/** Соцсети автора */
$sectionFilter = [
	'IBLOCK_ID' => $iblockId,
	'ID' => $sectionId,
];

$sectionSelect = [
	'NAME',
	'UF_AUTHOR_LINK_TG',
	'UF_AUTHOR_LINK_VK',
];

$sectionRes = CIBlockSection::GetList([], $sectionFilter, true, $sectionSelect);

if ($section = $sectionRes->GetNext()) {
	$arResult['AUTHOR_NAME'] = $section['NAME'];

	if (!empty($section['UF_AUTHOR_LINK_TG'])) {
		$arResult['UF_AUTHOR_LINK_TG'] = $section['UF_AUTHOR_LINK_TG'];
	}

	if (!empty($section['UF_AUTHOR_LINK_VK'])) {
		$arResult['UF_AUTHOR_LINK_VK'] = $section['UF_AUTHOR_LINK_VK'];
	}
}
/** Соцсети автора */

/** Навигация по элементам */
$currentElementId = (int)$arResult['ID'];
$currentSectionId = $arResult['SECTION']['ID'];
$currentSectionCode = $arResult['SECTION']['CODE'];
$basePath = '/' . strtolower($iblockName) . '/';

$iblockRes = CIBlock::GetByID($iblockId);
if ($iblock = $iblockRes->GetNext()) {
	$iblockCode = $iblock['CODE'];

	$currentElement = CIBlockElement::GetList([], [
		'IBLOCK_ID' => $iblockId,
		'ID' => $currentElementId,
		'ACTIVE' => 'Y',
	], false, false, ['ID', 'NAME', 'CODE']);
	
	if ($element = $currentElement->GetNext()) {
		$currentCode = $element['CODE'];

		$basePath = '/' . strtolower($iblockCode) . '/';

		$elemSelect = ['ID', 'CODE', 'NAME'];

		$prevFilter = [
			'IBLOCK_ID' => $iblockId,
			'<ID' => $currentElementId,
			'SECTION_ID' => $currentSectionId,
			'ACTIVE' => 'Y',
		];

		$prevRes = CIBlockElement::GetList(['ID' => 'DESC'], $prevFilter, false, ['nTopCount' => 1], $elemSelect);

		if ($prev = $prevRes->GetNext()) {
			$arResult['PREV_ELEM_LINK'] = $basePath . $currentSectionCode . '/' . $prev['CODE'] . '/';
			$arResult['PREV_ELEM_NAME'] = $prev['NAME'];
			$arResult['PREV_ELEM_ID'] = $prev['ID'];
		}

		$nextFilter = [
			'IBLOCK_ID' => $iblockId,
			'>ID' => $currentElementId,
			'SECTION_ID' => $currentSectionId,
			'ACTIVE' => 'Y',
		];

		$nextRes = CIBlockElement::GetList(['ID' => 'ASC'], $nextFilter, false, ['nTopCount' => 1], $elemSelect);
		
		if ($next = $nextRes->GetNext()) {
			$arResult['NEXT_ELEM_LINK'] = $basePath . $currentSectionCode . '/' . $next['CODE'] . '/';
			$arResult['NEXT_ELEM_NAME'] = $next['NAME'];
			$arResult['NEXT_ELEM_ID'] = $next['ID'];
		}
	}
}
/** Навигация по элементам */
