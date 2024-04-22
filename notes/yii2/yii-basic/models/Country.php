<?php
namespace app\models;

use myapp\components\MyBehavior;

class Country extends \yii\db\ActiveRecord {


    const SCENARIO_LOGIN = 'login';
    const SCENARIO_REGISTER = 'register';

    public function scenarios()
    {
        return [
            self::SCENARIO_LOGIN => ['username', 'password'],
            self::SCENARIO_REGISTER => ['username', 'email', 'password'],
        ];
    }

    public function behaviors()
    {
        return [
            // 匿名行为，只有行为类名
            MyBehavior::class,

            // 命名行为，只有行为类名
            'myBehavior2' => MyBehavior::class,

            // 匿名行为，配置数组
            [
                'class' => MyBehavior::class,
                'prop1' => 'value1',
                'prop2' => 'value2',
            ],

            // 命名行为，配置数组
            'myBehavior4' => [
                'class' => MyBehavior::class,
                'prop1' => 'value1',
                'prop2' => 'value2',
            ]
        ];
    }
}