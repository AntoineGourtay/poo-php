<?php
namespace Hetic;

/**
 * Class Eleves
 * @package Hetic
 */
class Eleves
{
    private $firstname;
    private $lastname;
    private $id;

    private $collectionEleve;

    /**
     * Eleves constructor.
     * @param $firstname
     * @param $lastname
     * @param $id
     */
    public function __construct($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->id = uniqid();
    }

    public function saveEleve($id, $firstname, $lastname)
    {
        $this->collectionEleve->array_push($this->collectionEleve, $id , array($firstname, $lastname));
    }

    /********* GETTERS & SETTERS *********/

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

}