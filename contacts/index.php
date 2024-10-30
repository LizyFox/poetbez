<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контактная информация");
$APPLICATION->SetPageProperty("description", "Е@учий случай");
$APPLICATION->SetPageProperty("h1", "Контактная информация");
?>

<div class="container-lg">
    <h1 class="h1"><?$APPLICATION->ShowProperty('h1')?></h1>
    <div class="row">
        <div class="col-12 col-md-7">
            <?$APPLICATION->IncludeFile(
                SITE_DIR."include/contacts-text.php",
                Array(),
                Array("MODE"=>"html")
            );?>
            <div class="contacts-feedback__block mt-4 mt-md-5 mb-4 mb-md-0 d-flex">
                <p class="button btn_red d-inline-block btn-coop btn_blick mb-0">Сотрудничество</p>

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
        <div class="col-12 col-md-5">
            <?$APPLICATION->IncludeFile(
                SITE_DIR."include/contacts-map.php",
                Array(),
                Array("MODE"=>"html")
            );?>
        </div>
    </div>
    <h2 class="h1">Наши организаторы</h2>

    <div class="col-12 col-md-5">
        <?$APPLICATION->IncludeFile(
            SITE_DIR."include/contacts-donat.php",
            Array(),
            Array("MODE"=>"html")
        );?>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>