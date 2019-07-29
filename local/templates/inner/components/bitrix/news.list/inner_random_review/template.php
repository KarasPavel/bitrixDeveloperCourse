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

<div class="sb_reviewed">
<?foreach($arResult["ITEMS"] as $arItem):?>
        <img src="<?if($arItem["PREVIEW_PICTURE"]["SRC"]):echo $arItem["PREVIEW_PICTURE"]["SRC"];else: ""; endif;?>" class="sb_rw_avatar" alt=""/>
        <span class="sb_rw_name"><?=$arItem['NAME']?></span>
        <span class="sb_rw_job"> <?=$arItem["PROPERTIES"]["POSITION"]["VALUE"]?>
                     компании   <?=$arItem["PROPERTIES"]["COMPANY"]["VALUE"]?> </span>
        <p><?=$arItem["PREVIEW_TEXT"]?></p>
<?endforeach;?>
    <div class="clearboth"></div>
    <div class="sb_rw_arrow"></div>
</div>