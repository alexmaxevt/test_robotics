<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<div class="col-md-12 col-lg-4 sidebar">
    <?$APPLICATION->IncludeComponent("bitrix:search.form", "search_footer", Array(
        "PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
        "USE_SUGGEST" => "N",	// Показывать подсказку с поисковыми фразами
    ),
        false
    );?>
    <!-- END sidebar-box -->
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "author",
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "Y",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
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
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "7",
            "IBLOCK_TYPE" => "balita",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
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
                0 => "LINK",
                1 => "BUTTON",
                2 => "",
            ),
            "SET_BROWSER_TITLE" => "Y",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "Y",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N",
            "COMPONENT_TEMPLATE" => "author"
        ),
        false
    );?>
    <!-- END sidebar-box -->
    <?$APPLICATION->IncludeComponent(
        "bitrix:news",
        "popular",
        array(
            "ADD_ELEMENT_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "Y",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "BROWSER_TITLE" => "-",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
            "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
            "DETAIL_DISPLAY_TOP_PAGER" => "N",
            "DETAIL_FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "DETAIL_PAGER_SHOW_ALL" => "Y",
            "DETAIL_PAGER_TEMPLATE" => "",
            "DETAIL_PAGER_TITLE" => "Страница",
            "DETAIL_PROPERTY_CODE" => array(
                0 => "",
                1 => "",
            ),
            "DETAIL_SET_CANONICAL_URL" => "N",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "6",
            "IBLOCK_TYPE" => "balita",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
            "LIST_FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "LIST_PROPERTY_CODE" => array(
                0 => "COMMENTS",
                1 => "POPULAR_POST",
                2 => "",
            ),
            "MESSAGE_404" => "",
            "META_DESCRIPTION" => "-",
            "META_KEYWORDS" => "-",
            "NEWS_COUNT" => "20",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PREVIEW_TRUNCATE_LEN" => "",
            "SEF_MODE" => "Y",
            "SET_LAST_MODIFIED" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "Y",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N",
            "USE_CATEGORIES" => "N",
            "USE_FILTER" => "N",
            "USE_PERMISSIONS" => "N",
            "USE_RATING" => "N",
            "USE_REVIEW" => "N",
            "USE_RSS" => "N",
            "USE_SEARCH" => "N",
            "USE_SHARE" => "N",
            "COMPONENT_TEMPLATE" => "/categories/",
            "VARIABLE_ALIASES" => array(
                "news"=>"/categories/",
                "section"=>"#SECTION_CODE#/",
                "detail"=>"#SECTION_CODE#/#ELEMENT_CODE#/",
            )
        ),
        false
    );?>
    <!-- END sidebar-box -->

    <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "sections", Array(
        "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
        "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
        "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
        "CACHE_TYPE" => "A",	// Тип кеширования
        "COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
        "FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
        "IBLOCK_ID" => "6",	// Инфоблок
        "IBLOCK_TYPE" => "balita",	// Тип инфоблока
        "SECTION_CODE" => "",	// Код раздела
        "SECTION_FIELDS" => array(	// Поля разделов
            0 => "",
            1 => "",
        ),
        "SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
        "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
        "SECTION_USER_FIELDS" => array(	// Свойства разделов
            0 => "",
            1 => "",
        ),
        "SHOW_PARENT_NAME" => "Y",
        "TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
        "VIEW_MODE" => "LINE",
        "COMPONENT_TEMPLATE" => "tree"
    ),
        false
    );?>
    <!-- END sidebar-box -->

</div>
<!-- END sidebar -->

</div>
</div>
</section>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<? echo date('Y')?> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
<!-- END footer -->

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

<?
\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-3.2.1.min.js");
\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-migrate-3.0.0.js");
\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/popper.min.js");
\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/bootstrap.min.js");
\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/owl.carousel.min.js");
\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.waypoints.min.js");
\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.stellar.min.js");
\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/main.js");
?>
</body>
</html>
