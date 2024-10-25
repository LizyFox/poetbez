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

$current_date = strtotime(date('Y-m-d H:i:s'));
?>

<div class="main-banner__block">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<div class="main-banner__img w-100 h-100">
			<?if ($current_date <= (strtotime($arItem['ACTIVE_TO']))):?>
				<a href="<?=$arItem['PROPERTIES']['LINK_BANNER']['VALUE'];?>" class="w-100 h-100 d-inline-block"  title="<?=$arItem['NAME'];?>">
					<picture class="w-100 h-100 d-inline-block">
						<source srcset="<?=makeWebp($arItem['PREVIEW_PICTURE']['SRC']);?>" media="(max-width: 575px)" />
						<img src="<?=makeWebp($arItem['DETAIL_PICTURE']['SRC']);?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT'];?>"  class="w-100 h-100" />
					</picture>
				</a>
			<?else:?>
				<picture class="w-100 h-100 d-inline-block">
					<source srcset="<?=makeWebp($arItem['PREVIEW_PICTURE']['SRC']);?>" media="(max-width: 575px)" />
					<img src="<?=makeWebp($arItem['DETAIL_PICTURE']['SRC']);?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT'];?>"  class="w-100 h-100" />
				</picture>
			<?endif;?>
		</div>
		<div class="main-banner__btn" style="background-color: <?=$arItem['PROPERTIES']['BG_BUTTON']['VALUE'];?>;">
			<a href="<?=$arItem['PROPERTIES']['LINK_BTN']['VALUE'];?>" style="color: <?=$arItem['PROPERTIES']['COLOR_BTN']['VALUE'];?>;" title="<?=GetMessage('ALL_EVENTS');?>">
				<?=$arItem['PROPERTIES']['TEXT_BTN']['VALUE'];?>
			</a>
		</div>
	<?endforeach;?>
</div>
