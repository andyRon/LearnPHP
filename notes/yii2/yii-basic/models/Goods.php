<?php

namespace app\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

class Goods extends ActiveRecord
{
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'name',
            'storage' => 'storage',
            'goodsType' => 'goodsType',
            'count' => 'count',
            'remark' => 'remark',
            'status' => 'Status',
            'uid' => 'Uid',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_AFTER_UPDATE => ['updated_at'],
                ],
                // 使用 datetime代替时间戳（int）
                'value' => new Expression('NOW()'),
            ],
//            [
//                'class' => BlameableBehavior::class
//            ]
        ];

    }
}