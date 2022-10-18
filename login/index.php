<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вход на сайт");
?><p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"auth",
	Array(
		"FORGOT_PASSWORD_URL" => "/auth/forget.php",
		"PROFILE_URL" => "/auth/profile.php",
		"REGISTER_URL" => "/auth/registration.php",
		"SHOW_ERRORS" => "Y"
	)
);?><br>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>