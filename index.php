<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Поэтический БеЗпредел - Культурное мероприятие нашего города");
$APPLICATION->SetPageProperty("description", "Е@учий случай");
$APPLICATION->SetTitle("Культурное мероприятие нашего города");
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
    <h1 class="h1 main__h1"><?$APPLICATION->ShowTitle(false)?></h1>

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
<div class="main-agents__block mb-5 pb-3">
	<div class="container-lg">
		<h2 class="h2">
			<a href="/authors/" class="h2"><?=GetMessage("MAIN_H2_AUTHORS")?></a>
		</h2>
		<?$APPLICATION->IncludeComponent(
			"bitrix:catalog.section.list",
			"main-author",
			Array(
				"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
				"ADD_SECTIONS_CHAIN" => "N",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "N",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "N",
				"COUNT_ELEMENTS" => "N",
				"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
				"FILTER_NAME" => "",
				"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
				"IBLOCK_ID" => "4",
				"IBLOCK_TYPE" => "members",
				"SECTION_CODE" => "",
				"SECTION_FIELDS" => array("", ""),
				"SECTION_ID" => "",
				"SECTION_URL" => "",
				"SECTION_USER_FIELDS" => array("UF_AUTHOR_ANONS_TEXT"),
				"SHOW_PARENT_NAME" => "Y",
				"TOP_DEPTH" => "1",
				"VIEW_MODE" => "LINE"
			)
		);?>
	</div>
</div>
<?/*<div class="main-merch__block mb-5 pb-3">
	<div class="container-lg">
		<h2 class="h2">
			<a href="/merch/" class="h2"><?=GetMessage("MAIN_H2_MERCH")?></a>
		</h2>

	</div>
</div>*/?>
<div class="main-news__block">
	<div class="container-lg">
		<h2 class="h2">
			<a href="/news/" class="h2"><?=GetMessage("MAIN_H2_NEWS")?></a>
		</h2>
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"main-news",
			Array(
				"ACTIVE_DATE_FORMAT" => "j M Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "N",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"COMPOSITE_FRAME_MODE" => "A",
				"COMPOSITE_FRAME_TYPE" => "AUTO",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array("", ""),
				"FILTER_NAME" => "",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "10",
				"IBLOCK_TYPE" => "news",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "Y",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "4",
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
				"PROPERTY_CODE" => array("", ""),
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
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>