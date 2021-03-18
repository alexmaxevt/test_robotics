<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);
?>
<!doctype html>
<html lang="en">
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <?
    \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/css/bootstrap.css");
    \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/css/animate.css");
    \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/css/owl.carousel.min.css");
    \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/css/style.css");
    \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/fonts/ionicons/css/ionicons.min.css");
    \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/fonts/fontawesome/css/font-awesome.min.css");
    \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/fonts/flaticon/font/flaticon.css");
    ?>
</head>
<body>

<?$APPLICATION->ShowPanel();?>

<header role="banner">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <?$APPLICATION->IncludeComponent("bitrix:news.list", "social_links", Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                    "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
                    "AJAX_MODE" => "N",	// Включить режим AJAX
                    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                    "CACHE_TYPE" => "A",	// Тип кеширования
                    "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                    "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                    "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                    "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                    "DISPLAY_NAME" => "Y",	// Выводить название элемента
                    "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                    "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                    "FIELD_CODE" => array(	// Поля
                        0 => "",
                        1 => "",
                    ),
                    "FILTER_NAME" => "",	// Фильтр
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                    "IBLOCK_ID" => "5",	// Код информационного блока
                    "IBLOCK_TYPE" => "balita",	// Тип информационного блока (используется только для проверки)
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
                    "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                    "NEWS_COUNT" => "20",	// Количество новостей на странице
                    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                    "PAGER_TITLE" => "Новости",	// Название категорий
                    "PARENT_SECTION" => "",	// ID раздела
                    "PARENT_SECTION_CODE" => "",	// Код раздела
                    "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                    "PROPERTY_CODE" => array(	// Свойства
                        0 => "LINK",
                        1 => "",
                    ),
                    "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
                    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                    "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
                    "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
                    "SET_STATUS_404" => "N",	// Устанавливать статус 404
                    "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
                    "SHOW_404" => "N",	// Показ специальной страницы
                    "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
                    "SORT_BY2" => "ACTIVE_FROM",	// Поле для второй сортировки новостей
                    "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
                    "SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
                    "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                ),
                    false
                );?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:search.form",
                    "search_head",
                    Array(
                        "PAGE" => "#SITE_DIR#search/index.php",
                        "USE_SUGGEST" => "N"
                    )
                );?>
            </div>
        </div>
    </div>

    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/logo.php"
        )
    );?>

    <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">


            <div class="collapse navbar-collapse" id="navbarMenu">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "main", Array(
                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "sections",	// Тип меню для остальных уровней
                    "COMPONENT_TEMPLATE" => "horizontal_multilevel",
                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "3",	// Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                    "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                    "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                ),
                    false
                );?>

            </div>
        </div
    </nav>
</header>
<!-- END header -->

<section class="site-section pt-5">
    <div class="container">
