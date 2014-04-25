<!doctype html>
<html class="no-js" lang="<?php echo \Nos\Tools_Context::localeCode($page->get_context());?>">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation Theme</title>
    <?php
    $templatepath = 'static/apps/foundation/';
    \Nos\Nos::main_controller()->addCss($templatepath."css/foundation.min.css");
    \Nos\Nos::main_controller()->addJavascript($templatepath."js/vendor/modernizr.js",false); // false: header
    \Nos\Nos::main_controller()->addJavascript($templatepath."js/vendor/jquery.js",true); // true: footer
    \Nos\Nos::main_controller()->addJavascript($templatepath."js/foundation.min.js",true); // true: footer
    $js = "jQuery.noConflict();
jQuery(document).foundation();";
    \Nos\Nos::main_controller()->addJavascriptInline($js,true); // true: footer
    ?>
</head>