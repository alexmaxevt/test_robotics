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
    <div class="col-md-6">
        <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="Image placeholder">
            <div class="blog-content-body">
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
                    <span class="mr-2"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?> </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> <?=$arItem['PROPERTIES']['COMMENTS']['VALUE']?></span>
                </div>
                <h2><?echo $arItem["NAME"]?></h2>
            </div>
        </a>
    </div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
