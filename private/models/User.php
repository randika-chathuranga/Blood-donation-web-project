<?php

require("Model.php");

class User extends Model{

    public $tableName;
    public $firstname;
    public $lastname;
    public $email;

    function __construct($firstname,$lastname,$email){

        $this->tableName = strtolower(static::class)."s";
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }
}

?>