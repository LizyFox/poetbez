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

<div class="main-slider__block">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?if ($arItem['ID'] == 9):?>
			<?$count = 1;?>

			<?foreach($arItem['PROPERTIES']['PHOTOS']['VALUE'] as $index => $itemPhoto):?>
				<div class="main-slider__img w-100 h-100">
					<?if (!empty($arItem['PROPERTIES']['PHOTOS_ADAPTIVE'])):?>
						<picture class="w-100 h-100 d-inline-block">
							<?foreach($arItem['PROPERTIES']['PHOTOS_ADAPTIVE']['VALUE'] as $index_adaptive => $itemPhoto_adaptive):?>
								<?if ($index == $index_adaptive):?>
									<source srcset="<?=makeWebp(CFile::GetPath($itemPhoto_adaptive));?>" media="(max-width: 767px)" />
								<?endif;?>
							<?endforeach;?>
					<?endif;?>
						<img src="<?=makeWebp(CFile::GetPath($itemPhoto));?>" alt="Фотошка <?=$count;?>" class="w-100 h-100" data-type="image" loading="lazy" />
					<?if (!empty($arItem['PROPERTIES']['PHOTOS_ADAPTIVE'])):?>
						</picture>
					<?endif;?>
					
					<?$count++;?>
				</div>
			<?endforeach;?>
		<?endif;?>
	<?endforeach;?>
</div>
