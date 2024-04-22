<?php

namespace myapp\event;

use yii\base\Component;

class Dog extends Component
{
    public function findCat()
    {
        echo '狗：汪汪，猫在哪里？';
    }
}