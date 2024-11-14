<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Мероприятия - Поэтический БеЗпредел");
$APPLICATION->SetPageProperty("description", "Е@учий случай");
$APPLICATION->SetTitle("Мероприятия");
?>

<div class="container-lg">
    <h1 class="h1"><?$APPLICATION->ShowTitle(false)?></h1>
</div>

<?$APPLICATION->IncludeComponent("bitrix:news","events",Array(
    "DISPLAY_DATE" => "Y",
    "DISPLAY_PICTURE" => "Y",
    "DISPLAY_PREVIEW_TEXT" => "N",
    "SEF_MODE" => "Y",
    "AJAX_MODE" => "Y",
    "IBLOCK_TYPE" => "events",
    "IBLOCK_ID" => "6",
    "NEWS_COUNT" => "20",
    "USE_SEARCH" => "N",
    "USE_RSS" => "N",
    "USE_RATING" => "N",
    "USE_CATEGORIES" => "N",
    "USE_REVIEW" => "N",
    "USE_FILTER" => "N",
    "SORT_BY1" => "ID",
    "SORT_ORDER1" => "DESC",
    "SORT_BY2" => "SORT",
    "SORT_ORDER2" => "ASC",
    "CHECK_DATES" => "Y",
    "PREVIEW_TRUNCATE_LEN" => "",
    "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
    "LIST_FIELD_CODE" => Array(),
    "LIST_PROPERTY_CODE" => Array(),
    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
    "DISPLAY_NAME" => "Y",
    "META_KEYWORDS" => "-",
    "META_DESCRIPTION" => "-",
    "BROWSER_TITLE" => "-",
    "DETAIL_SET_CANONICAL_URL" => "N",
    "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
    "DETAIL_FIELD_CODE" => Array("PHOTOS", "QTICKET_ID"),
    "DETAIL_PROPERTY_CODE" => Array(),
    "DETAIL_DISPLAY_TOP_PAGER" => "N",
    "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
    "DETAIL_PAGER_TITLE" => "Страница",
    "DETAIL_PAGER_TEMPLATE" => "",
    "DETAIL_PAGER_SHOW_ALL" => "N",
    "STRICT_SECTION_CHECK" => "N",
    "SET_TITLE" => "N",
    "ADD_SECTIONS_CHAIN" => "Y",
    "ADD_ELEMENT_CHAIN" => "N",
    "SET_LAST_MODIFIED" => "N",
    "PAGER_BASE_LINK_ENABLE" => "Y",
    "SET_STATUS_404" => "Y",
    "SHOW_404" => "Y",
    "MESSAGE_404" => "",
    "PAGER_BASE_LINK" => "",
    "PAGER_PARAMS_NAME" => "arrPager",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "USE_PERMISSIONS" => "Y",
    "GROUP_PERMISSIONS" => Array("1"),
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "3600",
    "CACHE_FILTER" => "Y",
    "CACHE_GROUPS" => "Y",
    "DISPLAY_TOP_PAGER" => "N",
    "DISPLAY_BOTTOM_PAGER" => "Y",
    "PAGER_TITLE" => "Новости",
    "PAGER_SHOW_ALWAYS" => "N",
    "PAGER_TEMPLATE" => "",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "Y",
    "FILTER_NAME" => "",
    "FILTER_FIELD_CODE" => Array(),
    "FILTER_PROPERTY_CODE" => Array(),
    "NUM_NEWS" => "20",
    "NUM_DAYS" => "30",
    "YANDEX" => "Y",
    "MAX_VOTE" => "5",
    "VOTE_NAMES" => Array("0", "1", "2", "3", "4"),
    "CATEGORY_IBLOCK" => Array(),
    "CATEGORY_CODE" => "CATEGORY",
    "CATEGORY_ITEMS_COUNT" => "5",
    "MESSAGES_PER_PAGE" => "10",
    "USE_CAPTCHA" => "N",
    "REVIEW_AJAX_POST" => "N",
    "PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
    "FORUM_ID" => "1",
    "URL_TEMPLATES_READ" => "",
    "SHOW_LINK_TO_FORUM" => "N",
    "POST_FIRST_MESSAGE" => "Y",
    "SEF_FOLDER" => "/events/",
    "SEF_URL_TEMPLATES" => Array(
        "detail" => "#ELEMENT_CODE#/",
        "news" => "",
        "section" => "#SECTION_CODE_PATH#/",
    ),
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "AJAX_OPTION_HISTORY" => "N",
    "VARIABLE_ALIASES" => Array(
        "detail" => Array(),
        "news" => Array(),
        "section" => Array(),
    ),
    "USE_SHARE" => "N",
    "SHARE_HIDE" => "Y",
    "SHARE_TEMPLATE" => "",
    "SHARE_HANDLERS" => array("delicious", "lj", "twitter"),
    "SHARE_SHORTEN_URL_LOGIN" => "",
    "SHARE_SHORTEN_URL_KEY" => "",
    )
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>