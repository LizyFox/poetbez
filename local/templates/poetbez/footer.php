<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

			<div class="under-footer_bg">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/underfooter__city-star.png" alt="DoomerTown">
				<div class="under-footer_stars"></div>
			</div>
		</main>
		<footer itemscope itemtype="http://schema.org/WPFooter">
			<div class="container-lg">
				<div class="row">
					<div class="col-12 col-sm-1 order-1">
						<div class="logo__block w-100 h-100 text-center text-sm-start mb-3 mb-sm-0">
							<?$APPLICATION->IncludeFile(
								SITE_DIR."include/logo.php",
								Array(),
								Array("MODE"=>"html")
							);?>
						</div>
					</div>
					<div class="col-12 col-sm-4 col-md-3 col-xl-2 order-4 order-sm-2">
						<div class="socseti__block text-center text-sm-start mt-2 mt-sm-0">
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
					</div>
					<div class="col-12 col-sm-4 col-md-3 col-xl-2 order-2 order-sm-3">
						<div class="bottom-menu__block">
							<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
								"ROOT_MENU_TYPE" => "bottom1",
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
					<div class="col-12 col-sm-2 order-3 order-sm-4">
						<div class="bottom-menu__block">
							<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
								"ROOT_MENU_TYPE" => "bottom2",
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
				</div>
				<div class="row">
					<div class="col-12">
						<div class="footer__bottom-block text-center">
							<div class="text-center">
								<a href="/privacy/" class="policy__link">Политика конфиденциальности</a>
								<?$APPLICATION->IncludeFile(
									SITE_DIR."include/copyright.php",
									Array(),
									Array("MODE"=>"html")
								);?>
							</div>	
							<a href="/sitemap/" class="sitemap__link">Карта сайта</a>
						</div>
					</div>
				</div>
			</div>
			<div class="all-forms">
				<?$APPLICATION->IncludeFile(
					SITE_DIR."include/forms.php",
					Array(),
					Array("MODE"=>"html")
				);?>
			</div>
		</footer>
	</div>
</body>
</html>