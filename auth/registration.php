<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("регистрация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.register",
	"register",
	Array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => array(),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array(),
		"SUCCESS_PAGE" => "",
		"USER_PROPERTY" => array("UF_PRODA"),
		"USER_PROPERTY_NAME" => "UF_PRODA",
		"USE_BACKURL" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>