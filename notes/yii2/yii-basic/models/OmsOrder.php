<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oms_order".
 *
 * @property int $id 订单id
 * @property int $member_id
 * @property int|null $coupon_id
 * @property string|null $order_sn 订单编号
 * @property string|null $create_time 提交时间
 * @property string|null $member_username 用户帐号
 * @property float|null $total_amount 订单总金额
 * @property float|null $pay_amount 应付金额（实际支付金额）
 * @property float|null $freight_amount 运费金额
 * @property float|null $promotion_amount 促销优化金额（促销价、满减、阶梯价）
 * @property float|null $integration_amount 积分抵扣金额
 * @property float|null $coupon_amount 优惠券抵扣金额
 * @property float|null $discount_amount 管理员后台调整订单使用的折扣金额
 * @property int|null $pay_type 支付方式：0->未支付；1->支付宝；2->微信
 * @property int|null $source_type 订单来源：0->PC订单；1->app订单
 * @property int|null $status 订单状态：0->待付款；1->待发货；2->已发货；3->已完成；4->已关闭；5->无效订单
 * @property int|null $order_type 订单类型：0->正常订单；1->秒杀订单
 * @property string|null $delivery_company 物流公司(配送方式)
 * @property string|null $delivery_sn 物流单号
 * @property int|null $auto_confirm_day 自动确认时间（天）
 * @property int|null $integration 可以获得的积分
 * @property int|null $growth 可以活动的成长值
 * @property string|null $promotion_info 活动信息
 * @property int|null $bill_type 发票类型：0->不开发票；1->电子发票；2->纸质发票
 * @property string|null $bill_header 发票抬头
 * @property string|null $bill_content 发票内容
 * @property string|null $bill_receiver_phone 收票人电话
 * @property string|null $bill_receiver_email 收票人邮箱
 * @property string $receiver_name 收货人姓名
 * @property string $receiver_phone 收货人电话
 * @property string|null $receiver_post_code 收货人邮编
 * @property string|null $receiver_province 省份/直辖市
 * @property string|null $receiver_city 城市
 * @property string|null $receiver_region 区
 * @property string|null $receiver_detail_address 详细地址
 * @property string|null $note 订单备注
 * @property int|null $confirm_status 确认收货状态：0->未确认；1->已确认
 * @property int $delete_status 删除状态：0->未删除；1->已删除
 * @property int|null $use_integration 下单时使用的积分
 * @property string|null $payment_time 支付时间
 * @property string|null $delivery_time 发货时间
 * @property string|null $receive_time 确认收货时间
 * @property string|null $comment_time 评价时间
 * @property string|null $modify_time 修改时间
 */
class OmsOrder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oms_order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['member_id', 'receiver_name', 'receiver_phone'], 'required'],
            [['member_id', 'coupon_id', 'pay_type', 'source_type', 'status', 'order_type', 'auto_confirm_day', 'integration', 'growth', 'bill_type', 'confirm_status', 'delete_status', 'use_integration'], 'integer'],
            [['create_time', 'payment_time', 'delivery_time', 'receive_time', 'comment_time', 'modify_time'], 'safe'],
            [['total_amount', 'pay_amount', 'freight_amount', 'promotion_amount', 'integration_amount', 'coupon_amount', 'discount_amount'], 'number'],
            [['order_sn', 'member_username', 'delivery_company', 'delivery_sn', 'bill_receiver_email'], 'string', 'max' => 64],
            [['promotion_info', 'receiver_name'], 'string', 'max' => 100],
            [['bill_header', 'bill_content', 'receiver_detail_address'], 'string', 'max' => 200],
            [['bill_receiver_phone', 'receiver_phone', 'receiver_post_code', 'receiver_province', 'receiver_city', 'receiver_region'], 'string', 'max' => 32],
            [['note'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'member_id' => Yii::t('app', 'Member ID'),
            'coupon_id' => Yii::t('app', 'Coupon ID'),
            'order_sn' => Yii::t('app', 'Order Sn'),
            'create_time' => Yii::t('app', 'Create Time'),
            'member_username' => Yii::t('app', 'Member Username'),
            'total_amount' => Yii::t('app', 'Total Amount'),
            'pay_amount' => Yii::t('app', 'Pay Amount'),
            'freight_amount' => Yii::t('app', 'Freight Amount'),
            'promotion_amount' => Yii::t('app', 'Promotion Amount'),
            'integration_amount' => Yii::t('app', 'Integration Amount'),
            'coupon_amount' => Yii::t('app', 'Coupon Amount'),
            'discount_amount' => Yii::t('app', 'Discount Amount'),
            'pay_type' => Yii::t('app', 'Pay Type'),
            'source_type' => Yii::t('app', 'Source Type'),
            'status' => Yii::t('app', 'Status'),
            'order_type' => Yii::t('app', 'Order Type'),
            'delivery_company' => Yii::t('app', 'Delivery Company'),
            'delivery_sn' => Yii::t('app', 'Delivery Sn'),
            'auto_confirm_day' => Yii::t('app', 'Auto Confirm Day'),
            'integration' => Yii::t('app', 'Integration'),
            'growth' => Yii::t('app', 'Growth'),
            'promotion_info' => Yii::t('app', 'Promotion Info'),
            'bill_type' => Yii::t('app', 'Bill Type'),
            'bill_header' => Yii::t('app', 'Bill Header'),
            'bill_content' => Yii::t('app', 'Bill Content'),
            'bill_receiver_phone' => Yii::t('app', 'Bill Receiver Phone'),
            'bill_receiver_email' => Yii::t('app', 'Bill Receiver Email'),
            'receiver_name' => Yii::t('app', 'Receiver Name'),
            'receiver_phone' => Yii::t('app', 'Receiver Phone'),
            'receiver_post_code' => Yii::t('app', 'Receiver Post Code'),
            'receiver_province' => Yii::t('app', 'Receiver Province'),
            'receiver_city' => Yii::t('app', 'Receiver City'),
            'receiver_region' => Yii::t('app', 'Receiver Region'),
            'receiver_detail_address' => Yii::t('app', 'Receiver Detail Address'),
            'note' => Yii::t('app', 'Note'),
            'confirm_status' => Yii::t('app', 'Confirm Status'),
            'delete_status' => Yii::t('app', 'Delete Status'),
            'use_integration' => Yii::t('app', 'Use Integration'),
            'payment_time' => Yii::t('app', 'Payment Time'),
            'delivery_time' => Yii::t('app', 'Delivery Time'),
            'receive_time' => Yii::t('app', 'Receive Time'),
            'comment_time' => Yii::t('app', 'Comment Time'),
            'modify_time' => Yii::t('app', 'Modify Time'),
        ];
    }
}
