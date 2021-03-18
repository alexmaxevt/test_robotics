<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arResult['GALLERY'] = [];

foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $fileID) {
    $arResult['GALLERY'][] = CFile::GetPath($fileID);
}