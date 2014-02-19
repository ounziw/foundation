<?php $templatepath = 'static/apps/foundation/';?><!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation Theme</title>
    <?php
    \Nos\Nos::main_controller()->addCss($templatepath."css/foundation.css");
    \Nos\Nos::main_controller()->addJavascript($templatepath."js/vendor/modernizr.js",false); // false: header
    \Nos\Nos::main_controller()->addJavascript($templatepath."js/vendor/jquery.js",true); // true: footer
    \Nos\Nos::main_controller()->addJavascript($templatepath."js/foundation.min.js",true); // true: footer
    $js = "$(document).foundation();";
    \Nos\Nos::main_controller()->addJavascriptInline($js,true); // true: footer
    ?>
</head>
<body>

<?php
echo \View::forge('foundation::subviews/menu', array(
    'title' => $title,
    'wysiwyg' => $wysiwyg,
    'current_context' => $page->get_context()
), false);

?>
<div class="row">
    <div class="large-12 columns">
        <h1><?= $title ?></h1>
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        <?= $wysiwyg['content'] ?>
    </div>
</div>

</body>
</html>
