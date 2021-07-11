<?php

require("Model.php");

class User extends Model{

    static $tableName = "users";
    public $fullName;
    public $nic;
    public $gender;
    public $dateOfBirth;
    public $bloodGroup;
    public $bodyWeight;
    public $adress;
    public $email;
    public $password;

    function __construct($data){
        // data array (fullName => value,nic => value,genderdateOfBirth => value,bloodGroup => value,bodyWeight => value,adress => value,email => value,password => value)
        
        $this->fullName = $data['fullName'];
        $this->nic = $data['nic'];
        $this->gender = $data['gender'];
        $this->nic = new PrimaryKey($data['nic']);
        $this->dateOfBirth = $data['dateOfBirth'];
        $this->bloodGroup = $data['bloodGroup'];
        $this->bodyWeight = $data['bodyWeight'];
        $this->adress = $data['adress'];
        $this->email = $data['email'];
        $this->password = $data['password'];
    }
}

?>