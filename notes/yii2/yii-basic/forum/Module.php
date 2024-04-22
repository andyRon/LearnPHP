<?php
namespace app\modules\forum;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();

        $this->params['foo'] = 'bar';

//        \Yii::configure($this, require __DIR__ . '/config.php');
    }
}