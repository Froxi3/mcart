<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (is_string($_REQUEST["backurl"]) && mb_strpos($_REQUEST["backurl"], "/") === 0)
{
	LocalRedirect("/");
}

$APPLICATION->SetTitle("Вход на сайт");
?>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>