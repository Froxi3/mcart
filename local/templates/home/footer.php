<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-5">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "include/home/footer/about.php"
                        )
                    );?>
                </div>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row mb-5">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu", 
                        "horizontal_multilevel", 
                        array(
                            "ROOT_MENU_TYPE" => "top",
                            "MAX_LEVEL" => "2",
                            "CHILD_MENU_TYPE" => "left",
                            "USE_EXT" => "Y",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "COMPONENT_TEMPLATE" => "horizontal_multilevel",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                        false,
                        array(
                            "ACTIVE_COMPONENT" => "Y"
                        )
                    );?>
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Navigations</h3>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Buy</a></li>
                            <li><a href="#">Rent</a></li>
                            <li><a href="#">Properties</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "include/home/footer/socials.php"
                    )
                );?>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "include/home/footer/copyright.php"
                    )
                );?>
            </div>
        </div>
    </div>
</footer>

    <?
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-3.3.1.min.js" );
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-migrate-3.0.1.min.js" );
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-ui.js" );
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/popper.min.js" );
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/bootstrap.min.js" );
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/owl.carousel.min.js" );
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/mediaelement-and-player.min.js" );
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.stellar.min.js" );
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.countdown.min.js" );
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.magnific-popup.min.js" );
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/bootstrap-datepicker.min.js" );
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/aos.js" );
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/main.js" );
    ?>

    </body>
</html>