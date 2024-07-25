<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
	<div class="row form-group">
		<div class="col-md-12 mb-3 mb-md-0">
			<label class="font-weight-bold" for="fullname"><?=GetMessage("MFT_LABEL_NAME")?></label>
			<input type="text" id="fullname" name="user_name" class="form-control" 
				placeholder="<?=GetMessage("MFT_PLACEHOLDER_NAME")?>" name="user_name">
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-12">
			<label class="font-weight-bold" for="email"><?=GetMessage("MFT_LABEL_EMAIL")?></label>
			<input type="email" id="email" name="user_email" class="form-control" 
				placeholder="<?=GetMessage("MFT_PLACEHOLDER_EMAIL")?>">
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-12">
			<label class="font-weight-bold" for="subject"><?=GetMessage("MFT_LABEL_SUBJECT")?></label>
			<input type="text" id="subject" name="subject" class="form-control"
				placeholder="<?=GetMessage("MFT_PLACEHOLDER_SUBJECT")?>">
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-12">
			<label class="font-weight-bold" for="message"><?=GetMessage("MFT_LABEL_MESSAGE")?></label> 
			<textarea name="message" id="message" cols="30" rows="5" class="form-control" 
				placeholder="<?=GetMessage("MFT_PLACEHOLDER_MESSAGE")?>"></textarea>
		</div>
	</div>
	
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">

	<div class="row form-group">
		<div class="col-md-12">
			<input type="submit"  name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="btn btn-primary  py-2 px-4 rounded-0">
		</div>
	</div>
</form>