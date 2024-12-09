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
$previous_date = strtotime(date('Y-m-d H:i:s', strtotime($arResult['ACTIVE_TO']) - 41 * 60 * 60));

?>

<div class="event-detail__block">
	<div class="container-lg">
		<div class="row">
			<div class="col-12 col-lg-7 mb-4 mb-lg-0">
				<div class="event-detail__text">
					<?if ($current_date >= (strtotime($arResult['ACTIVE_TO'])) && $arResult["DETAIL_TEXT"]):?>
						<?=$arResult["DETAIL_TEXT"]?>
					<?else:?>
						<?=$arResult["PREVIEW_TEXT"]?>
					<?endif;?>
				</div>
			</div>
			<div class="col-12 col-lg-5">
				<?if ($arResult["DETAIL_PICTURE"]):?>
					<img src="<?=makeWebp($arResult["DETAIL_PICTURE"]["SRC"]);?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT'];?>"  class="w-100" style="object-fit:cover; height: auto;" />
				<?else:?>
					<img src="<?=makeWebp($arResult["PREVIEW_PICTURE"]["SRC"]);?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT'];?>"  class="w-100" style="object-fit:cover; height: auto;" />
				<?endif;?>
			</div>
		</div>
	</div>
</div>
