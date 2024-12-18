<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
?>

<div class="container-lg">
	<div class="error-page__block text-center">
		<div class="row mb-4">
			<div class="col-12">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/404.png" alt="404">
			</div>
		</div>
		<p>
			А такой страницы-то и нет
		</p>
		<p>
			Зато есть <a href="/" class="text-decoration-underline">Главная страница</a>
		</p>
		<img class="error__gif" src="<?=SITE_TEMPLATE_PATH?>/images/savkin-gif.gif" alt="404">
	</div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>