<?php

class User extends Model{

    public $tableName;
    public $firstname;
    public $lastname;
    public $email;

    function setData($tableName,$firstname,$lastname,$email){

        $this->tableName = $tableName;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }
}

?>