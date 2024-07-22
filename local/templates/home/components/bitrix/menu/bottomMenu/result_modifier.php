<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$leftColumnMenu["leftColumnMenu"] = [];
$rightColumnMenu["rightColumnMenu"] = [];
foreach ($arResult as $key => $value) {
    if($key % 2 == 0){
        $leftColumnMenu["leftColumnMenu"][] = $value;
    }
    else {
        $rightColumnMenu["rightColumnMenu"][] = $value;
    }
}
$arResult["menu"]["leftColumn"] = $leftColumnMenu["leftColumnMenu"];
$arResult["menu"]["rightColumn"] = $rightColumnMenu["rightColumnMenu"];