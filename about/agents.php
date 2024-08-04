<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Агенты");
?>
<div class="site-section site-section-sm bg-light">
	<?$APPLICATION->IncludeComponent(
		"dpoyarkov:agents.list",
		"",
		Array(
			"AGENTS_COUNT" => "2",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"HLBLOCK_TNAME" => "realtors"
		)
	);?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>