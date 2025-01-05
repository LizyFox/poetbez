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

?>

<div class="news-detail__block" itemscope itemtype="https://schema.org/Article">
	<meta itemprop="name" content="<?=$arResult['NAME'];?>">
	<div class="row flex-column-reverse flex-md-row">
		<div class="col-12 col-md-7 mb-4 mb-md-0">
			<div class="news-detail__text" itemprop="articleBody"><?=$arResult["DETAIL_TEXT"]?></div>
		</div>
		<div class="col-12 col-md-5 text-center text-md-end mb-4 mb-md-0" itemscope itemtype="https://schema.org/ImageObject">
			<?if ($arResult["DETAIL_PICTURE"]):?>
				<img src="<?=makeWebp($arResult["DETAIL_PICTURE"]["SRC"]);?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT'];?>"  class="news-detail__img" itemprop="image" />
			<?else:?>
				<img src="<?=makeWebp($arResult["PREVIEW_PICTURE"]["SRC"]);?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT'];?>"  class="news-detail__img" itemprop="image" />
			<?endif;?>
		</div>
	</div>
	<?if (!empty($arResult["PROPERTIES"]["NEWS_PHOTOS"]["VALUE"])):?>
		<div class="mt-3 mt-lg-5">
			<p class="h2 text-center"><?=GetMessage('NEWS_PHOTOS');?></p>
			<div class="news-detail__gallery" itemscope itemtype="https://schema.org/ImageObject">
				<?foreach($arResult["PROPERTIES"]["NEWS_PHOTOS"]["VALUE"] as $key => $photo):?>
					<div class="news-detail__gallery-item h-100 w-100">
						<img src="<?=makeWebp(CFile::GetPath($photo))?>" alt="<?=GetMessage('NEWS_PHOTOS');?> - <?=$key+1;?>" class="w-100 h-100" loaded="lazy" data-fancybox="news-detail-slider-<?=$arResult['ID']?>" itemprop="image">
					</div>
				<?endforeach?>
			</div>
		</div>
	<?endif;?>
</div>
<div class="news-another__block mt-sm-2 pt-sm-3 mt-md-5 pt-md-3 pt-lg-5">
	<p class="h2"><?=GetMessage('NEWS_ANOTHER');?></p>
	<div class="news-another__items">
		<?foreach($arResult["ANOTHER_ITEMS"] as $arItem):?>
			<div class="w-100">
				<div class="news-item__block h-100" itemscope itemtype="https://schema.org/Article">
					<a href="<?=$arItem["DETAIL_PAGE_URL"];?>" class="w-100 d-inline-block">
						<div class="news-item__img" itemscope itemtype="https://schema.org/ImageObject">
							<img src="<?=makeWebp($arItem["SECTION_PICTURE"]);?>" alt="Логотип <?=$arItem["SECTION_NAME"]?>" class="news-item__img-pechat" />
							<?/*<picture class="w-100 h-100 d-inline-block">
								<source srcset="<?=makeWebp($arItem['PREVIEW_PICTURE']['SRC']);?>" media="(max-width: 575px)" />*/?>
								<img src="<?=makeWebp(CFile::GetPath($arItem["PREVIEW_PICTURE"]));?>" alt="<?=$arItem['NAME'];?>" class="w-100 h-100" itemprop="image" />
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
</div>