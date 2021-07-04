<?php

require("Model.php");

class User extends Model{

    public $tableName;
    public $firstname;
    public $lastname;
    public $email;

    function __construct($tableName,$firstname,$lastname,$email){

        $this->tableName = $tableName;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }
}

?>