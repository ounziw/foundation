<?php $templatepath = 'static/apps/foundation/';?><!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />

    <title>Welcome to Foundation</title>

    <link rel="stylesheet" href="<?= $templatepath ?>css/normalize.css">
    <link rel="stylesheet" href="<?= $templatepath ?>css/foundation.css">

    <script src="<?= $templatepath ?>js/vendor/custom.modernizr.js"></script>

</head>
<body>

<!-- Header and Nav -->

<div class="row">
    <div class="large-3 columns">
        <h1><?= $title ?></h1>
    </div>
    <div class="large-9 columns">
        <ul class="button-group right">
            <li><a href="#" class="button">Link 1</a></li>
            <li><a href="#" class="button">Link 2</a></li>
            <li><a href="#" class="button">Link 3</a></li>
            <li><a href="#" class="button">Link 4</a></li>
        </ul>
    </div>
</div>

<!-- End Header and Nav -->

<!-- First Band (Image) -->

<div class="row">
    <div class="large-12 columns">
        <?= $wysiwyg['mainimg'] ?>

        <hr>
    </div>
</div>
<!-- Second Band (Image Left with Text) -->

<div class="row">
    <div class="large-4 columns">
        <?= $wysiwyg['imgl'] ?>
    </div>
    <div class="large-8 columns">
        <?= $wysiwyg['contentr'] ?>
    </div>
</div>


<!-- Third Band (Image Right with Text) -->

<div class="row">
    <div class="large-8 columns">
        <?= $wysiwyg['contentl'] ?>

    </div>
    <div class="large-4 columns">
        <?= $wysiwyg['imgr'] ?>
    </div>
</div>


<!-- Footer -->

<footer class="row">
    <div class="large-12 columns">
        <hr />
        <div class="row">
            <div class="large-6 columns">
                <p>&copy; Copyright no one at all. Go to town.</p>
            </div>
            <div class="large-6 columns">
                <ul class="inline-list right">
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script>
    document.write('<script src=js/vendor/' +
        ('__proto__' in {} ? 'zepto' : 'jquery') +
        '.js><\/script>')
</script>
<script src="<?= $templatepath ?>js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>

</body>
</html>