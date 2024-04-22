<?php

class Car
{
    protected $brand;
    public function __call($name, $arguments)
    {
        echo "调用的成员方法不存在" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        echo "调用的静态方法不存在" . PHP_EOL;
    }


    public function __invoke($brand)
    {
        $this->brand = $brand;
        echo "蓝天白云，定会如期而至 -- " . $this->brand . PHP_EOL;
    }
}

(new Car())->drive();
Car::drive();


$car = new Car();
$car('宝马');