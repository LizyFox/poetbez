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
$this->setFrameMode(true);

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

$this->AddEditAction($arResult['SECTION']['ID'], $arResult['SECTION']['EDIT_LINK'], $strSectionEdit);
$this->AddDeleteAction($arResult['SECTION']['ID'], $arResult['SECTION']['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
?>

<?if ($arResult["SECTIONS_COUNT"] > 0):?>
	<div class="authors__block authors-members">
		<div class="row flex-column flex-sm-row gx-4">
			<?foreach ($arResult['SECTIONS'] as &$arSection):?>
				<div class="col-12 col-sm-6 col-lg-4 col-xl-3 mx-auto mx-sm-0 mb-4">
					<div class="authors__img mx-auto mx-md-0">
						<a href="<?=$arSection['SECTION_PAGE_URL'];?>" class="d-flex align-items-end justify-content-between flex-row-reverse h-100 w-100">
							<img src="<?=makeWebp(CFile::GetPath($arSection['DETAIL_PICTURE']));?>" alt="<?=$arSection['PICTURE']['ALT'];?>">
							<div class="authors__name">
								<span class="authors__fisrt-name"><?=$arSection['UF_AUTHOR_NAME'];?></span> &nbsp;
								<span class="authors__last-name"><?=$arSection['UF_AUTHOR_LAST_NAME'];?></span>
							</div>
						</a>
					</div>
				</div>
			<?endforeach;?>
			<?unset($arSection);?>
		</div>
	</div>
<?endif;?>
