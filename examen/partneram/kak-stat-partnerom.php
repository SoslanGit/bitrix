<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "стать партнером, лидер отрасли");
$APPLICATION->SetPageProperty("description", "Партнерам. Как стать партнером лидера отрасли");
$APPLICATION->SetTitle(" Как стать партнером");
?><?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"templates",
	Array(
		"PATH" => "",
		"SITE_ID" => "s2",
		"START_FROM" => "0"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>