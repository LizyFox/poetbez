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
</div>
