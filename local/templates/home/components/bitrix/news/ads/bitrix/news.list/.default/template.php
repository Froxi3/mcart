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

<div class="site-section site-section-sm bg-light">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
				<div class="site-section-title">
					<?if(!empty(trim($arParams["TITLE_ADS"]))):?>
						<h2><?=$arParams["TITLE_ADS"]?></h2>
					<?else:?>
						<h2><?=GetMessage("MFT_NEW_ADS_SECTION")?></h2>
					<?endif;?>	
				</div>
			</div>
		</div>

		<?if($arParams["DISPLAY_TOP_PAGER"]):?>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="site-pagination">
					<?=$arResult["NAV_STRING"]?>
				</div>
			</div>  
		</div>
		<?endif;?>

		<div class="row mb-5">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="col-md-6 col-lg-4 mb-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="prop-entry d-block">
						<figure>
							<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="Image" class="img-fluid">
						</figure>
						<div class="prop-text">
							<div class="inner">
								<span class="price rounded"><?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["DISPLAY_VALUE"]?></span>
								<h3 class="title"><?=$arItem["NAME"]?></h3>
								<p class="location"><?=$arItem["PREVIEW_TEXT"]?></p>
							</div>

							<div class="prop-more-info">
								<div class="inner d-flex">
									<div class="col">
										<span><?=GetMessage("MFT_AREA")?></span>
										<strong><?=$arItem["DISPLAY_PROPERTIES"]["AREA"]["DISPLAY_VALUE"]?></strong>
									</div>
									<div class="col">
										<span><?=GetMessage("MFT_FLOOR")?></span>
										<strong><?=$arItem["DISPLAY_PROPERTIES"]["FLOORS"]["DISPLAY_VALUE"]?></strong>
									</div>
									<div class="col">
										<span><?=GetMessage("MFT_BATHS")?></span>
										<strong><?=$arItem["DISPLAY_PROPERTIES"]["BATHROOMS"]["DISPLAY_VALUE"]?></strong>
									</div>
									<div class="col">
										<span><?=GetMessage("MFT_GARAGE")?></span>
										<strong>
											<?if($arItem["DISPLAY_PROPERTIES"]["GARAGE"]["DISPLAY_VALUE"] == "Да"):
												echo GetMessage("MFT_GARAGE_TRUE");
											else:
												echo GetMessage("MFT_GARAGE_FALSE");
											endif;?>
										</strong>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			<?endforeach;?>
		</div>

		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="site-pagination">
					<?=$arResult["NAV_STRING"]?>
				</div>
			</div>  
		</div>
		<?endif;?>
	</div>  
</div>