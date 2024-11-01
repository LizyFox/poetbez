<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

$sectionId = $arResult['ID'];

$section = CIBlockSection::GetList(
    [],
    ['ID' => $sectionId, 'IBLOCK_ID' => $arParams["IBLOCK_ID"]],
    false,
    ['UF_AUTHOR_CITY', 'UF_AUTHOR_LINK_VK', 'UF_AUTHOR_LINK_TG']
)->Fetch();

if ($section) {
    $arResult['UF_AUTHOR_CITY'] = $section['UF_AUTHOR_CITY'];
    $arResult['UF_AUTHOR_LINK_VK'] = $section['UF_AUTHOR_LINK_VK'];
    $arResult['UF_AUTHOR_LINK_TG'] = $section['UF_AUTHOR_LINK_TG'];
}
