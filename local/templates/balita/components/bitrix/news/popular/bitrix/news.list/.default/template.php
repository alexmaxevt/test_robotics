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

<div class="sidebar-box">
    <h3 class="heading"><?= Loc::getMessage("HEAD");?></h3>
    <div class="post-entry-sidebar">
        <ul>
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <?if ($arItem['PROPERTIES']['POPULAR_POST']['VALUE'] == 'Y') {?>
                <li>
                    <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="Image placeholder" class="mr-4">
                        <div class="text">
                            <h4><?echo $arItem["NAME"]?></h4>
                            <div class="post-meta">
                                <span class="mr-2"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?> </span> &bullet;
                                <span class="ml-2"><span class="fa fa-comments"></span> <?=$arItem['PROPERTIES']['COMMENTS']['VALUE']?></span>
                            </div>
                        </div>
                    </a>
                </li>
            <?}?>
            <?endforeach;?>
        </ul>
    </div>
</div>