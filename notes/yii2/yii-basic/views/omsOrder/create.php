<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\OmsOrder $model */

$this->title = 'Create Oms Order';
$this->params['breadcrumbs'][] = ['label' => 'Oms Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oms-order-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
