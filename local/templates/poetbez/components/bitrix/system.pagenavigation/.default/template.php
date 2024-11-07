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

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>

<?if($arResult["bDescPageNumbering"] === true):?>

	<?=$arResult["NavFirstRecordShow"]?> <?=GetMessage("nav_to")?> <?=$arResult["NavLastRecordShow"]?> <?=GetMessage("nav_of")?> <?=$arResult["NavRecordCount"]?><br />

	<?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["bSavePage"]):?>
			<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><?=GetMessage("nav_begin")?></a>
			|
			<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><?=GetMessage("nav_prev")?></a>
			|
		<?else:?>
			<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("nav_begin")?></a>
			|
			<?if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):?>
				<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("nav_prev")?></a>
				|
			<?else:?>
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><?=GetMessage("nav_prev")?></a>
				|
			<?endif?>
		<?endif?>
	<?else:?>
		<?=GetMessage("nav_begin")?>&nbsp;|&nbsp;<?=GetMessage("nav_prev")?>&nbsp;|
	<?endif?>

	<?while($arResult["nStartPage"] >= $arResult["nEndPage"]):?>
		<?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			<b><?=$NavRecordGroupPrint?></b>
		<?elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>
			<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$NavRecordGroupPrint?></a>
		<?else:?>
			<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$NavRecordGroupPrint?></a>
		<?endif?>

		<?$arResult["nStartPage"]--?>
	<?endwhile?>

	|

	<?if ($arResult["NavPageNomer"] > 1):?>
		<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><?=GetMessage("nav_next")?></a>
		|
		<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><?=GetMessage("nav_end")?></a>
	<?else:?>
		<?=GetMessage("nav_next")?>&nbsp;|&nbsp;<?=GetMessage("nav_end")?>
	<?endif?>

<?else:?>

	<?/*=$arResult["NavFirstRecordShow"]?> <?=GetMessage("nav_to")?> <?=$arResult["NavLastRecordShow"]?> <?=GetMessage("nav_of")?> <?=$arResult["NavRecordCount"]?><br />*/?>

	<?if ($arResult["NavPageNomer"] > 1):?>

		<?if($arResult["bSavePage"]):?>
			<span class="pagin__element nav_start">
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><?=GetMessage("nav_begin")?></a>
			</span>
			
			<span class="pagin__element">
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">
					<img style="margin-right: 3px;" src="<?=SITE_TEMPLATE_PATH?>/images/arrow-left_small.png" alt="<?=GetMessage("nav_prev_alt")?>">
				</a>
			</span>
			
		<?else:?>
			<span class="pagin__element nav_start">
				<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("nav_begin")?></a>
			</span>
			
			<?if ($arResult["NavPageNomer"] > 2):?>
				<span class="pagin__element">
					<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">
						<img style="margin-right: 3px;" src="<?=SITE_TEMPLATE_PATH?>/images/arrow-left_small.png" alt="<?=GetMessage("nav_prev_alt")?>">
					</a>
				</span>
			<?else:?>
				<span class="pagin__element">
					<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">
						<img style="margin-right: 3px;" src="<?=SITE_TEMPLATE_PATH?>/images/arrow-left_small.png" alt="<?=GetMessage("nav_prev_alt")?>">
					</a>
				</span>
			<?endif?>
			
		<?endif?>

	<?else:?>
		<span class="pagin__element pagin_not-active nav_start"><?=GetMessage("nav_begin")?></span>
		<span class="pagin__element pagin_not-active">
			<img style="margin-right: 3px;" src="<?=SITE_TEMPLATE_PATH?>/images/arrow-left_small.png" alt="<?=GetMessage("nav_prev_alt")?>">
		</span>
	<?endif?>

	<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			<span class="pagin__element pagin_active"><?=$arResult["nStartPage"]?></span>
		<?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
			<span class="pagin__element">
				<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a>
			</span>
		<?else:?>
			<span class="pagin__element">
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a>
			</span>
		<?endif?>
		<?$arResult["nStartPage"]++?>
	<?endwhile?>
	

	<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<span class="pagin__element">
			<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/arrow-right_small.png" alt="<?=GetMessage("nav_next_alt")?>" title="<?=GetMessage("nav_next")?>">
			</a>
		</span>
		<span class="pagin__element nav_end">
			<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><?=GetMessage("nav_end")?></a>
		</span>
	<?else:?>
		<span class="pagin__element pagin_not-active">
			<img src="<?=SITE_TEMPLATE_PATH?>/images/arrow-right_small.png" alt="<?=GetMessage("nav_next_alt")?>" title="<?=GetMessage("nav_next")?>">
		</span>
		<span class="pagin__element pagin_not-active nav_end"><?=GetMessage("nav_end")?></span>
	<?endif?>

<?endif?>


<?if ($arResult["bShowAll"]):?>
<noindex>
	<?if ($arResult["NavShowAll"]):?>
		|&nbsp;<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=0" rel="nofollow"><?=GetMessage("nav_paged")?></a>
	<?else:?>
		|&nbsp;<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=1" rel="nofollow"><?=GetMessage("nav_all")?></a>
	<?endif?>
</noindex>
<?endif?>