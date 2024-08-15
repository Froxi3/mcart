<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$newWidth = 39;
$newHeight = 39;
$noPhoto["src"] = $this->GetFolder() . "/img/no_photo_left_block.jpg";

foreach ($arResult["ITEMS"] as $key => $value) {

    if($value["PREVIEW_PICTURE"]["SRC"]){
        $resizeImage = $value["PREVIEW_PICTURE"];
        $arResult["ITEMS"][$key]["resizePicture"] = CFile::ResizeImageGet(
            $resizeImage,
            Array("width" => $newWidth, "height" => $newHeight),
            BX_RESIZE_IMAGE_PROPORTIONAL_ALT
        );
    }
    else{
        $arResult["ITEMS"][$key]["resizePicture"] = $noPhoto;
    }
}