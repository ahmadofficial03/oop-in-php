<?php 

class Commet {
    public $title;
    public $userId;

    public function __construct($text, $id) {
        $this->title=$text;
        $this->userId=$id;
    }


    
}