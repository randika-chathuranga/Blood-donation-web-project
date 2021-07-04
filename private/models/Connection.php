<?php

require("Config.php");

class Connection{

    static $SERVER_NAME = SERVER_NAME;
    static $USER_NAME = USER_NAME;
    static $PASSOWRD = PASSOWRD;
    static $DB_NAME = DB_NAME;

    static function execute($sql){

        $connection = new mysqli(self::$SERVER_NAME,self::$USER_NAME, self::$PASSOWRD, self::$DB_NAME);

        // Check connection
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        if ($connection->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }

        $connection->close();
    }
}

?>