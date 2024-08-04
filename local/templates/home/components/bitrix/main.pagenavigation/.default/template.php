<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

/** @var PageNavigationComponent $component */
$component = $this->getComponent();

$this->setFrameMode(true);

///Сколько стр. отрисовывать справа и слева
if($arResult["PAGE_COUNT"] > 5){
	$before = $arResult["CURRENT_PAGE"] - 2;
	$after = $arResult["CURRENT_PAGE"] + 2;
}
else{
	$before = $arResult["CURRENT_PAGE"] - 1;
	$after = $arResult["CURRENT_PAGE"] + 1;
}
	
if ($arResult["PAGE_COUNT"] > 4){
	if ($arResult["CURRENT_PAGE"] > 2){?>

		<a href="<?=htmlspecialcharsbx($arResult["URL"])?>">1</a>
		<?if($arResult["PAGE_COUNT"] > 6){
			if($arResult["CURRENT_PAGE"] > 4){?>
				<span>...</span>
			<?}
		}
	}
}

///Изменение количества отображаемых страниц взависимости от текущей
if($arResult["CURRENT_PAGE"] == $arResult["PAGE_COUNT"] && $arResult["PAGE_COUNT"] > 2){
	$before -= 2;
}else if($arResult["CURRENT_PAGE"] == $arResult["PAGE_COUNT"] - 1 && $arResult["PAGE_COUNT"] > 2){
	$before -= 1;
}

if($arResult["PAGE_COUNT"] > 5 && $arResult["CURRENT_PAGE"] == 3){
	$before += 1;
}

if($arResult["CURRENT_PAGE"] == 1){
	$after += 2;
	$before += 1;
}else if($arResult["CURRENT_PAGE"] == 2 ){
	$after += 1;
}

if($arResult["PAGE_COUNT"] > 5 && $arResult["CURRENT_PAGE"] == $arResult["PAGE_COUNT"] - 2){
	$after -= 1;
}

if($after > $arResult["PAGE_COUNT"]){
	$after = $arResult["PAGE_COUNT"];
}
if($before == 0){
	$before = 1;
}

for($i = $before; $i <= $after; $i++){
    if($i == $arResult["CURRENT_PAGE"]){?>
		<a class="active" href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($i))?>"><?=$i?></a>	
    <?}else{?>
		<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($i))?>"><?=$i?></a>
	<?}
}

if($arResult["PAGE_COUNT"] > 4){
    if($arResult["CURRENT_PAGE"] < $arResult["PAGE_COUNT"] - 1){?>
        <?if($arResult["CURRENT_PAGE"] < $arResult["PAGE_COUNT"] - 3){?>
            <?if($arResult["PAGE_COUNT"] > 6){?>
                <span>...</span>
            <?}
        }?>
		<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["PAGE_COUNT"]))?>"><?=$arResult["PAGE_COUNT"]?></a>
    <?}
}
?>