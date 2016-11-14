<?php
namespace Hetic;

/**
 * Class Promotion
 * @package Hetic
 */
class Promotion
{
    private $arrayEleves;
    private $name;
    private $id;

    /**
     * Promotion constructor.
     * @param $arrayEleves
     * @param $name
     * @param $id
     */
    public function __construct(array $arrayEleves, $name)
    {
        $this->arrayEleves = $arrayEleves;
        $this->name = $name;
        $this->id = uniqid();
    }



}