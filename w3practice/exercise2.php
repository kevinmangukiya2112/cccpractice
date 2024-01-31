<?php
class student{
    public $name;
    public $age;
    public $grade;
    public function displayinfo(){
        echo "Name: $this->name,Age:$this->age,Grade:$this->grade";
    }
}
$obj=new student();
$obj->name="kevin";
$obj->age=21;
$obj->grade="A";
$obj->displayinfo();
?>