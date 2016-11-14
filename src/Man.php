<?php
namespace Hetic;


class Man extends Human
{
    public function getWeight(): int
    {
        return 80;
    }

    public function boireDesCanons():string
    {
        return "J'aime le foot";
    }

    public function faisUnTruc():string
    {
        return 'Je fais un truc';
    }


}