<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<?foreach($arResult["ITEMS"] as $arItem):?>
    <?if ($arItem['PROPERTIES']['SHOW_AUTHOR']['VALUE'] == 'Y') {?>
        <a href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>" target="_blank" class="p-2"><span class="fa fa-<?=$arItem['NAME']?>"></span></a>
    <?}?>
<?endforeach;?>
