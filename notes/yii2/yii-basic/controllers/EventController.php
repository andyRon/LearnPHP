<?php

namespace app\controllers;

use myapp\event\Cat;
use myapp\event\Dog;
use myapp\event\Foo;
use myapp\event\Mouse;
use yii\base\Event;
use yii\web\Controller;

class EventController extends Controller
{
    public function actionIndex()
    {
        var_dump(Cat::class);
    }
    public function actionTest()
    {
        $cat = new Cat();
        $mouse = new Mouse();

        // 需事先给猫绑定 miao 事件才可以触发此事件
        // 猫一叫，就触发老鼠的 run 方法
        $cat->on('miao', [$mouse, 'run']);

        // 猫发出叫声
        $cat->shout();
    }

    public function actionTest2()
    {
        $cat = new Cat();
        $mouse = new Mouse();
        $dog = new Dog();
        // 猫绑定事件miao，只要猫叫就触发老鼠跑和狗找猫
        $cat->on('miao', [$mouse, 'run']);
        $cat->on('miao', [$dog, 'findCat']);

        // 猫叫
        $cat->shout();
    }

    public function actionTest3()
    {
        $cat = new Cat();
        $mouse = new Mouse();
        $cat->on('miao', [$mouse, 'run']);

        // 让猫发出叫声
        $cat->shout(); // 会触发 miao 事件
        (new Cat())->shout(); // 不会触发 miao 事件
    }

    // 类级别事件绑定
    public function actionTest4()
    {
        $cat = new Cat();
        $mouse = new Mouse();

        // 类级别的事件绑定
        // 只要猫发出声音，不管是什么猫，都会触发老鼠的 run 方法
        Event::on(Cat::class ,'miao', [$mouse, 'run']);

        // 让猫发出叫声
        $cat->shout(); // 会触发 miao 事件
        (new Cat())->shout(); // 会触发 miao 事件
    }
}