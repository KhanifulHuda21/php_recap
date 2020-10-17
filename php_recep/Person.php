<?php


class Person
{
    public $name;
    protected $age;

    public function __construct($name)
    {
        $this->name=$name;
    }

    public function getAge()
    {
       return $this->age;
    }
    
    public function setAge($age)
    {
        if ($age<18)
        {
            exit("Youre not Allowed");
        }

        $this->age=$age;
    }

    public function __toString()
    {
        return $this->name;
    }
}

$john = new Person($argv[1]);
$john->setAge($argv[2]);
echo "Your Name ".$john." And you age ".$john->getAge();



// $john->setAge(30);

// $john->age=8;

// var_dump($john->getAge(3));