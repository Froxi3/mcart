<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
			<?=$arResult["DETAIL_TEXT"]?>
		</div>
		<div class="review-autor">
			<?=$arResult["NAME"]?>, 
			<?=$arResult["DISPLAY_ACTIVE_FROM"]?><?=GetMessage("DETAIL_PAGE_YEAR")?>, 
			<?=$arResult["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"]?>, 
			<?=$arResult["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"]?>.
		</div>
	</div>
	<div style="clear: both;" class="review-img-wrap">
		<?if($arResult["DETAIL_PICTURE"]["SRC"]):?>
			<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="img">
		<?else:?>
			<img src="<?=SITE_TEMPLATE_PATH?>/img/rew/no_photo.jpg" alt="img">
		<?endif;?>
	</div>
</div>
<?if($arResult["DISPLAY_PROPERTIES"]["DOCS"]):?>

	<div class="exam-review-doc">
		<p><?=GetMessage("DETAIL_REVIEW_DOCS_SECTION")?></p>

		<?if(is_array($arResult["DISPLAY_PROPERTIES"]["DOCS"]["DISPLAY_VALUE"])):?>
			
			<?foreach ($arResult["DISPLAY_PROPERTIES"]["DOCS"]["FILE_VALUE"] as $value):?>
				<div  class="exam-review-item-doc">
					<img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png">
					<a href="<?=$value["SRC"]?>">
						<?=$value["ORIGINAL_NAME"]?>
					</a>
				</div>
			<?endforeach;?>

		<?else:?>
			<div  class="exam-review-item-doc">
				<img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png">
				<a href="<?=$arResult["DISPLAY_PROPERTIES"]["DOCS"]["FILE_VALUE"]["SRC"]?>">
					<?=$arResult["DISPLAY_PROPERTIES"]["DOCS"]["FILE_VALUE"]["ORIGINAL_NAME"]?>
				</a>
			</div>
		<?endif;?>

	</div>

<?endif;?>
<hr>
<a href="<?=$arResult["LIST_PAGE_URL"]?>" class="review-block_back_link"> &larr; <?=GetMessage("BACK_LIST_PAGE_URL")?></a>