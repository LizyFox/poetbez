<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поэтический БеЗпредел");
$APPLICATION->SetPageProperty("description", "Е@учий случай");
$APPLICATION->SetPageProperty("h1", "Культурное мероприятие нашего города");
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main-banner",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("DETAIL_PICTURE", "ACTIVE_TO"),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "banner_main",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("LINK_BTN", "LINK_BANNER", "TEXT_BTN", "COLOR_BTN", "BG_BUTTON", ""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>

<div class="container-lg">
    <h1 class="h1 main__h1"><?$APPLICATION->ShowProperty('h1')?></h1>

    <div class="main-info__block">
        <div class="row">
            <div class="col-12 col-lg-7 order-4 order-lg-0 mb-0 mb-lg-5">
				<?$APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"main-slider",
					Array(
						"ACTIVE_DATE_FORMAT" => "d.m.Y",
						"ADD_SECTIONS_CHAIN" => "N",
						"AJAX_MODE" => "N",
						"AJAX_OPTION_ADDITIONAL" => "",
						"AJAX_OPTION_HISTORY" => "N",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "Y",
						"CACHE_FILTER" => "N",
						"CACHE_GROUPS" => "Y",
						"CACHE_TIME" => "36000000",
						"CACHE_TYPE" => "A",
						"CHECK_DATES" => "N",
						"DETAIL_URL" => "",
						"DISPLAY_BOTTOM_PAGER" => "Y",
						"DISPLAY_DATE" => "N",
						"DISPLAY_NAME" => "Y",
						"DISPLAY_PICTURE" => "Y",
						"DISPLAY_PREVIEW_TEXT" => "Y",
						"DISPLAY_TOP_PAGER" => "N",
						"FIELD_CODE" => array(""),
						"FILTER_NAME" => "",
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",
						"IBLOCK_ID" => "11",
						"IBLOCK_TYPE" => "sliders_main",
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
						"INCLUDE_SUBSECTIONS" => "N",
						"MESSAGE_404" => "",
						"NEWS_COUNT" => "20",
						"PAGER_BASE_LINK_ENABLE" => "N",
						"PAGER_DESC_NUMBERING" => "N",
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
						"PAGER_SHOW_ALL" => "N",
						"PAGER_SHOW_ALWAYS" => "N",
						"PAGER_TEMPLATE" => ".default",
						"PAGER_TITLE" => "Новости",
						"PARENT_SECTION" => "",
						"PARENT_SECTION_CODE" => "",
						"PREVIEW_TRUNCATE_LEN" => "",
						"PROPERTY_CODE" => array("PHOTOS", "PHOTOS_ADAPTIVE"),
						"SET_BROWSER_TITLE" => "N",
						"SET_LAST_MODIFIED" => "N",
						"SET_META_DESCRIPTION" => "N",
						"SET_META_KEYWORDS" => "N",
						"SET_STATUS_404" => "N",
						"SET_TITLE" => "N",
						"SHOW_404" => "N",
						"SORT_BY1" => "ACTIVE_FROM",
						"SORT_BY2" => "SORT",
						"SORT_ORDER1" => "DESC",
						"SORT_ORDER2" => "ASC",
						"STRICT_SECTION_CHECK" => "N"
					)
				);?>
            </div>
            <div class="col-12 col-lg-5 mb-4">
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/main-top-right-text.php",
                    Array(),
                    Array("MODE"=>"html")
                );?>
            </div>
            <div class="col-12 col-lg-5 mb-4 mb-lg-0">
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/main-bottom-left-text.php",
                    Array(),
                    Array("MODE"=>"html")
                );?>
            </div>
            <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/main-bottom-right-text.php",
                    Array(),
                    Array("MODE"=>"html")
                );?>
            </div>
        </div>
    </div>
</div>
<div class="main-text__agents-block py-5">
	<div class="container-lg">
		<div class="row">
			<div class="col-12 col-md-9 col-lg-6 mx-auto">
				<?$APPLICATION->IncludeFile(
					SITE_DIR."include/main-agents.php",
					Array(),
					Array("MODE"=>"html")
				);?>
				<div class="text-center mt-4">
					<a href="/authors/" class="button btn_red d-inline-block btn_blick"><?=GetMessage("MAIN_AGENT_LINK_TEXT")?></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="main-agents__block">
	<div class="container-lg">
		<h2 class="h1">
			<a href="/authors/"><?=GetMessage("MAIN_H2_AUTHORS")?></a>
		</h2>

	</div>
</div>
<div class="main-merch__block">
	<div class="container-lg">
		<h2 class="h1">
			<a href="/merch/"><?=GetMessage("MAIN_H2_MERCH")?></a>
		</h2>

	</div>
</div>
<div class="main-news__block">
	<div class="container-lg">
		<h2 class="h1">
			<a href="/news/"><?=GetMessage("MAIN_H2_NEWS")?></a>
		</h2>
		
	</div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>