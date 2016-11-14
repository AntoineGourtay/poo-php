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


    /********* GETTERS & SETTERS *********/

    /**
     * @return array
     */
    public function getArrayEleves(): array
    {
        return $this->arrayEleves;
    }

    /**
     * @param array $arrayEleves
     */
    public function setArrayEleves(array $arrayEleves)
    {
        $this->arrayEleves = $arrayEleves;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }


}