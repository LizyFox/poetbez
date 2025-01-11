<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(false);

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

$this->AddEditAction($arResult['SECTION']['ID'], $arResult['SECTION']['EDIT_LINK'], $strSectionEdit);
$this->AddDeleteAction($arResult['SECTION']['ID'], $arResult['SECTION']['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

$arNavParams = [
	'nPageSize'          => 12,
	'bDescPageNumbering' => false,
	'bShowAll'           => false,
];

$arOrder = ['left_margin' => 'asc'];

$arFilter = [
	'IBLOCK_ID'     => 4,
	'ACTIVE'        => 'Y',
	'GLOBAL_ACTIVE' => 'Y'
];

$arSelect = ['NAME', 'DETAIL_PICTURE', 'SECTION_PAGE_URL', 'UF_AUTHOR_NAME', 'UF_AUTHOR_LAST_NAME'];

$rsContent = CIBlockSection::GetList($arOrder, $arFilter, false, $arSelect, $arNavParams);

$navigation = $rsContent->GetPageNavStringEx(
	$navComponentObject,
	$this->arParams["PAGER_TITLE"],
	$this->arParams["PAGER_TEMPLATE"],
	false,
);
?>

<?if ($arResult["SECTIONS_COUNT"] > 0):?>
	<div class="authors__block authors-members">
		<div class="row flex-column flex-sm-row gx-4">
			<?while ($arSection = $rsContent->GetNext()):?>
				<div class="col-12 col-sm-6 col-lg-4 col-xl-3 mx-auto mx-sm-0 mb-4">
					<div class="authors__img mx-auto mx-md-0" itemscope itemtype="http://schema.org/Person">
						<a href="<?=$arSection['SECTION_PAGE_URL'];?>" class="d-flex align-items-end justify-content-between flex-row-reverse h-100 w-100">
							<img src="<?=makeWebp(CFile::GetPath($arSection['DETAIL_PICTURE']));?>" alt="<?=$arSection['PICTURE']['ALT'];?>" itemprop="image">
							<div class="authors__name" itemprop="name">
								<span class="authors__fisrt-name"><?=$arSection['UF_AUTHOR_NAME'];?></span> &nbsp;
								<span class="authors__last-name"><?=$arSection['UF_AUTHOR_LAST_NAME'];?></span>
							</div>
						</a>
						<div class="authors__more">
							<a href="<?=$arSection['SECTION_PAGE_URL'];?>" class="d-flex align-items-center justify-content-center h-100 w-100 p-2"><?=GetMessage('AUTHORS_MORE');?></a>
						</div>
					</div>
				</div>
			<?endwhile?>
		</div>
		<div class="pagin__block">
			<?=$navigation;?>
		</div>
	</div>
<?endif;?>
