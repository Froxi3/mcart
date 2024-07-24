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

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");

///Сколько стр. отрисовывать справа и слева
if($arResult["NavPageCount"] > 5){
	$before = $arResult["NavPageNomer"] - 2;
	$after = $arResult["NavPageNomer"] + 2;
}
else{
	$before = $arResult["NavPageNomer"] - 1;
	$after = $arResult["NavPageNomer"] + 1;
}
	
if ($arResult["NavPageCount"] > 4){
	if ($arResult["NavPageNomer"] > 2){?>

		<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1">1</a>
		<?if($arResult["NavPageCount"] > 6){
			if($arResult["NavPageNomer"] > 4){?>
				<span>...</span>
			<?}
		}
	}
}

///Изменение количества отображаемых страниц взависимости от текущей
if($arResult["NavPageNomer"] == $arResult["NavPageCount"] && $arResult["NavPageCount"] > 2){
	$before -= 2;
}else if($arResult["NavPageNomer"] == $arResult["NavPageCount"] - 1 && $arResult["NavPageCount"] > 2){
	$before -= 1;
}

if($arResult["NavPageCount"] > 5 && $arResult["NavPageNomer"] == 3){
	$before += 1;
}

if($arResult["NavPageNomer"] == 1){
	$after += 2;
	$before += 1;
}else if($arResult["NavPageNomer"] == 2 ){
	$after += 1;
}

if($arResult["NavPageCount"] > 5 && $arResult["NavPageNomer"] == $arResult["NavPageCount"] - 2){
	$after -= 1;
}

if($after > $arResult["NavPageCount"]){
	$after = $arResult["NavPageCount"];
}
if($before == 0){
	$before = 1;
}

for($i = $before; $i <= $after; $i++){
    if($i == $arResult["NavPageNomer"]){?>
		<a class="active" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$i?>"><?=$i?></a>	
    <?}else{?>
		<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$i?>"><?=$i?></a>
	<?}
}

if($arResult["NavPageCount"] > 4){
    if($arResult["NavPageNomer"] < $arResult["NavPageCount"] - 1){?>
        <?if($arResult["NavPageNomer"] < $arResult["NavPageCount"] - 3){?>
            <?if($arResult["NavPageCount"] > 6){?>
                <span>...</span>
            <?}
        }?>
		<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><?=$arResult["NavPageCount"]?></a>
    <?}
}
?>