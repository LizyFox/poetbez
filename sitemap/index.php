<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Карта сайта");
?>

<div class="container-lg">
    <?$APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
        "LEVEL"	=>	"3",
        "COL_NUM"	=>	"2",
        "SHOW_DESCRIPTION"	=>	"Y",
        "SET_TITLE"	=>	"Y",
        "CACHE_TIME"	=>	"36000000"
        )
    );?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>