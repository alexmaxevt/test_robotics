<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul class="navbar-nav mx-auto">
        <?
        $previousLevel = 0;
        foreach($arResult as $arItem):?>
            <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
                <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
            <?endif?>
            <?if ($arItem["IS_PARENT"]):?>
                <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                    <li class="nav-item dropdown"><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>nav-link dropdown-toggle active<?else:?>nav-link dropdown-toggle<?endif?>"><?=$arItem["TEXT"]?></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown05">
                <?else:?>
                    <li><a href="<?=$arItem["LINK"]?>" class="dropdown-item"><?=$arItem["TEXT"]?></a>
                        <ul>
                <?endif?>
            <?else:?>
                <?if ($arItem["PERMISSION"] > "D"):?>
                    <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                        <li class="nav-item"><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>nav-link active<?else:?>nav-link<?endif?>"><?=$arItem["TEXT"]?></a></li>
                    <?else:?>
                        <li><a href="<?=$arItem["LINK"]?>" class="dropdown-item"><?=$arItem["TEXT"]?></a></li>
                    <?endif?>
                <?else:?>
                    <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                        <li class="nav-item"><a href="" class="<?if ($arItem["SELECTED"]):?>nav-link active<?else:?>nav-link<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
                    <?else:?>
                        <li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
                    <?endif?>
                <?endif?>
            <?endif?>
            <?$previousLevel = $arItem["DEPTH_LEVEL"];?>
        <?endforeach?>
        <?if ($previousLevel > 1)://close last item tags?>
            <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
        <?endif?>
    </ul>
    <div class="menu-clear-left"></div>
<?endif?>