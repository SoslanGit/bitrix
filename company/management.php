<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Руководство");
?><p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "standard.php"
	)
);?><br>
 <br>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>