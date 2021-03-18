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

<div class="row blog-entries">
    <div class="col-md-12 col-lg-8 main-content">
        <h1 class="mb-4"><?=$arResult["NAME"]?></h1>
        <div class="post-meta">
            <span class="category">
                <?
                $ElementId = $arResult['EXTERNAL_ID'];
                $db_groups = CIBlockElement::GetElementGroups($ElementId, true);
                while($ar_group = $db_groups->Fetch()) {
                    echo $ar_group["NAME"];
                }
                ?>
            </span>
            <span class="mr-2"><?=$arResult["DISPLAY_ACTIVE_FROM"]?> </span> &bullet;
            <span class="ml-2"><span class="fa fa-comments"></span> <?=$arResult['PROPERTIES']['COMMENTS']['VALUE']?></span>
        </div>
        <div class="post-content-body">
            <?echo $arResult["DETAIL_TEXT"];?>
            <div class="row mb-5">
                <div class="col-md-12 mb-4 element-animate">
                        <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="Image placeholder" class="img-fluid">
                </div>
                <div class="col-md-6 mb-4 element-animate">
                    <?foreach ($arResult['DISPLAY_PROPERTIES']['GALLERY']['FILE_VALUE'] as $arGallery) {?>
                        <img src="<?=$arGallery['SRC']?>" alt="Image placeholder" class="img-fluid">
                    <?}?>
                </div>
            </div>
            <?=$arResult['PROPERTIES']['TEXT_BOTTOM']['~VALUE']['TEXT']?>
        </div>
        <div class="pt-5">
            <p>Categories:  <?foreach ($arResult['SECTION']['PATH'] as $section){?><a href="<?=$section['SECTION_PAGE_URL']?>"><?=$section['NAME']?></a><?if (count($section) > 1){ echo ', ';}?><?}?></p>
        </div>
    </div>