<?php

namespace myapp\event;

use yii\base\Component;

/**
 * 为了让猫具有事件能力
 */
class Cat extends Component
{
    /**
     * 猫发出叫声
     */
    public function shout()
    {
        echo '猫：miao miao miao <br />';

        // 猫叫了之后 触发猫的 miao 事件
        $this->trigger('miao');
    }
}