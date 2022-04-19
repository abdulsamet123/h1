<?php

class Contact
{
    public $id;
    public $tijd;
    public $dag;


    public function __construct(){
        settype($this->id, 'integer');
    }
}
