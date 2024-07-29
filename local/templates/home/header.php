<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">

<head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?  
    $APPLICATION->ShowHead();

    $APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/jquery-ui.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/animate.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/aos.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style.css");
?>
    <title><?$APPLICATION->ShowTitle()?></title>

</head>

<body>
    <?php $APPLICATION->Showpanel();?>

    <div class="site-loader"></div>
    <div class="site-wrap">
        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> 
        <!-- .site-mobile-menu -->

        <div class="border-bottom bg-white top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-md-6">
                        <p class="mb-0">
                            <a href="#" class="mr-3">
                                <span class="text-black fl-bigmug-line-phone351"></span>
                                <span class="d-none d-md-inline-block ml-2">
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => SITE_DIR . "/include/home/header/phone.php"
                                        )
                                    );?>
                                </span>
                            </a>
                            <a href="#">
                                <span class="text-black fl-bigmug-line-email64"></span> 
                                <span class="d-none d-md-inline-block ml-2">
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => SITE_DIR . "/include/home/header/email.php"
                                        )
                                    );?>
                                </span>
                            </a>
                        </p>
                    </div>
                    <div class="col-6 col-md-6 text-right">
                        <div>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_DIR . "/include/home/header/socials.php"
                                )
                            );?>
                        </div>
                        <div><a href="/login/auth.php">Авторизация</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-navbar">
            <div class="container py-1">
                <div class="row align-items-center">
                    <div class="col-8 col-md-8 col-lg-3">
                        <h1 class="">
                            <a href="/" class="h5 text-uppercase text-black">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => SITE_DIR . "/include/home/header/logo.php"
                                    )
                                );?>
                            </a>
                        </h1>
                    </div>
                    <div class="col-4 col-md-4 col-lg-9">
                        <nav class="site-navigation text-right text-md-right" role="navigation">
                            
                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                                <a href="#" class="site-menu-toggle js-menu-toggle text-black">
                                    <span class="icon-menu h3"></span>
                                </a>
                            </div>
                            <?$APPLICATION->IncludeComponent("bitrix:menu", "topMenu", Array(
                                "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                                    "MAX_LEVEL" => "2",	// Уровень вложенности меню
                                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                                    "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                    "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                                    "MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                    "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                                    "COMPONENT_TEMPLATE" => "horizontal_multilevel",
                                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                ),
                                false,
                                array(
                                "ACTIVE_COMPONENT" => "Y"
                                )
                            );?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?if ($GLOBALS["APPLICATION"]->GetCurPage() != "/"):?>
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <h1 class="mb-2"><?=$APPLICATION->ShowTitle()?></h1>
                        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "homeBreadCrumb", Array(
                                "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                                "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                                "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
                            ),
                            false
                        );?>
                </div>
            </div>
        </div>
    </div>
    <?endif;?>
    
    