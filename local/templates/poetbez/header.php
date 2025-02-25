<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta property="og:locale" content="ru_RU" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="<?=$_SERVER['SERVER_NAME']?>" />
	<meta property="og:image" content="https://<?=$_SERVER['SERVER_NAME']?><?=SITE_TEMPLATE_PATH?>/favicon/android-icon-192x192.png" />
	<meta property="og:url" content="https://<?=$_SERVER['SERVER_NAME']?><?=$APPLICATION->GetCurPage();?>" />
	<meta property="og:title" content="<?$APPLICATION->ShowTitle();?>" />
	<meta property="og:description" content="<?$APPLICATION->ShowProperty('description');?>" />
	

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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/styles.css" />

	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="https://smartcaptcha.yandexcloud.net/captcha.js?render=onload&onload=onloadFunction" defer></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/script.js");?>

	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
	<div class="wrapper">
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>

		<header itemscope itemtype="http://schema.org/WPHeader">
			<meta itemprop="headline" content="<?$APPLICATION->ShowTitle()?>"> 
			<meta itemprop="description" content="<?$APPLICATION->ShowProperty("description")?>">

			<div class="header__block">
				<div class="container-lg">
					<div class="row">
						<div class="col-6 col-md-1 col-lg-2">
							<div class="logo__block w-100 h-100">
								<?$APPLICATION->IncludeFile(
									SITE_DIR."include/logo.php",
									Array(),
									Array("MODE"=>"html")
								);?>
							</div>
						</div>
						<div class="col-6 col-md-8 col-lg-7 order-3 order-md-2 d-flex d-md-block align-items-center justify-content-end">
							<div class="d-md-none">
								<div class="container-fluid justify-content-end">
									<button data-mdb-button-init class="navbar-toggler toggler-button" type="button" data-mdb-collapse-init data-mdb-target="#navbarToggleExternalContent10" aria-controls="navbarToggleExternalContent10" aria-expanded="false" aria-label="Toggle navigation">
										<div class="animated-icon"><span></span><span></span><span></span><span></span></div>
									</button>
								</div>
							</div>
							<div class="top-menu__block d-md-block">
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
						<div class="col-3 order-2 order-md-3 d-none d-md-flex align-items-center justify-content-end">
							<p class="button ask__btn mb-0" data-bs-toggle="modal" data-bs-target="#ask-form" data-bs-whatever="ask-form"><?=GetMessage("HEADER_ASK")?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="overhead"></div>
			<?if ($APPLICATION->GetCurPage(false) != "/"):?>
				<div class="breadcrumb__block">
					<div class="container-lg">
						<div class="row">
							<div class="col-12">
									<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", array(
										"START_FROM" => "1",
										"PATH" => "",
										"SITE_ID" => SITE_ID
										),
										false
									);?>
							</div>
						</div>
					</div>
				</div>
			<?endif;?>
		</header>
		<main>


		<?/*
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
		*/?>
