<?php

class student{
    protected $first_name;
    public $last_name;

    public function setName($fname,$lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __sleep(){
        return array('first_name','last_name');
    }

    public function __wakeup(){
        echo 'This is wakeup !';
    }
}

$obj = new student;
$obj->setName('Ram','Jadhav');
$sleep = serialize($obj);
$wakeup = unserialize($sleep);

print_r($wakeup);

?>
