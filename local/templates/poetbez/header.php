<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/colors.css" />
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/fonts.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<?/*<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/libs/owlcarousel/dist/assets/owl.carousel.min.css");?>*/?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">

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
		<div id="page-wrapper">
		
			<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	
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

				
				<div id="search">
				<?$APPLICATION->IncludeComponent("bitrix:search.form", "flat", array(
					"PAGE" => "#SITE_DIR#search/index.php"
					),
					false
				);?>
				</div>
			</div>

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

