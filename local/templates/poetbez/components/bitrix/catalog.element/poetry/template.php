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
<div class="poetry__block" itemscope itemtype="https://schema.org/CreativeWork">
	<meta itemprop="genre" content="Поэзия" />
	<div class="row flex-column-reverse flex-lg-row align-items-center align-items-lg-start">
		<div class="col-12 col-md-9 col-lg-4 mt-3 mt-lg-0">
			<div class="row">
				<div class="col-12 col-sm-8 col-lg-12">
					<p class="h2"><?=GetMessage('ANOTHER_POETRY');?></p>
					<div class="author-detail__elements">
						<?foreach($arResult['AUTHOR_POETRY'] as $element):?>
							<div class="author-detail__element">
								<a href="<?=$element['DETAIL_PAGE_URL']?>" class="author-detail__link link_hover<?=($APPLICATION->GetCurPage() == $element['DETAIL_PAGE_URL']) ? ' active' : ''?>"><?=$element['NAME']?></a>
							</div>
						<?endforeach?>
					</div>
				</div>
				<div class="col-12 col-sm-4 col-lg-12">
					<?if ($arResult['UF_AUTHOR_LINK_VK'] || $arResult['UF_AUTHOR_LINK_TG']):?>
						<div class="author-detail__socseti-block mt-4 mt-sm-0 mt-lg-4">
							<p class="author-detail__socseti-text">Соцсети автора:</p>
							<?if ($arResult['UF_AUTHOR_LINK_VK']):?>
								<a href="<?=$arResult['UF_AUTHOR_LINK_VK']?>" class="me-2" target="_blank" rel="nofollow" itemprop="sameAs">
									<img src="<?=SITE_TEMPLATE_PATH?>/images/vkontakte.png" alt="<?=$arResult['AUTHOR_NAME']?><?=GetMessage('AUTHOR_VK');?>">
								</a>
							<?endif;?>
							<?if ($arResult['UF_AUTHOR_LINK_TG']):?>
								<a href="<?=$arResult['UF_AUTHOR_LINK_TG']?>" target="_blank" rel="nofollow" itemprop="sameAs">
									<img src="<?=SITE_TEMPLATE_PATH?>/images/telegram.png" alt="<?=$arResult['AUTHOR_NAME']?><?=GetMessage('AUTHOR_TG');?>">
								</a>
							<?endif;?>
						</div>
					<?endif;?>
				</div>
			</div>


		</div>
		<div class="col-12 col-sm-9 col-lg-4">
			<div class="text-center" itemprop="description">
				<?=$arResult['DETAIL_TEXT']?>
			</div>
			<meta itemprop="name" content="<?=$arResult['NAME']?>">
			<div class="elem-nav__block d-flex align-items-center <?=(!$arResult['NEXT_ELEM_LINK']) ? 'justify-content-end' : 'justify-content-between'?> mt-4 mt-md-5">
				<?if ($arResult['NEXT_ELEM_ID']):?>
					<p class="elem__next">
						<a href="<?=$arResult['NEXT_ELEM_LINK']?>" title="<?=$arResult['NEXT_ELEM_NAME']?>"><?=GetMessage('POETRY_NEXT');?></a>
					</p>
				<?endif;?>
				<?if ($arResult['PREV_ELEM_ID']):?>
					<p class="elem__prev">
						<a href="<?=$arResult['PREV_ELEM_LINK']?>" title="<?=$arResult['PREV_ELEM_NAME']?>"><?=GetMessage('POETRY_PREV');?></a>
					</p>
				<?endif;?>
			</div>
			<p class="poetry__ps mt-2 mt-lg-4 text-center"><?=GetMessage('POETRY_PS');?></p>
		</div>
	</div>	
</div>
