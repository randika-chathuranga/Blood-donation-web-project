<?php

require("Model.php");

class User extends Model{

    static $tableName = "users";
    public $firstName;
    public $lastName;
    public $nic;
    public $email;

    function __construct($firstName,$lastName,$email,$nic){

        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->nic = new PrimaryKey($nic);
    }
}

?>