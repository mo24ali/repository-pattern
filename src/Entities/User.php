<?php

namespace Src\Entities;



class User
{


    private ?string $name;
    private ?int $id;
    private ?int $age;

    public function __construct( string $nm, int $newAge)
    {
        $this->name = $nm;
        $this->age =(int) $newAge;
    }

    
    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        $this->age = $newAge;
    }

    public function __toString()
    {
        return "Hello world my name is " . $this->getName() . " and am " . $this->getAge();
    }
}
