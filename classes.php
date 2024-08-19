<?php

class User{

    public $name;
    public $mail;

    public function __construct($name, $mail){
        $this->mail = $mail;
        $this->name = $name;
    }

    public function login(){
        echo $this->name . ' logged in'.  '<br />';
    }
}

// $userOne = new User();
// $userOne->login();
// echo $userOne->name;
// echo $userOne->mail;

$userTwo = new User( 'zany', 'zany@zany.za.ny');
echo $userTwo->name.  '<br />';
echo $userTwo->mail.  '<br />';
$userTwo->login();

?>
  