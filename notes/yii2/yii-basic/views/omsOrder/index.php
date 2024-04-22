<?php

use app\models\OmsOrder;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\OmsOrderSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Oms Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oms-order-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Oms Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'member_id',
            'coupon_id',
            'order_sn',
            'create_time',
            //'member_username',
            //'total_amount',
            //'pay_amount',
            //'freight_amount',
            //'promotion_amount',
            //'integration_amount',
            //'coupon_amount',
            //'discount_amount',
            //'pay_type',
            //'source_type',
            //'status',
            //'order_type',
            //'delivery_company',
            //'delivery_sn',
            //'auto_confirm_day',
            //'integration',
            //'growth',
            //'promotion_info',
            //'bill_type',
            //'bill_header',
            //'bill_content',
            //'bill_receiver_phone',
            //'bill_receiver_email:email',
            //'receiver_name',
            //'receiver_phone',
            //'receiver_post_code',
            //'receiver_province',
            //'receiver_city',
            //'receiver_region',
            //'receiver_detail_address',
            //'note',
            //'confirm_status',
            //'delete_status',
            //'use_integration',
            //'payment_time',
            //'delivery_time',
            //'receive_time',
            //'comment_time',
            //'modify_time',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, OmsOrder $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
