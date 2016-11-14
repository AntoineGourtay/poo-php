<?php
namespace Hetic;

/**
 * Class Human
 * @package Hetic
 */
abstract class Human
{
    private $weight = 0;
    private $height = 0;
    private static $count;

    public function __construct(int $weight, int $height){
        $this->weight = $weight;
        $this->height = $height;
        Human::$count++;
    }


    public abstract function faisUnTruc();

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight) : Human
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height) : Human
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return mixed
     */
    public static function getCount()
    {
        return self::$count;
    }

    /**
     * @param mixed $count
     */
    public static function setCount($count)
    {
        self::$count = $count;
    }

    public function __destruct()
    {
        Human::$count--;
    }
}