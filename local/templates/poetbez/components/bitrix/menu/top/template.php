<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<nav itemscope="" itemtype="http://schema.org/SiteNavigationElement" class="h-100">
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