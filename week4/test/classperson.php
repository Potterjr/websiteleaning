<?php
class Person
{
    public $name;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}

$a = new Person;
$b = new Person;
$a->setname('Nikom');
echo $a->getName() . "<br>";
$b->setname('Mali');
echo $b->getName() . "<br>";
var_dump($a);
var_dump($b);
