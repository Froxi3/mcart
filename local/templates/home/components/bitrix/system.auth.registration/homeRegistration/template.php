<?php
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2024 Bitrix
 */

use Bitrix\Main\Web\Json;

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="site-section">
    <div class="container">
        <div class="row">
    		<div class="col-md-12 col-lg-8 mb-5">
				<form method="post" action="<?=$arResult["AUTH_URL"]?>" name="bform" enctype="multipart/form-data" 
					class="p-5 bg-white border">
					<input type="hidden" name="AUTH_FORM" value="Y" />
					<input type="hidden" name="TYPE" value="REGISTRATION" />

					<h2><?=GetMessage("AUTH_REGISTER")?></h2>

					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="USER_NAME"><?=GetMessage("AUTH_NAME")?></label>
							<input type="text" name="USER_NAME" maxlength="50" value="<?=$arResult["USER_NAME"]?>" class="form-control" />
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="USER_LAST_NAME"><?=GetMessage("AUTH_LAST_NAME")?></label>
							<input type="text" name="USER_LAST_NAME" maxlength="50" value="<?=$arResult["USER_LAST_NAME"]?>" class="form-control" />
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="USER_LOGIN">
								<span class="starrequired">*</span>
								<?=GetMessage("AUTH_LOGIN_MIN")?>
							</label>
							<input type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["USER_LOGIN"]?>" class="form-control" />
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="USER_EMAIL">
								<span class="starrequired">*</span>
								<?=GetMessage("AUTH_EMAIL")?>
							</label>
							<input type="text" name="USER_EMAIL" maxlength="50" value="<?=$arResult["USER_EMAIL"]?>" class="form-control" />
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="USER_LAST_NAME">
								<span class="starrequired">*</span>
								<?=GetMessage("AUTH_PASSWORD_REQ")?>
							</label>
							<input type="password" name="USER_PASSWORD" maxlength="255" 
								value="<?=$arResult["USER_PASSWORD"]?>" class="form-control" autocomplete="off"/>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="USER_LAST_NAME">
								<span class="starrequired">*</span>
								<?=GetMessage("AUTH_CONFIRM")?>
							</label>
							<input type="password" name="USER_CONFIRM_PASSWORD" maxlength="255" 
								value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>" class="form-control" autocomplete="off"/>
						</div>
					</div>

		<?// ********************* User properties ***************************************************?>
			<?if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"):?>
				<?foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField):?>
					<div class="row form-group">
						<div class="col-md-12">
							<label class="font-weight-bold" for="message">
								<?if ($arUserField["MANDATORY"]=="Y"):?><span class="starrequired">*</span><?endif;?>
									<?=$arUserField["EDIT_FORM_LABEL"]?>:
							</label>
								<?$APPLICATION->IncludeComponent(
									"bitrix:system.field.edit",
									$arUserField["USER_TYPE"]["USER_TYPE_ID"],
									array("bVarsFromForm" => $arResult["bVarsFromForm"], 
										"arUserField" => $arUserField, "form_name" => "bform"), null, array("HIDE_ICONS"=>"Y"));?>
						</div>
					</div>
				<?endforeach;?>
			<?endif;?>
		<?// ******************** /User properties ***************************************************

				/* CAPTCHA */
				if ($arResult["USE_CAPTCHA"] == "Y")
				{
					?>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="captcha_sid"><?=GetMessage("CAPTCHA_REGF_TITLE")?></label>
							
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<input type="hidden" name="captcha_sid" class="form-control" 
								value="<?=$arResult["CAPTCHA_CODE"]?>" class="form-control"/>
							<label class="font-weight-bold" for="captcha_word">
								<span class="starrequired">*</span>
								<?=GetMessage("CAPTCHA_REGF_PROMT")?>
							</label>
							<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" 
								width="180" height="40" alt="CAPTCHA" />
							<input type="text" name="captcha_word" class="form-control" maxlength="50" value="" autocomplete="off" />
						</div>
					</div>

					<?
				}
				/* CAPTCHA */
				?>
					<div class="row form-group">
						<div class="col-md-12">
							<input type="submit" name="Register" value="<?=GetMessage("AUTH_REGISTER")?>" class="btn btn-primary  py-2 px-4 rounded-0">
						</div>
					</div>
				</form>
				<p><?echo $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?></p>
			</div>
		</div>
	</div>
</div>