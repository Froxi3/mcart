<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Страница авторизации");?><p>
	<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"homeAuth",
	Array(
		"FORGOT_PASSWORD_URL" => "/login/",
		"PROFILE_URL" => "/",
		"REGISTER_URL" => "/login/registration.php",
		"SHOW_ERRORS" => "Y"
	)
);?><br>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>