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

?>

<div class="main__authors-block">
	<?foreach ($arResult['SECTIONS_NEW'] as $key => $arSection):?>
		<?if ($key <= 6):?>

			<?if($key == 0):?>
				<div class="row g-4">
					<div class="col-12 col-sm-6 col-md-7 col-lg-8">
						<div class="row g-4">
			<?endif;?>

			<?if($key >= 0 && $key < 2):?>
							<div class="col-12">
								<div class="main-author__item <?=($key == 0) ? 'main-author_small' : 'main-author_big'?>">
									<a class="main-author__link" href="<?=$arSection['SECTION_PAGE_URL']?>">
										<img src="<?=makeWebp(($arSection['PICTURE']) ? $arSection['PICTURE'] : $arSection['DETAIL_PICTURE']);?>" alt="<?=$arSection['NAME']?>" class="w-100 h-100 main-author__img">
										<div class="main-author__info">
											<div class="main-author__name"><?=$arSection['NAME']?></div>
											<div class="main-author__descr"><?=$arSection['UF_AUTHOR_ANONS_TEXT']?></div>
										</div>
									</a>
								</div>
							</div>
			<?endif;?>
			
			<?if($key == 2):?>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-5 col-lg-4">
						<div class="row g-4">
			<?endif;?>

			<?if($key >= 2 && $key < 4):?>
							<div class="col-12">
								<div class="main-author__item <?=($key == 2) ? 'main-author_big' : 'main-author_small'?>">
									<a class="main-author__link" href="<?=$arSection['SECTION_PAGE_URL']?>">
										<img src="<?=makeWebp(($arSection['PICTURE']) ? $arSection['PICTURE'] : $arSection['DETAIL_PICTURE']);?>" alt="<?=$arSection['NAME']?>" class="w-100 h-100 main-author__img">
										<div class="main-author__info">
											<div class="main-author__name"><?=$arSection['NAME']?></div>
											<div class="main-author__descr"><?=$arSection['UF_AUTHOR_ANONS_TEXT']?></div>
										</div>
									</a>
								</div>
							</div>
			<?endif;?>

			<?if($key == 4):?>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-5 col-lg-4">
						<div class="main-author__item main-author_big">
							<a class="main-author__link" href="<?=$arSection['SECTION_PAGE_URL']?>">
								<img src="<?=makeWebp(($arSection['PICTURE']) ? $arSection['PICTURE'] : $arSection['DETAIL_PICTURE']);?>" alt="<?=$arSection['NAME']?>" class="w-100 h-100 main-author__img">
								<div class="main-author__info">
									<div class="main-author__name"><?=$arSection['NAME']?></div>
									<div class="main-author__descr"><?=$arSection['UF_AUTHOR_ANONS_TEXT']?></div>
								</div>
							</a>
						</div>
					</div>
			<?endif;?>

			<?if($key == 5):?>
					<div class="col-12 col-sm-6 col-md-7 col-lg-8">
						<div class="main-author__item main-author_big">
							<a class="main-author__link" href="<?=$arSection['SECTION_PAGE_URL']?>">
								<img src="<?=makeWebp(($arSection['PICTURE']) ? $arSection['PICTURE'] : $arSection['DETAIL_PICTURE']);?>" alt="<?=$arSection['NAME']?>" class="w-100 h-100 main-author__img">
								<div class="main-author__info">
									<div class="main-author__name"><?=$arSection['NAME']?></div>
									<div class="main-author__descr"><?=$arSection['UF_AUTHOR_ANONS_TEXT']?></div>
								</div>
							</a>
						</div>
					</div>
				</div>
			<?endif;?>

		<?endif;?>
	<?endforeach;?>
	<div class="text-center mt-5">
		<a href="/<?=$arResult["CODE"]?>/" class="button ask__btn mb-0"><?=GetMessage('AUTHORS_ALL');?></a>
	</div>
</div>
