<?php

namespace app\controllers;

use app\models\ContactForm;
use app\models\Country;
use app\models\EntryForm;
use app\models\OmsOrder;
use myapp\components\ActionTimeFilter;
use yii\data\Pagination;
use yii\db\ActiveRecord;
use yii\web\Controller;
use myapp\components\GreetingAction;
use yii\web\View;

class CountryController extends Controller
{
    public function actions()
    {
        return [
            'greeting' => [  // TODO
                'class' => 'myapp\components\GreetingAction'
            ],

            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                 'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],  //返回验证
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ], //返回错误
        ];
    }

    public function behaviors()
    {
        return [
//            [
//                'class' => ActionTimeFilter::class,
//                'only' => ['t5'],  // 指定控制器应用到哪些动作
////                'except' => [],
//                'lastModified' => function ($action, $params) {
//                    $q = new \yii\db\Query();
//                    return $q->from('company')->max('age');
//                },
//            ],
        ];
    }

    public function actionIndex()
    {
        $query = Country::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }

    public function actionT()
    {
        print_r(array_keys(\Yii::$app->modules));
        print_r(\Yii::$app->controllerNamespace);
        print_r(array_keys(get_object_vars(\Yii::$app)));
//        print_r((var_export(\Yii::$app)));

        print_r(\Yii::$app->urlManager->baseUrl);


        $model = new ContactForm();
        $model->attributes = \Yii::$app->request->post('ContactForm');
        print_r($model->attributes);
        print_r($model->scenarios());

    }

    public function actionT2()
    {
        $OmsOrder = OmsOrder::findOne(23);
        print_r($OmsOrder->attributes);
        print_r($OmsOrder->toArray());

//        print_r($OmsOrder->fields());
    }

    public function actionT3()
    {
//        print_r(\Yii::$app->request->headers);
//        print_r(\Yii::$app->request->userHost);
//        print_r(\Yii::$app->request->userIP);

//        print_r(\Yii::$app->components);

        $country = new Country();
        print_r($country->attributes);

        print_r($country->scenarios());

    }

    public function actionT4()
    {
        $model = OmsOrder::findOne(12);
//        print_r($model);

        echo \Yii::$app->view->renderFile('@app/views/site/about.php');
    }

    public function actionAbout()
    {

        \Yii::$app->view->on(View::EVENT_END_BODY, function () {
            echo date('Y-m-d');
        });
        return $this->render('about');
    }

    public function actionT5()
    {
        $a = array('green', 'red', 'yellow', 'cat');
        $b = array('avocado', 'apple', 'banana');
        $c = array_combine($a, $b);

        print_r($c);

    }
}