<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\OmsOrder $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="oms-order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'member_id')->textInput() ?>

    <?= $form->field($model, 'coupon_id')->textInput() ?>

    <?= $form->field($model, 'order_sn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'member_username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pay_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'freight_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'promotion_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'integration_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'coupon_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discount_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pay_type')->textInput() ?>

    <?= $form->field($model, 'source_type')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'order_type')->textInput() ?>

    <?= $form->field($model, 'delivery_company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'delivery_sn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auto_confirm_day')->textInput() ?>

    <?= $form->field($model, 'integration')->textInput() ?>

    <?= $form->field($model, 'growth')->textInput() ?>

    <?= $form->field($model, 'promotion_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bill_type')->textInput() ?>

    <?= $form->field($model, 'bill_header')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bill_content')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bill_receiver_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bill_receiver_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receiver_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receiver_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receiver_post_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receiver_province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receiver_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receiver_region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receiver_detail_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'confirm_status')->textInput() ?>

    <?= $form->field($model, 'delete_status')->textInput() ?>

    <?= $form->field($model, 'use_integration')->textInput() ?>

    <?= $form->field($model, 'payment_time')->textInput() ?>

    <?= $form->field($model, 'delivery_time')->textInput() ?>

    <?= $form->field($model, 'receive_time')->textInput() ?>

    <?= $form->field($model, 'comment_time')->textInput() ?>

    <?= $form->field($model, 'modify_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
