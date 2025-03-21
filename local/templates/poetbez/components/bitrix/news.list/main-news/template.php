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

?>

<div class="news__wrapper">
	<div class="row g-3 g-lg-4">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
				<div class="news-item__block h-100" itemscope itemtype="https://schema.org/Article">
					<a href="<?=$arItem["DETAIL_PAGE_URL"];?>" class="w-100 d-inline-block">
						<div class="news-item__img" itemscope itemtype="https://schema.org/ImageObject">
							<img src="<?=makeWebp($arItem["SECTION_PICTURE"]);?>" alt="Логотип <?=$arItem["SECTION_NAME"]?>" class="news-item__img-pechat" />
							<?/*<picture class="w-100 h-100 d-inline-block">
								<source srcset="<?=makeWebp($arItem['PREVIEW_PICTURE']['SRC']);?>" media="(max-width: 575px)" />*/?>
								<img src="<?=makeWebp($arItem["PREVIEW_PICTURE"]["SRC"]);?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT'];?>" class="w-100 h-100" itemprop="image" />
							<?/*</picture>*/?>
						</div>
					</a>
					<div class="new-item__info d-flex flex-column justify-content-between">
						<div>
							<div class="news-item__date" itemprop="datePublished"><?=FormatDate("d M Y", MakeTimeStamp($arItem["ACTIVE_FROM"]));?></div>
							<div class="news-item__name">
								<a href="<?=$arItem["DETAIL_PAGE_URL"];?>">
									<?=$arItem['NAME'];?>
									<meta itemprop="name" content="<?=$arItem['NAME'];?>">
								</a>
							</div>
							<meta itemprop="description" content="<?=$arItem['PREVIEW_TEXT'];?>">
						</div>
						<div class="news-item__btn mt-3">
							<a href="<?=$arItem["DETAIL_PAGE_URL"];?>" class="d-flex align-items-center justify-content-center h-100 w-100 p-2"><?=GetMessage('NEWS_DETAIL');?></a>
						</div>
					</div>
				</div>
			</div>
		<?endforeach;?>
	</div>
	<div class="text-center mt-5">
		<a href="/<?=$arResult["CODE"]?>/" class="button ask__btn mb-0"><?=GetMessage('NEWS_ALL')?></a>
	</div>
</div>
