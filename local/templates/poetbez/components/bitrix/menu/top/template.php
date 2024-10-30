<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<nav itemscope="" itemtype="http://schema.org/SiteNavigationElement">
	<?if (!empty($arResult)):?>
		<ul class="top-menu h-100" itemscope="" itemtype="http://schema.org/ItemList">
			<?foreach($arResult as $arItem):?>
				<?if($arItem["SELECTED"]):?>
					<li class="selected" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
						<a href="<?=$arItem["LINK"]?>" itemprop="url"><?=$arItem["TEXT"]?></a>
						<meta itemprop="name" content="<?=$arItem["TEXT"]?>" />
					</li>
				<?else:?>
					<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
						<a href="<?=$arItem["LINK"]?>" itemprop="url"><?=$arItem["TEXT"]?></a>
						<meta itemprop="name" content="<?=$arItem["TEXT"]?>" />
					</li>
				<?endif?>
			<?endforeach?>
		</ul>		
	<?endif?>
</nav>
<div class="socseti__block d-md-none text-center">
	<p>Связаться с нами:</p>
	<?$APPLICATION->IncludeFile(
		SITE_DIR."include/telegram.php",
		Array(),
		Array("MODE"=>"html")
	);?>
	<?$APPLICATION->IncludeFile(
		SITE_DIR."include/vkontakte.php",
		Array(),
		Array("MODE"=>"html")
	);?>
	<?$APPLICATION->IncludeFile(
		SITE_DIR."include/email.php",
		Array(),
		Array("MODE"=>"html")
	);?>
</div>
<div class="mobile-ask__btn d-md-none">
	<p class="button ask__btn text-center"><?=GetMessage("HEADER_ASK")?></p>
</div>