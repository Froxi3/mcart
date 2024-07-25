<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8 mb-5">
				<?$APPLICATION->IncludeComponent(
					"dpoyarkov:main.feedback",
					"",
					Array(
						"EMAIL_TO" => "poyarkov295@yandex.ru",
						"EVENT_MESSAGE_ID" => array("33"),
						"OK_TEXT" => "Спасибо, ваше сообщение принято.",
						"REQUIRED_FIELDS" => array(""),
						"USE_CAPTCHA" => "N"
					)
				);?>
          	</div>

			<div class="col-lg-4">
				<div class="p-4 mb-3 bg-white">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "",
							"EDIT_TEMPLATE" => "",
							"PATH" => SITE_DIR . "/include/home/contacts/info.php"
						)
					);?>
				</div>
			</div>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>