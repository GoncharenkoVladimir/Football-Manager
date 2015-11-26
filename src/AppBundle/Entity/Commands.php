<?php

namespace AppBundle\Entity;

class Commands
{
    protected $name;
    public function setName($name){
        $this->name = $name;
    }
}