<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\OmsOrder $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Oms Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="oms-order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'member_id',
            'coupon_id',
            'order_sn',
            'create_time',
            'member_username',
            'total_amount',
            'pay_amount',
            'freight_amount',
            'promotion_amount',
            'integration_amount',
            'coupon_amount',
            'discount_amount',
            'pay_type',
            'source_type',
            'status',
            'order_type',
            'delivery_company',
            'delivery_sn',
            'auto_confirm_day',
            'integration',
            'growth',
            'promotion_info',
            'bill_type',
            'bill_header',
            'bill_content',
            'bill_receiver_phone',
            'bill_receiver_email:email',
            'receiver_name',
            'receiver_phone',
            'receiver_post_code',
            'receiver_province',
            'receiver_city',
            'receiver_region',
            'receiver_detail_address',
            'note',
            'confirm_status',
            'delete_status',
            'use_integration',
            'payment_time',
            'delivery_time',
            'receive_time',
            'comment_time',
            'modify_time',
        ],
    ]) ?>

</div>
