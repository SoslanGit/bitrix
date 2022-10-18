<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вход на сайт");
?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"auth",
	Array(
		"FORGOT_PASSWORD_URL" => "/auth/forget.php",
		"PROFILE_URL" => "/auth/profile.php",
		"REGISTER_URL" => "/auth/registration.php",
		"SHOW_ERRORS" => "Y"
	)
);?>
<? if ($USER->IsAuthorized()) : ?>
	<div class="container-fluid">
	<p>Вы успешно авторизованный</p>
		<p><a href="<?=SITE_DIR?>">Вернуться на главную страницу</a></p>
	</div>
		

<? endif ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>