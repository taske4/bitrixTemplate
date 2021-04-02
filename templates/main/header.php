<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

$asset  = Asset::getInstance();
$assets = [
    'css' => SITE_TEMPLATE_PATH . '/assets/css/custom.css',
    'js'  => SITE_TEMPLATE_PATH . '/assets/js/custom.js',
];
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
        foreach($assets as $type => $path) {
            if ($type === 'string') {
                $asset->addString($path);
            } elseif (file_exists($path)) {
                if ($type === 'css') {
                    $asset->addCss($path);
                } elseif ($type === 'js') {
                    $asset->addJs($path);
                }
            }
        }

        unset($assets);
        ?>

        <title><?$APPLICATION->ShowTitle()?></title>
    </head>
    <body>
<? require_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/header.php'; ?>