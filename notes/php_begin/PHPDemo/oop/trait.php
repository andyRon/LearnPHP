<?php
trait Power
{
    protected $power;

    protected function gas()
    {
        $this->power = '汽油';
    }

    protected function battery()
    {
        $this->power = '电池';
    }

    public function myPrint()
    {
        echo "动力来源：" . $this->power . PHP_EOL;
    }
}

trait Engine
{
    protected $engine;

    protected function three()
    {
        $this->engine = 3;
    }

    protected function four()
    {
        $this->engine = 4;
    }

    public function myPrint()
    {
        echo "发动机个数：" . $this->engine . PHP_EOL;
    }
}

error_reporting(E_ALL);

