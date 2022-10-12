<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");

$GLOBALS['newsFilter'] = array('ACTIVE' => 'Y', 'PROPERTY_DEAL_VALUE' => 'Yes');
$GLOBALS['newsLenta'] = array('ACTIVE' => 'Y', '!PROPERTY_DEAL_VALUE' => false);
global $APPLICATION;

?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"my_slider",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "1814400",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "my_slider",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_PICTURE",2=>"PRICE",3=>"",),
		"FILTER_NAME" => "newsFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "Obyavleniya",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
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
		"PROPERTY_CODE" => array(0=>"LOCATION",1=>"PRICE",2=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "TIMESTAMP_X",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/property_left.php"
	)
);?>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/property_middle.php"
	)
);?>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/property_right.php"
	)
);?>
			</div>
		</div>
	</div>
</div>
<div class="site-section site-section-sm bg-light">
	<div class="container">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"favor_lenta",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "1814400",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "favor_lenta",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_PICTURE",2=>"PROPERTY_PRICE",3=>"PROPERTY_LOCATION",4=>"PROPERTY_TOTAL_AREA",5=>"PROPERTY_BEDS",6=>"PROPERTY_BATHROOMS",7=>"PROPERTY_GARAGES",8=>"",),
		"IBLOCKS" => array(0=>"6",),
		"IBLOCK_TYPE" => "Obyavleniya",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
	</div>
</div>
<div class="site-section">
	<div class="container">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"services",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "1814400",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "services",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(0=>"NAME",1=>"PROPERTY_FLATICON",2=>"PROPERTY_ICONLINK",3=>"",),
		"IBLOCKS" => array(),
		"IBLOCK_TYPE" => "Services",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => ""
	)
);?>
	</div>
</div>
<div class="site-section bg-light">
	<div class="container">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"my_blog",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "1814400",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "my_blog",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"DATE_CREATE",4=>"",),
		"IBLOCKS" => array(0=>"5",),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
	</div>
</div>
<div class="site-section">
	<div class="container">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"agents",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "1814400",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "agents",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(0=>"ID",1=>"CODE",2=>"NAME",3=>"PREVIEW_TEXT",4=>"PREVIEW_PICTURE",5=>"DETAIL_TEXT",6=>"PROPERTY_LINK1",7=>"PROPERTY_LINK2",8=>"PROPERTY_LINK3",9=>"PROPERTY_ICON1",10=>"PROPERTY_ICON2",11=>"PROPERTY_ICON3",12=>"",),
		"IBLOCKS" => array(),
		"IBLOCK_TYPE" => "Agents",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => ""
	)
);?>
	</div>
</div>
<p>
</p>
<p>
</p>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>