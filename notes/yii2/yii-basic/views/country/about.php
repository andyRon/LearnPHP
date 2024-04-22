<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\jui\DatePicker;

$this->title = 'About';
//$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = '关于我';
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>

    <?php $this->beginBlock('block1'); ?>

    ...content of block1...

    <?php $this->endBlock(); ?>

    <hr>
    <br>
    <?php if (isset($this->blocks['block1'])): ?>
        <?= $this->blocks['block1'] ?> <strong>使用的数据块</strong>
    <?php else: ?>
        ... default content for block1 ...
    <?php endif; ?>

    <hr>

    <?= DatePicker::widget(['name' => 'date'])?>
</div>
