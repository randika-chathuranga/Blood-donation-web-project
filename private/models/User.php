<?php

require("Model.php");

class User extends Model{

    static $tableName = "users";
    public $firstName;
    public $lastName;
    public $nic;
    public $gender;
    public $dateOfBirth;
    public $bloodGroup;
    public $bodyWeight;
    public $address;
    public $email;
    public $phoneNumber;
    public $password;

    function __construct($data){
        // data array (fullName => value,nic => value,genderdateOfBirth => value,bloodGroup => value,bodyWeight => value,address => value,email => value,password => value)
        
        $this->firstName = $data['firstName'];
        $this->lastName = $data['lastName'];
        $this->nic = $data['nic'];
        $this->gender = $data['gender'];
        $this->nic = new PrimaryKey($data['nic']);
        $this->dateOfBirth = $data['dateOfBirth'];
        $this->bloodGroup = $data['bloodGroup'];
        $this->bodyWeight = $data['bodyWeight'];
        $this->address = $data['address'];
        $this->email = $data['email'];
        $this->phoneNumber = $data['phoneNumber'];
        $this->password = $data['password'];
    }

    public static function createTable(){
        $sql = "CREATE TABLE " . static::$tableName ." (
            firstName VARCHAR(30) NOT NULL,
            lastName VARCHAR(30) NOT NULL,
            nic VARCHAR(30) PRIMARY KEY NOT NULL,
            gender VARCHAR(30) NOT NULL,
            dateOfBirth DATE NOT NULL,
            bloodGroup VARCHAR(20),
            bodyWeight INT(20),
            address VARCHAR(150),
            email VARCHAR(50),
            phoneNumber VARCHAR(50),
            password VARCHAR(200) )";
        
        Connection::execute($sql);
    }
}

?>