<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\OmsOrder $model */

$this->title = 'Update Oms Order: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Oms Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="oms-order-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
