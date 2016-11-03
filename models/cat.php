<?php
class Animal
{
    protected $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}
class Cat extends Animal
{
    protected $name;
    function __construct()
    {
        parent::__construct();
    }
    public function meow()
    {
        $catName = $this->getName();
        return "Cat". {$catName}."is saying meow";
    }
}
 ?>
