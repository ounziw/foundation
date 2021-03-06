<?= \View::forge('foundation::subviews/header', array('current_context' => $page->get_context())) ?>

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


<?= \View::forge('foundation::subviews/footer') ?>

</body>
</html>
