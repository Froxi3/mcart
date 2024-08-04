<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

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

<div class="container agents-list">
    <div class="row mb-5">
        <div class="col-12">
            <div class="site-section-title">
                <h2><?=GetMessage("MCART_AGENTS_TITLE")?></h2>
            </div>
        </div>
    </div>
    <div class="mb-5">
        <?foreach($arResult["AGENTS"]["ITEMS"] as $value):?>

        <div class="agent__card">
            <div class="small-info">

            <?if($value["UF_PHOTO"]):?>
                <div class="avatar" style="background-image: url(<?=$value["UF_PHOTO"]["SRC"]?>)"></div>
            <?else:?>
                <div class="avatar" style="background-image: url(<?=$templateFolder?>/images/no-avatar.png);"></div>
            <?endif;?>

                <div class="info">
                    <div class="name"><?=$value["UF_FULLNAME"]?></div>
                </div>

            </div>
            <div class="agent__card_item">
                <div class="agent__card_info">
                    <div class="card__info_item">
                        <div class="position"><?=GetMessage("MCART_AGENTS_EMAIL")?></div>
                        <div class="name"><?=$value["UF_EMAIL"]?></div>
                    </div>
                    <div class="card__info_item">
                        <div class="position"><?=GetMessage("MCART_AGENTS_PHONE")?></div>
                        <div class="name"><?=$value["UF_PHONE"]?></div>
                    </div>
                    <div class="card__info_item">
                        <div class="position"><?=GetMessage("MCART_AGENTS_TYPE")?></div>
                        <div class="name"><?=$value["UF_TYPEOFACTIVITY"]?></div>
                    </div>
                </div>
            </div>
            <a class="star <?if(is_array($arResult["STAR_AGENTS"]) && array_key_exists($value["ID"], $arResult["STAR_AGENTS"])):?> 
                active <?endif;?>" data-agent="<?=$value["ID"]?>">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 4L14.472 9.26604L20 10.1157L16 14.2124L16.944 20L12 17.266L7.056 20L8 14.2124L4 10.1157L9.528 9.26604L12 4Z" stroke="#95929A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>

        <?endforeach;?>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <div class="site-pagination">
            <?
                $APPLICATION->IncludeComponent(
                    "bitrix:main.pagenavigation",
                    "",
                    array(
                        "NAV_OBJECT" => $arResult["AGENTS"]["NAV_OBJECT"],
                        "SEF_MODE" => "N",
                    ),
                    false
                    );?>
            </div>
        </div>  
    </div>
</div>