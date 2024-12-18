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
		<div class="col-12 mt-3 mt-lg-5">
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
</div>