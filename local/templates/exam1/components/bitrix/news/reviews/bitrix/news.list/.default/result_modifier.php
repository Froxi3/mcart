<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$newWidth = 68;
$newHeight = 50;

foreach($arResult["ITEMS"] as $key => $value){
    if($value["DETAIL_PICTURE"]["SRC"]){

        $resizeImage = $value["DETAIL_PICTURE"];
        $arResult["ITEMS"][$key]["resizeImg"] = CFile::ResizeImageGet(
            $resizeImage,
            Array("width" => $newWidth, "height" => $newHeight, BX_RESIZE_IMAGE_PROPORTIONAL_ALT)
        );
    }
}