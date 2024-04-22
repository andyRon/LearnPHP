<?php
class Car
{
    protected $brand;
    private $no;
    public $wheels = 4;
    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }
    /**
     * @return mixed
     */
    public function getNo()
    {
        return $this->no;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand): void
    {
        $this->brand = $brand;
    }

    public function __sleep()
    {
        return ['brand', 'no', 'wheels'];
    }

    public function __wakeup()
    {
        $this->no = 10001;
    }
}

$car = new Car();
$car->setBrand("领克01");

// 将对象序列化为字符串后保存到文件
$string = serialize($car);
echo $string . PHP_EOL;
file_put_contents("car", $string);

// 从文件读取对象字符串反序列化为对象
$content = file_get_contents("car");
$object = unserialize($content);
echo "汽车品牌：" . $object->getBrand() . PHP_EOL;
echo "汽车No.：" . $object->getNo() . PHP_EOL;
echo "汽车轮子：" . $object->wheels . PHP_EOL;