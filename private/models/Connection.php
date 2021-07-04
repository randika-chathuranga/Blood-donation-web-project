<?php


class Connection{

    static function execute($sql){

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test";

        $connection = new mysqli($servername, $username, $password, $dbname);

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