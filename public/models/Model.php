<?php


class Model{

    function save(){

        $sqlCols = "(";
        $sqlVals = "(";
        $tableName;
        foreach ($this as $key=>$value){
            
            if ($key == "tableName"){
                $tableName = $value;
            }else{
                $sqlCols = $sqlCols.$key.",";
                $sqlVals = $sqlVals."'".$value."'".",";
            }

        }

        $sqlCols = substr($sqlCols, 0, -1);
        $sqlVals = substr($sqlVals, 0, -1);

        $sqlCols = $sqlCols.")";
        $sqlVals = $sqlVals.")";

        $sql = "INSERT INTO " .$tableName." " .$sqlCols. " VALUES " . $sqlVals;
        echo $sql;
        $this->execute($sql);
    }

    private function execute($sql){

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