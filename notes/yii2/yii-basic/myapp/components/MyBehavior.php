<?php

namespace myapp\components;

use yii\base\Behavior;
use yii\db\ActiveRecord;

class MyBehavior extends Behavior
{
    public $prop1;

    private $_prop2;

    public function getProp2()
    {
        return $this->_prop2;
    }

    public function setProp2($value)
    {
        $this->_prop2 = $value;
    }

    public function foo()
    {
        // ...
    }

    // events() 方法返回事件列表和相应的处理器
    //
    public function events()
    {
        return [
            // 声明了 EVENT_BEFORE_VALIDATE 事件和它的处理器 beforeValidate()
            ActiveRecord::EVENT_BEFORE_VALIDATE => 'beforeValidate',
        ];
    }

    public function beforeValidate($event)
    {
        // 处理器方法逻辑
        echo '自定义行为验证';
    }

}