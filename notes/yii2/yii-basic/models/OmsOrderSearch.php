<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OmsOrder;

/**
 * OmsOrderSearch represents the model behind the search form of `app\models\OmsOrder`.
 */
class OmsOrderSearch extends OmsOrder
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'member_id', 'coupon_id', 'pay_type', 'source_type', 'status', 'order_type', 'auto_confirm_day', 'integration', 'growth', 'bill_type', 'confirm_status', 'delete_status', 'use_integration'], 'integer'],
            [['order_sn', 'create_time', 'member_username', 'delivery_company', 'delivery_sn', 'promotion_info', 'bill_header', 'bill_content', 'bill_receiver_phone', 'bill_receiver_email', 'receiver_name', 'receiver_phone', 'receiver_post_code', 'receiver_province', 'receiver_city', 'receiver_region', 'receiver_detail_address', 'note', 'payment_time', 'delivery_time', 'receive_time', 'comment_time', 'modify_time'], 'safe'],
            [['total_amount', 'pay_amount', 'freight_amount', 'promotion_amount', 'integration_amount', 'coupon_amount', 'discount_amount'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = OmsOrder::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'member_id' => $this->member_id,
            'coupon_id' => $this->coupon_id,
            'create_time' => $this->create_time,
            'total_amount' => $this->total_amount,
            'pay_amount' => $this->pay_amount,
            'freight_amount' => $this->freight_amount,
            'promotion_amount' => $this->promotion_amount,
            'integration_amount' => $this->integration_amount,
            'coupon_amount' => $this->coupon_amount,
            'discount_amount' => $this->discount_amount,
            'pay_type' => $this->pay_type,
            'source_type' => $this->source_type,
            'status' => $this->status,
            'order_type' => $this->order_type,
            'auto_confirm_day' => $this->auto_confirm_day,
            'integration' => $this->integration,
            'growth' => $this->growth,
            'bill_type' => $this->bill_type,
            'confirm_status' => $this->confirm_status,
            'delete_status' => $this->delete_status,
            'use_integration' => $this->use_integration,
            'payment_time' => $this->payment_time,
            'delivery_time' => $this->delivery_time,
            'receive_time' => $this->receive_time,
            'comment_time' => $this->comment_time,
            'modify_time' => $this->modify_time,
        ]);

        $query->andFilterWhere(['like', 'order_sn', $this->order_sn])
            ->andFilterWhere(['like', 'member_username', $this->member_username])
            ->andFilterWhere(['like', 'delivery_company', $this->delivery_company])
            ->andFilterWhere(['like', 'delivery_sn', $this->delivery_sn])
            ->andFilterWhere(['like', 'promotion_info', $this->promotion_info])
            ->andFilterWhere(['like', 'bill_header', $this->bill_header])
            ->andFilterWhere(['like', 'bill_content', $this->bill_content])
            ->andFilterWhere(['like', 'bill_receiver_phone', $this->bill_receiver_phone])
            ->andFilterWhere(['like', 'bill_receiver_email', $this->bill_receiver_email])
            ->andFilterWhere(['like', 'receiver_name', $this->receiver_name])
            ->andFilterWhere(['like', 'receiver_phone', $this->receiver_phone])
            ->andFilterWhere(['like', 'receiver_post_code', $this->receiver_post_code])
            ->andFilterWhere(['like', 'receiver_province', $this->receiver_province])
            ->andFilterWhere(['like', 'receiver_city', $this->receiver_city])
            ->andFilterWhere(['like', 'receiver_region', $this->receiver_region])
            ->andFilterWhere(['like', 'receiver_detail_address', $this->receiver_detail_address])
            ->andFilterWhere(['like', 'note', $this->note]);

        return $dataProvider;
    }
}
