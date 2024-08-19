<?php

class User{

    private $name;
    private $mail;

    public function __construct($name, $mail){
        $this->mail = $mail;
        $this->name = $name;
    }

    public function login(){
        echo $this->name . ' logged in'.  '<br />';
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        if(is_string($name)&&strlen($name)>1){
            $this->name = $name;
            return "name has been updated $name";
        }else{
            return 'not a valid name';
        }
    }
}

// $userOne = new User();
// $userOne->login();
// echo $userOne->name;
// echo $userOne->mail;

$userTwo = new User( 'zany', 'zany@zany.za.ny');
// $userTwo->name = 50; // for this cant happen we should set private name and mail
echo $userTwo->getName().  '<br />';
// echo $userTwo->getName();
echo $userTwo->setName('zany2').  '<br />';
echo $userTwo->getName(). '<br />';

?>