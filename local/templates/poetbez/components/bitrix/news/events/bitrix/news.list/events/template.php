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
<div class="events__wrapper">

	<?if($arParams["DISPLAY_TOP_PAGER"]):?>
		<?=$arResult["NAV_STRING"]?><br />
	<?endif;?>

	<?foreach($arResult["NEXT_EVENT"] as $key => $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		
		<?if($key == 0):?>
			<h2 class="h2 text-center mt-5 pt-0 pt-md-3 pt-lg-5"><?=GetMessage('NEXT_EVENT');?></h2>
		<?endif;?>

		<div class="events__block pb-0 pb-lg-2" itemscope itemtype="https://schema.org/Event">
			<a href="<?=$arItem["DETAIL_PAGE_URL"];?>" class="w-100 h-100 d-inline-block"  title="<?=$arItem['NAME'];?>" itemprop="url">
				<picture class="w-100 h-100 d-inline-block" itemscope itemtype="https://schema.org/ImageObject">
					<source srcset="<?=makeWebp($arItem['PREVIEW_PICTURE']['SRC']);?>" media="(max-width: 575px)" />
					<img src="<?=makeWebp($arItem["DETAIL_PICTURE"]["SRC"]);?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT'];?>"  class="w-100 h-100" itemprop="image" />
				</picture>
				<div class="events__block-info">
					<p class="events__name" itemprop="name"><?=$arItem["NAME"]?></p>
					<p class="events__date mb-0" itemprop="startDate"><?= (new \Bitrix\Main\Type\DateTime($arItem["ACTIVE_TO"]))->format('d.m.Y H:i');?></p>
				</div>
			</a>
		</div>
	<?endforeach;?>

	<?foreach($arResult["PREV_EVENT"] as $key => $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		
		<?if($key == 0):?>
			<h2 class="h2 text-center mt-5 pt-0 pt-md-3 pt-lg-5"><?=GetMessage('PREV_EVENT');?></h2>
		<?endif;?>
		<div class="events__block mb-5 pb-0 pb-lg-2" itemscope itemtype="https://schema.org/Event">
			<a href="<?=$arItem["DETAIL_PAGE_URL"];?>" class="w-100 h-100 d-inline-block"  title="<?=$arItem['NAME'];?>" itemprop="url">
				<picture class="w-100 h-100 d-inline-block" itemscope itemtype="https://schema.org/ImageObject">
					<source srcset="<?=makeWebp($arItem['PREVIEW_PICTURE']['SRC']);?>" media="(max-width: 575px)" />
					<img src="<?=makeWebp($arItem["DETAIL_PICTURE"]["SRC"]);?>" alt="<?=$arItem['DETAIL_PICTURE']['ALT'];?>" class="w-100 h-100" itemprop="image" />
				</picture>
				<div class="events__block-info">
					<p class="events__name mb-2" itemprop="name"><?=$arItem["NAME"]?></p>
					<p class="events__date mb-0" itemprop="startDate"><?= (new \Bitrix\Main\Type\DateTime($arItem["ACTIVE_TO"]))->format('d.m.Y');?></p>
				</div>
			</a>
		</div>
	<?endforeach;?>

	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<div class="pagin__block mt-5">
			<?=$arResult["NAV_STRING"]?>
		</div>
	<?endif;?>
</div>

