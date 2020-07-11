<?

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();
?>
    <!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <? $APPLICATION->ShowHead() ?>

        <?
            $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/custom.css');
        ?>

        <title><? $APPLICATION->ShowTitle() ?></title>
    </head>
    <body>
<?
require_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/header.php';
?>