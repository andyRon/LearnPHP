<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\OmsOrderSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="oms-order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'member_id') ?>

    <?= $form->field($model, 'coupon_id') ?>

    <?= $form->field($model, 'order_sn') ?>

    <?= $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'member_username') ?>

    <?php // echo $form->field($model, 'total_amount') ?>

    <?php // echo $form->field($model, 'pay_amount') ?>

    <?php // echo $form->field($model, 'freight_amount') ?>

    <?php // echo $form->field($model, 'promotion_amount') ?>

    <?php // echo $form->field($model, 'integration_amount') ?>

    <?php // echo $form->field($model, 'coupon_amount') ?>

    <?php // echo $form->field($model, 'discount_amount') ?>

    <?php // echo $form->field($model, 'pay_type') ?>

    <?php // echo $form->field($model, 'source_type') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'order_type') ?>

    <?php // echo $form->field($model, 'delivery_company') ?>

    <?php // echo $form->field($model, 'delivery_sn') ?>

    <?php // echo $form->field($model, 'auto_confirm_day') ?>

    <?php // echo $form->field($model, 'integration') ?>

    <?php // echo $form->field($model, 'growth') ?>

    <?php // echo $form->field($model, 'promotion_info') ?>

    <?php // echo $form->field($model, 'bill_type') ?>

    <?php // echo $form->field($model, 'bill_header') ?>

    <?php // echo $form->field($model, 'bill_content') ?>

    <?php // echo $form->field($model, 'bill_receiver_phone') ?>

    <?php // echo $form->field($model, 'bill_receiver_email') ?>

    <?php // echo $form->field($model, 'receiver_name') ?>

    <?php // echo $form->field($model, 'receiver_phone') ?>

    <?php // echo $form->field($model, 'receiver_post_code') ?>

    <?php // echo $form->field($model, 'receiver_province') ?>

    <?php // echo $form->field($model, 'receiver_city') ?>

    <?php // echo $form->field($model, 'receiver_region') ?>

    <?php // echo $form->field($model, 'receiver_detail_address') ?>

    <?php // echo $form->field($model, 'note') ?>

    <?php // echo $form->field($model, 'confirm_status') ?>

    <?php // echo $form->field($model, 'delete_status') ?>

    <?php // echo $form->field($model, 'use_integration') ?>

    <?php // echo $form->field($model, 'payment_time') ?>

    <?php // echo $form->field($model, 'delivery_time') ?>

    <?php // echo $form->field($model, 'receive_time') ?>

    <?php // echo $form->field($model, 'comment_time') ?>

    <?php // echo $form->field($model, 'modify_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
