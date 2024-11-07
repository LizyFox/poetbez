<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контактная информация - Поэтический БеЗпредел");
$APPLICATION->SetPageProperty("description", "Е@учий случай");
$APPLICATION->SetTitle("Контактная информация");
?>

<div class="container-lg">
    <h1 class="h1"><?$APPLICATION->ShowTitle(false)?></h1>
    <div class="row mb-5">
        <div class="col-12 col-md-7">
            <?$APPLICATION->IncludeFile(
                SITE_DIR."include/contacts-text.php",
                Array(),
                Array("MODE"=>"html")
            );?>
            <div class="contacts-feedback__block mt-4 mt-md-5 mb-4 mb-md-0 d-flex">
                <p class="button btn_red d-inline-block btn-coop btn_blick mb-0">Задать вопрос</p>

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
    <?$APPLICATION->IncludeComponent(
        "bitrix:catalog.section.list",
        "contacts-members",
        Array(
            "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
            "ADD_SECTIONS_CHAIN" => "N",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "N",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "COMPOSITE_FRAME_MODE" => "A",
            "COMPOSITE_FRAME_TYPE" => "AUTO",
            "COUNT_ELEMENTS" => "N",
            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
            "FILTER_NAME" => "sectionsFilter",
            "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
            "IBLOCK_ID" => "4",
            "IBLOCK_TYPE" => "members",
            "SECTION_CODE" => "",
            "SECTION_FIELDS" => array("", ""),
            "SECTION_ID" => "",
            "SECTION_URL" => "",
            "SECTION_USER_FIELDS" => array("UF_AUTHOR_CITY", "UF_AUTHOR_IS_ADMIN", "UF_AUTHOR_ANONS_TEXT", "UF_AUTHOR_LINK_VK", "UF_AUTHOR_NAME", "UF_AUTHOR_LAST_NAME"),
            "SHOW_PARENT_NAME" => "Y",
            "TOP_DEPTH" => "2",
            "VIEW_MODE" => "LINE"
        )
    );?>
    <?/*<div class="col-12 col-sm-7 col-md-7 col-xl-5 pt-0 pt-md-5 mt-0 mt-md-5 mx-auto">
        <?$APPLICATION->IncludeFile(
            SITE_DIR."include/contacts-donat.php",
            Array(),
            Array("MODE"=>"html")
        );?>
    </div>*/?>
</div>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Поэтический БеЗпредел",
  "url": "https://poet-bezpredel.ru/", 
  "contactPoint": {
    "@type": "ContactPoint",
    "contactType": "По любым вопросам",
    "email": "info@example.com"
  },
  "sameAs": [
    "https://t.me/poet_bezpredel",
    "https://vk.com/tula_bezpredel"
  ]
}
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>