<?php
echo newerton\fancybox\FancyBox::widget([
    'target' => 'a[rel=fancybox]',
    'helpers' => false,
    'mouse' => true,
    'config' => [
        'maxWidth' => '90%',
        'maxHeight' => '90%',
        'playSpeed' => 7000,
        'padding' => 0,
        'fitToView' => false,
        'width' => '70%',
        'height' => '70%',
        'autoSize' => false,
        'closeClick' => false,
        'closeBtn' => true,
        'openOpacity' => true,
        'arrows' => false
    ]
]);
?>
<div id="<?= $id ?>" class="calendar">

    <?php if ($title): ?>
        <h1><?= $title ?></h1>
    <?php endif; ?>

    <?= $calendar ?>

</div>