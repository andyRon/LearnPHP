<?php

namespace app\controllers;

use app\models\Country;
use app\models\Goods;
use yii\web\Controller;

class BehaviorController extends Controller
{
    public function actionIndex()
    {
        $country = new Country();
        $country->prop1 = 'p111';
        $country->setProp2('p2324');

        var_dump($country->prop1);
        var_dump($country->prop2);
        print_r($country->attributes());

        $country->detachBehavior('myBehavior1');
        print_r(($country->getBehaviors()));
    }

    public function actionIndex2()
    {
        $goods = new Goods();
        $goods->name = '华为MateBook 16';
        $goods->storage = 2;
        $goods->goodsType = 3;
        $goods->count = 110;
        $goods->save();
    }
}