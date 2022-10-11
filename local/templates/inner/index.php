<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");

    $APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"ads",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array("NAME","PREVIEW_PICTURE","PROPERTY_PRICE","PROPERTY_LOCATION","PROPERTY_TOTAL_AREA","PROPERTY_BEDS","PROPERTY_BATHROOMS","PROPERTY_GARAGES",),
		"IBLOCKS" => array("6"),
		"IBLOCK_TYPE" => "obyavleniya",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")
?>

