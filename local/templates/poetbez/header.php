<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="apple-touch-icon" sizes="57x57" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?=SITE_TEMPLATE_PATH?>/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?=SITE_TEMPLATE_PATH?>/favicon/manifest.json">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
	<?/*<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/libs/owlcarousel/dist/assets/owl.carousel.min.css");?>*/?>
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/styles.css" />

	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
	<?/*<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/libs/owlcarousel/dist/owl.carousel.min.js");?>*/?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/script.js");?>

	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>

	<header itemscope itemtype="http://schema.org/WPHeader">
		<meta itemprop="headline" content="<?$APPLICATION->ShowTitle()?>"> 
		<meta itemprop="description" content="<?$APPLICATION->ShowProperty("description")?>">

		<div class="container">
			<div class="row">
				<div class="col-3">
					<div class="logo__block">
						<?if ($APPLICATION->GetCurPage() != '/'):?>
							<a href="/">
								<img class="logo__img" src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="Логотип ПБ">
							</a>
						<?else:?>
							<img class="logo__img" src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="Логотип ПБ">
						<?endif;?>
					</div>
				</div>
				<div class="col-6">
					<div class="top-menu__block h-100">
						<?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
							"ROOT_MENU_TYPE" => "top",
							"MENU_CACHE_TYPE" => "Y",
							"MENU_CACHE_TIME" => "36000000",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => "1",
							"CHILD_MENU_TYPE" => "left",
							"USE_EXT" => "N",
							"ALLOW_MULTI_SELECT" => "N"
							),
							false
						);?>
					</div>
				</div>
				<div class="col-3">
					<p class="ask__btn h-100 d-flex align-items-center justify-content-end"><?=GetMessage("HEADER_ASK")?></p>
				</div>
			</div>
		</div>
	</header>












<?/*

		<div id="page-wrapper">
		
	
			<div id="header">
				<table>
					<tr>
						<td id="logo"><a href="<?=SITE_DIR?>" title="<?=GetMessage("HDR_GOTO_MAIN")?>"><?$APPLICATION->IncludeFile(
									SITE_DIR."include/company_name.php",
									Array(),
									Array("MODE"=>"html")
								);?></a></td>
						<td id="slogan"><?$APPLICATION->IncludeFile(
									SITE_DIR."include/company_slogan.php",
									Array(),
									Array("MODE"=>"html")
								);?></td>
					</tr>
				</table>
			</div>
				
		
			<div id="content-wrapper">
				<div id="content">
				<?if($APPLICATION->GetCurPage(false)==SITE_DIR):?>
					<div id="banner">
						<div id="banner-image"><?$APPLICATION->IncludeFile(
									SITE_DIR."include/banner.php",
									Array(),
									Array("MODE"=>"html")
								);?></div>
						<table cellspacing="0" id="banner-text">
							<tr>
								<td width="35%">&nbsp;</td>
								<td>
								<?$APPLICATION->IncludeFile(
									SITE_DIR."include/banner_text.php",
									Array(),
									Array("MODE"=>"text")
								);?>
								</td>
							</tr>
						</table>
						<div id="banner-overlay"></div>
					</div>
				<?else:?>
					<div id="breadcrumb">
						<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", array(
							"START_FROM" => "1",
							"PATH" => "",
							"SITE_ID" => SITE_ID
							),
							false
						);?>
					</div>					
				<?endif?>					
					<div id="workarea-wrapper">
						<div id="left-menu">
						<?$APPLICATION->IncludeComponent("bitrix:menu", "tree", array(
							"ROOT_MENU_TYPE" => "leftfirst",
							"MENU_CACHE_TYPE" => "Y",
							"MENU_CACHE_TIME" => "36000000",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => "4",
							"CHILD_MENU_TYPE" => "left",
							"USE_EXT" => "N",
							"ALLOW_MULTI_SELECT" => "N"
							),
							false
						);?>
						</div>						
						<div id="workarea">
							<div id="workarea-inner">
							<h5><?$APPLICATION->ShowTitle(false);?></h5> 
*/?>
