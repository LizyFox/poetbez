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
	<div class="authors__block contacts-members">
		<div class="row justify-content-center flex-column flex-md-row">
			<?foreach ($arResult['SECTIONS'] as &$arSection):?>
				<?if ($arSection['UF_AUTHOR_IS_ADMIN'] == true):?>
					<div class="col-9 col-sm-8 col-md-4 col-xl-3 mx-auto mx-md-0 text-center text-md-start">
						<div class="authors__img mx-auto mx-md-0">
							<a href="<?=$arSection['SECTION_PAGE_URL'];?>" class="d-flex align-items-end justify-content-between flex-row-reverse h-100 w-100">
								<img src="<?=makeWebp(CFile::GetPath($arSection['DETAIL_PICTURE']));?>" alt="<?=$arSection['PICTURE']['ALT'];?>">
								<div class="authors__name">
									<span class="authors__fisrt-name"><?=$arSection['UF_AUTHOR_NAME'];?></span> &nbsp;
									<span class="authors__last-name"><?=$arSection['UF_AUTHOR_LAST_NAME'];?></span>
								</div>
							</a>
						</div>
						<div class="authors__info mt-2 mb-5 mb-md-0">
							<a href="<?=$arSection['UF_AUTHOR_LINK_VK'];?>" class="link-vk me-3" rel="nofollow" target="_blank">
								<img src="<?=SITE_TEMPLATE_PATH?>/images/vkontakte.png" alt="ВКонтакте">
							</a>
							<?$APPLICATION->IncludeFile(
								SITE_DIR."include/email-contacts.php",
								Array(),
								Array("MODE"=>"html")
							);?>
							<p class="mt-1 mb-0"><?=$arSection['UF_AUTHOR_ANONS_TEXT'];?></p>
						</div>
					</div>
				<?endif;?>
			<?endforeach;?>
			<?unset($arSection);?>
		</div>
	</div>
<?endif;?>
