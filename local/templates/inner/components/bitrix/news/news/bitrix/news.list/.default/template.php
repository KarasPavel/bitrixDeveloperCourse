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
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
<div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
<div class="ps_head"><a class="ps_head_link" href="<?=$arItem['DETAIL_PAGE_URL']?>"><h2 class="ps_head_h"><?=$arItem['NAME']?></h2></a><span class="ps_date"><?=$arItem['DISPLAY_ACTIVE_FROM']?></span></div>
<div class="ps_content">
    <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" align="left" alt="<?=$arItem['NAME']?>"/>
    <p><?=$arItem['PREVIEW_TEXT']?></p>
    <div style="clear:both"></div>
</div>
</div>
<?endforeach;?>

