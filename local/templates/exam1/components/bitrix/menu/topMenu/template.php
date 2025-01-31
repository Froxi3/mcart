<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<div class="menu-block popup-wrap">
	<a href="" class="btn-menu btn-toggle"></a>
	<div class="menu popup-block">
		<ul class="">
			<li class="main-page">
				<a href="/s2/"><?=GetMessage("MAIN_PAGE_LINK")?></a>
			</li>
			
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["PERMISSION"] > "D"):?>

		<?if ($arItem["IS_PARENT"]):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li>
					<a href="<?=$arItem["LINK"]?>" <?if($arItem["PARAMS"]["STYLE"]):?> class="<?=$arItem["PARAMS"]["STYLE"]?>" <?endif?>>
						<?=$arItem["TEXT"]?>
					</a>
					<ul>
						<?if($arItem["PARAMS"]["TEXT"]):?>
							<div class="menu-text"><?=$arItem["PARAMS"]["TEXT"]?></div>
						<?endif;?>
			<?else:?>
				<li>
					<a href="<?=$arItem["LINK"]?>" <?if($arItem["PARAMS"]["STYLE"]):?> class="<?=$arItem["PARAMS"]["STYLE"]?>" <?endif?>>
						<?=$arItem["TEXT"]?>
					</a>
					<ul>
						<?if($arItem["PARAMS"]["TEXT"]):?>
							<div class="menu-text"><?=$arItem["PARAMS"]["TEXT"]?></div>
						<?endif;?>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li>
					<a href="<?=$arItem["LINK"]?>" <?if($arItem["PARAMS"]["STYLE"]):?> class="<?=$arItem["PARAMS"]["STYLE"]?>" <?endif?>>
						<?=$arItem["TEXT"]?>
					</a>
				</li>
			<?else:?>
				<li>
					<a href="<?=$arItem["LINK"]?>" <?if($arItem["PARAMS"]["STYLE"]):?> class="<?=$arItem["PARAMS"]["STYLE"]?>" <?endif?>>
						<?=$arItem["TEXT"]?>
					</a>
				</li>
			<?endif?>

		<?endif?>

		<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
		
	<?endif?>
<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

		</ul>
		<a href="" class="btn-close"></a>
	</div>
	<div class="menu-overlay"></div>
</div>
<?endif?>