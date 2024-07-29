<?php
/**
 * Bitrix vars
 * @global CUserTypeManager $USER_FIELD_MANAGER
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $USER_FIELD_MANAGER;

$arUserFields = $USER_FIELD_MANAGER->GetUserFields("USER", 0, LANGUAGE_ID);
if (is_array($arUserFields) && !empty($arUserFields))
{
	foreach ($arUserFields as $FIELD_NAME => $arUserField)
	{
        if ($arUserField["MANDATORY"] != "Y" && $arUserField["FIELD_NAME"] != "UF_TYPE_PARTNER")
            continue;
		$arUserField["EDIT_FORM_LABEL"] = $arUserField["EDIT_FORM_LABEL"] <> '' ? $arUserField["EDIT_FORM_LABEL"] : $arUserField["FIELD_NAME"];
		$arUserField["EDIT_FORM_LABEL"] = htmlspecialcharsEx($arUserField["EDIT_FORM_LABEL"]);
		$arUserField["~EDIT_FORM_LABEL"] = $arUserField["EDIT_FORM_LABEL"];
		$arResult["USER_PROPERTIES"]["DATA"][$FIELD_NAME] = $arUserField;
	}
}
if (!empty($arResult["USER_PROPERTIES"]["DATA"]))
	$arResult["USER_PROPERTIES"]["SHOW"] = "Y";