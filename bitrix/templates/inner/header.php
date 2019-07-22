<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <? $APPLICATION->ShowHead(); ?>
    <title><?$APPLICATION->ShowTitle() ?></title>
    <link rel="stylesheet" href="/bitrix/templates/.default/template_style.css"/>
    <script type="text/javascript" src="/bitrix/templates/.default/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/bitrix/templates/.default/js/functions.js"></script>

    <link rel="shortcut icon" type="image/x-icon" href="/bitrix/templates/.default/favicon.ico">
    <!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
<div class="wrap">
    <div class="hd_header_area">
       <? require_once($_SERVER['DOCUMENT_ROOT']).'/bitrix/templates/.default/include/header.php' ?>
    </div>
    <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"nav", 
	array(
		"COMPONENT_TEMPLATE" => "nav",
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => ""
	),
	false
);?>
    <div class="main_container page">
        <div class="mn_container">
            <div class="mn_content">
                <div class="main_post">
                    <div class="main_title">
                        <p class="title"><?=$APPLICATION->ShowTitle()?></p>
                    </div>
                    <!-- workarea -->
