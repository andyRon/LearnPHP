<?php

namespace myapp\event;

use yii\base\Component;

class Foo extends Component
{
    const EVENT_HELLO = 'hello';

    public function function_name()
    {
        echo 'function_namess';
    }

    public function bar()
    {
        $this->trigger(self::EVENT_HELLO);
    }
}