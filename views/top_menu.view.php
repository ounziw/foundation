<?php $templatepath = 'static/apps/foundation/';?><!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation Theme</title>
    <link rel="stylesheet" href="<?= $templatepath ?>css/foundation.css" />
    <script src="<?= $templatepath ?>js/vendor/modernizr.js"></script>
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

<script src="<?= $templatepath ?>js/vendor/jquery.js"></script>
<script src="<?= $templatepath ?>js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
