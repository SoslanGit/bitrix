<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><p>
	Контакты
</p>
<p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "standard.php"
	)
);?><br>
</p>
<p>
	<br>
</p>
<p>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>