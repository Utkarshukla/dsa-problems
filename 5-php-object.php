<?php 
//example to create object in php 
class user {
    public $name;
    public $age;
    public $class;
    public $language;
    public $city ;
    public $salary ;
    function __construct(...$args){
        $this->name = $args[0];
        $this->age = $args[1];
        $this->class = $args[2];
        $this->language = $args[3];
        $this->city = $args[4];
        $this->salary = $args[5];
    }
    function objList(){
        return "User Info: Name: $this->name, Age: $this->age, Class: $this->class, Language: $this->language, City: $this->city, Salary: $this->salary";
    }
}
$newObj = new user("Utkarsh",25, "B.tech ", "PHP", "Lucknow", 50000);
echo $newObj->objList();