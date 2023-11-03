<?php

// creating objects:
class User {
    public $username;
    public $id;
    public $email;
}

$user1Obj = new User();
$user1Obj->username = "Ahmad";
$user1Obj->id = "113";
$user1Obj->email = "ahmad@gmail.com";


$user1Obj = new User();

$user2Obj = new User();
$user2Obj->username = "Fraz";
$user2Obj->id = "123";
$user2Obj->email = "fraz@gmail.com";

print_r($user2Obj);


