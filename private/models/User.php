<?php

require("Model.php");

class User extends Model{

    public $tableName;
    public $nic;
    public $firstname;
    public $lastname;
    public $email;

    function __construct($firstname,$lastname,$email,$nic){

        $this->tableName = strtolower(static::class)."s";
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->nic = new PrimaryKey($nic);
    }
}

?>