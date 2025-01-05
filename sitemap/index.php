<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Карта сайта - Поэтический БеЗпредел");
$APPLICATION->SetPageProperty("description", "Е@учий случай");
$APPLICATION->SetTitle("Карта сайта");
?>

<div class="container-lg">
    <h1 class="h1"><?$APPLICATION->ShowTitle(false)?></h1>

    <?$APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
        "LEVEL"	=>	"3",
        "COL_NUM"	=>	"2",
        "SHOW_DESCRIPTION"	=>	"N",
        "SET_TITLE"	=>	"Y",
        "CACHE_TIME"	=>	"36000000"
        )
    );?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>