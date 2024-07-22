<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?>  

<?
$GLOBALS['filterDeal'] = array('PROPERTY_DEAL_VALUE' => "Да");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"indexSlider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "172800",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"FILTER_NAME" => "filterDeal",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "ads",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "PRICE",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
        <div class="feature d-flex align-items-start">
          <span class="icon mr-3 flaticon-house"></span>
          <div class="text">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "include/home/index/info1.php"
              )
            );?>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
        <div class="feature d-flex align-items-start">
          <span class="icon mr-3 flaticon-rent"></span>
          <div class="text">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "include/home/index/info2.php"
                )
              );?>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
        <div class="feature d-flex align-items-start">
          <span class="icon mr-3 flaticon-location"></span>
          <div class="text">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "include/home/index/info3.php"
              )
            );?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section site-section-sm bg-light">
	<div class="container">
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.line", 
			"lastAds", 
			array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "172800",
				"CACHE_TYPE" => "A",
				"DETAIL_URL" => "",
				"FIELD_CODE" => array(
					0 => "NAME",
					1 => "PREVIEW_TEXT",
					2 => "PREVIEW_PICTURE",
					3 => "PROPERTY_PRICE",
					4 => "PROPERTY_AREA",
					5 => "PROPERTY_FLOORS",
					6 => "PROPERTY_BATHROOMS",
					7 => "PROPERTY_GARAGE",
				),
				"IBLOCKS" => array(
					0 => "5",
				),
				"IBLOCK_TYPE" => "ads",
				"NEWS_COUNT" => "9",
				"SORT_BY1" => "TIMESTAMP_X",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC",
				"COMPONENT_TEMPLATE" => "lastAds"
			),
			false
		);?>
	</div>
</div>

<div class="site-section">
	<?$APPLICATION->IncludeComponent("bitrix:news.line", "indexServices", Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
			"CACHE_GROUPS" => "Y",	// Учитывать права доступа
			"CACHE_TIME" => "7776000",	// Время кеширования (сек.)
			"CACHE_TYPE" => "A",	// Тип кеширования
			"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
			"FIELD_CODE" => array(	// Поля
				0 => "NAME",
				1 => "PROPERTY_LINK",
				2 => "PROPERTY_ICON",
			),
			"IBLOCKS" => array(	// Код информационного блока
				0 => "6",
			),
			"IBLOCK_TYPE" => "services",	// Тип информационного блока
			"NEWS_COUNT" => "20",	// Количество новостей на странице
			"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
			"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
			"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
			"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
			"COMPONENT_TEMPLATE" => ".default"
		),
		false
	);?>
</div>

<div class="site-section bg-light">
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"indexBlog", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "604800",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"IBLOCKS" => array(
			0 => "1",
		),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "indexBlog"
	),
	false
);?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>