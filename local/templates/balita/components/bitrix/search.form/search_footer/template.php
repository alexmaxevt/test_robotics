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
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);
?>
<div class="sidebar-box search-form-wrap">
    <!-- <a href="#"><span class="fa fa-search"></span></a> -->
    <form action="<?=$arResult["FORM_ACTION"]?>" class="search-form">
        <div class="form-group">
            <span class="icon fa fa-search"></span>
            <?if($arParams["USE_SUGGEST"] === "Y"):?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:search.suggest.input",
                    "",
                    array(
                        "NAME" => "q",
                        "VALUE" => "",
                        "INPUT_SIZE" => 15,
                        "DROPDOWN_SIZE" => 10,
                    ),
                    $component, array("HIDE_ICONS" => "Y")
                );?>
            <?else:?>
                <input type="text" id="s" name="q" placeholder="<?= Loc::getMessage("PLACEHOLDER");?>">
            <?endif;?>
        </div>
    </form>
</div>