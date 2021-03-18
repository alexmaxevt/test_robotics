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

<div class="owl-carousel owl-theme home-slider">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?if($arItem['PROPERTIES']['SHOW_IN_SLIDER']['VALUE'] == 'Y'){?>
        <div>
            <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="a-block d-flex align-items-center height-lg" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>'); ">
                <div class="text half-to-full">
                    <div class="post-meta">
                            <span class="category">
                                <?
                                $ElementId = $arItem['ID'];
                                $db_groups = CIBlockElement::GetElementGroups($ElementId, true);
                                while($ar_group = $db_groups->Fetch()) {
                                    echo $ar_group["NAME"];
                                }
                                ?>
                            </span>
                        <span class="mr-2"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> <?=$arItem['PROPERTIES']['COMMENTS']['VALUE']?></span>
                    </div>
                    <h3><?echo $arItem["NAME"]?></h3>
                    <p><?echo $arItem["PREVIEW_TEXT"];?></p>
                </div>
            </a>
        </div>
    <?}?>
    <?endforeach;?>
</div>