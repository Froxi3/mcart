<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>
<?
// echo "<pre>", print_r($arResult), "</pre>";
?>


<div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8 mb-5">

			<?if($arResult["FORM_TYPE"] == "login"):?>
			
				<?
				if ($arResult['SHOW_ERRORS'] === 'Y' && $arResult['ERROR'] && !empty($arResult['ERROR_MESSAGE']))
				{
					ShowMessage($arResult['ERROR_MESSAGE']);
				}
				?>
					<form name="system_auth_form<?=$arResult["RND"]?>" method="post" 
						target="_top" action="<?=$arResult["AUTH_URL"]?>" class="p-5 bg-white border">

					<?if($arResult["BACKURL"] <> ''):?>
						<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
					<?endif?>

					<?foreach ($arResult["POST"] as $key => $value):?>
						<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
					<?endforeach?>

						<input type="hidden" name="AUTH_FORM" value="Y" />
						<input type="hidden" name="TYPE" value="AUTH" />
						<div class="row form-group">
							<div class="col-md-12 mb-3 mb-md-0">
								<label class="font-weight-bold" for="USER_LOGIN"><?=GetMessage("AUTH_LOGIN")?>:</label>
								<input type="text" name="USER_LOGIN"  maxlength="50" value="" size="17" class="form-control" 
									placeholder="<?=GetMessage("AUTH_LOGIN")?>">
								<script>
									BX.ready(function() {
										var loginCookie = BX.getCookie("<?=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>");
										if (loginCookie)
										{
											var form = document.forms["system_auth_form<?=$arResult["RND"]?>"];
											var loginInput = form.elements["USER_LOGIN"];
											loginInput.value = loginCookie;
										}
									});
								</script>
							</div>
						</div>	
						<div class="row form-group">
							<div class="col-md-12 mb-3 mb-md-0">
								<label class="font-weight-bold" for="USER_PASSWORD"><?=GetMessage("AUTH_PASSWORD")?>:</label>
								<input type="password" name="USER_PASSWORD" class="form-control" maxlength="255" size="17" autocomplete="off" 
									placeholder="<?=GetMessage("AUTH_PASSWORD")?>">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12 mb-3 mb-md-0">
								<input type="checkbox" id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" />
								<label for="USER_REMEMBER_frm" class="font-weight-bold" 
									title="<?=GetMessage("AUTH_REMEMBER_ME")?>"><?echo GetMessage("AUTH_REMEMBER_SHORT")?></label>
							</div>
						</div>

					<?if ($arResult["CAPTCHA_CODE"]):?>
						<div class="row form-group">
							<div class="col-md-12 mb-3 mb-md-0">
								<label class="font-weight-bold" for="captcha_word"><?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:</label>
								<input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
								<img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
								<input type="text" name="captcha_word" class="form-control" placeholder="<?echo GetMessage("AUTH_CAPTCHA_PROMT")?>" 
									maxlength="50" value=""/></td>
							</div>
						</div>
					<?endif?>

						<div class="row form-group">
							<div class="col-md-12">
								<input type="submit"name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" class="btn btn-primary  py-2 px-4 rounded-0">
							</div>
						</div>

					<?if($arResult["NEW_USER_REGISTRATION"] == "Y"):?>
						<div class="row form-group">
							<div class="col-md-12">
								<a href="<?=$arResult["AUTH_REGISTER_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_REGISTER")?></a>
							</div>
						</div>
					<?endif?>
						<div class="row form-group">
							<div class="col-md-12">
								<a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a>
							</div>
						</div>
				</form>


				<?
				else:
				?>

				<form action="<?=$arResult["AUTH_URL"]?>" class="p-5 bg-white border">
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<p><?=$arResult["USER_NAME"]?></p>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<p>[<?=$arResult["USER_LOGIN"]?>]</p>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<a href="<?=$arResult["PROFILE_URL"]?>" title="<?=GetMessage("auth_form_back_main_page")?>">
								<?=GetMessage("auth_form_back_main_page")?></a>
						</div>
					</div>
						
					<?foreach ($arResult["GET"] as $key => $value):?>
						<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
					<?endforeach?>

					<?=bitrix_sessid_post()?>		
					<div class="row form-group">
                		<div class="col-md-12">
							<input type="hidden" name="logout" value="yes" />
							<input type="submit" name="logout_butt" class="btn btn-primary  py-2 px-4 rounded-0" 
								value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" />
               			</div>
              		</div>		

							
							
							
							

				</form>
				<?endif?>

			</div>
		</div>
	</div>
</div>
