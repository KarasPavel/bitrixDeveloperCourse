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
<!--<h1 class="title"><?/*=$arResult["NAME"]*/?></h1>-->
    <?if(is_array($arResult["DETAIL_PICTURE"])):?>
    <img src="<?=$arResult["DETAIL_PICTURE"]['SRC']?>" align="left" alt=""/>
    <?endif;?>
   <p><?=$arResult["PREVIEW_TEXT"]?></p>


