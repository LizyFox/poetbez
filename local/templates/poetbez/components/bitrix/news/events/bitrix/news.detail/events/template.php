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

<div class="event-detail__banner mb-3 mb-md-5">
	<picture class="w-100 h-100 d-inline-block" itemscope itemtype="https://schema.org/ImageObject">
		<source srcset="<?=makeWebp($arResult['PREVIEW_PICTURE']['SRC']);?>" media="(max-width: 575px)" />
		<img src="<?=makeWebp($arResult["DETAIL_PICTURE"]["SRC"]);?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT'];?>" class="w-100 h-100" itemprop="image" />
	</picture>
</div>
<div class="event-detail__block" itemscope itemtype="https://schema.org/Event">
	<link itemprop="url" href="<?=$APPLICATION->GetCurPage();?>">
	<meta itemprop="name" content="<?=$arResult['NAME'];?>">
	<meta itemprop="startDate" content="<?= (new \Bitrix\Main\Type\DateTime($arResult["ACTIVE_TO"]))->format('d.m.Y');?>">
	<div class="container-lg">
		<div class="row flex-column-reverse flex-md-row">
			<div class="col-12 col-md-7 col-lg-6 mb-4 mb-md-0">
				<div class="event-detail__text">
					<?if ($current_date >= (strtotime($arResult['ACTIVE_TO'])) && $arResult["DETAIL_TEXT"]):?>
						<?=$arResult["DETAIL_TEXT"]?>
					<?else:?>
						<?=$arResult["PREVIEW_TEXT"]?>
					<?endif;?>
				</div>
				<?if ($current_date <= $previous_date):?>
					<div class="event-detail__btn mt-4">
						<script type="text/javascript" src="https://cdn.qtickets.tech/openapi.js"></script>
						<a href="https://qtickets.ru/event/<?=$arResult["PROPERTIES"]["QTICKET_ID"]["VALUE"]?>" class="qtickets-button"><?=GetMessage('EVENT_BTN');?></a>
					</div>
				<?endif;?>
				<div class="event-detail__socseti mt-4">
					<p><?=GetMessage('SOCSETI');?></p>
					<?$APPLICATION->IncludeFile(
						SITE_DIR."/include/telegram.php",
						Array(),
						Array("MODE"=>"html")
					);?>
					<?$APPLICATION->IncludeFile(
						SITE_DIR."/include/vkontakte.php",
						Array(),
						Array("MODE"=>"html")
					);?>
				</div>
			</div>
			<div class="col-12 col-md-5 col-lg-6">
				<?if ($current_date <= (strtotime($arResult['ACTIVE_TO']))):?>
					<div class="event-detail__map">
						<?$APPLICATION->IncludeFile(
							SITE_DIR."/include/events-map.php",
							Array(),
							Array("MODE"=>"html")
						);?>
					</div>
				<?else:?>
					<div class="events__pechat mb-3 mb-md-0">
						<img style="w-100" src="<?=makeWebp(SITE_TEMPLATE_PATH.'/images/pechat-events.png')?>" alt="Мероприятие <?=$arResult["NAME"]?> прошло">
					</div>
				<?endif;?>
			</div>
		</div>
		<div class="row">
			<?if ($current_date <= (strtotime($arResult['ACTIVE_TO']))):?>
				<div class="col-12">
					<div class="event-detail__zapis mt-5">
						<p class="h2 text-center mb-1"><?=GetMessage('EVENT_ZAPIS_FORM');?></p>
						<p class="d-flex align-items-center justify-content-center text-center">
							<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 16 16"><defs><style>.cls-1{fill:var(--deep-red);fill-rule:evenodd;}</style></defs><path data-name="Rounded Rectangle 937" class="cls-1" d="M1338,932a8,8,0,1,1-8,8A8,8,0,0,1,1338,932Zm0,2a6,6,0,1,1-6,6A6,6,0,0,1,1338,934Zm0,5a1,1,0,0,1,1,1v3a1,1,0,0,1-2,0v-3A1,1,0,0,1,1338,939Zm0-3a1,1,0,1,1-1,1A1,1,0,0,1,1338,936Z" transform="translate(-1330 -932)"></path></svg>	
							<span class="mx-2"><?=GetMessage('EVENT_ZAPIS_USLOVIE');?></span>
							<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 16 16"><defs><style>.cls-1{fill:var(--deep-red);fill-rule:evenodd;}</style></defs><path data-name="Rounded Rectangle 937" class="cls-1" d="M1338,932a8,8,0,1,1-8,8A8,8,0,0,1,1338,932Zm0,2a6,6,0,1,1-6,6A6,6,0,0,1,1338,934Zm0,5a1,1,0,0,1,1,1v3a1,1,0,0,1-2,0v-3A1,1,0,0,1,1338,939Zm0-3a1,1,0,1,1-1,1A1,1,0,0,1,1338,936Z" transform="translate(-1330 -932)"></path></svg>	
						</p>
						<?if ($current_date <= $previous_date):?>
							<?/* форма ОС */?>
						<?else:?>
							<p class="event-detail__zapis-end h2 text-center mb-1"><?=GetMessage('EVENT_ZAPIS_END');?></p>
						<?endif;?>
					</div>
				</div>
			<?else:?>
				<?if (!empty($arResult["PROPERTIES"]["PHOTOS"]["VALUE"])):?>
					<div class="col-12 mt-3 mt-lg-5">
						<p class="h2 text-center"><?=GetMessage('EVENT_PHOTOS');?></p>
						<div class="event-detail__gallery" itemscope itemtype="https://schema.org/ImageObject">
							<?foreach($arResult["PROPERTIES"]["PHOTOS"]["VALUE"] as $key => $photo):?>
								<div class="event-detail__gallery-item h-100 w-100">
									<img src="<?=makeWebp(CFile::GetPath($photo))?>" alt="" class="w-100 h-100" loaded="lazy" data-fancybox="event-detail-slider-<?=$arResult['ID']?>" itemprop="image">
								</div>
							<?endforeach?>
						</div>
					</div>
				<?endif;?>
			<?endif;?>
		</div>
	</div>
</div>
