<?php

require("Connection.php");

class Model{

    function save(){

        $sqlCols = "(";
        $sqlVals = "(";
        
        foreach ($this as $key=>$value){

            $sqlCols = $sqlCols.$key.",";

            if(get_class((object)$value) == "PrimaryKey" )
                $sqlVals = $sqlVals."'".$value->value."'".",";

            else if($key != "tableName")
                $sqlVals = $sqlVals."'".$value."'".",";

        }
        

        $sqlCols = substr($sqlCols, 0, -1);
        $sqlVals = substr($sqlVals, 0, -1);

        $sqlCols = $sqlCols.")";
        $sqlVals = $sqlVals.")";

        echo($sqlCols."<br>");
        echo($sqlVals."<br>");

        // INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')
        
        $sql = "INSERT INTO " . static::$tableName . " " .$sqlCols. " VALUES " . $sqlVals;

        Connection::execute($sql);
    }

    function delete(){

        foreach ($this as $key=>$value){

            if (get_class((object)$value) == "PrimaryKey"){
                break;
            }

        }

        $sql = "DELETE FROM " . static::$tableName . " WHERE ". $key . " = ". $value->value;
        Connection::execute($sql);
    }

    static function fetch($column,$value){
        
        $sql = "SELECT * FROM " . static::$tableName . " WHERE ". $column . "=". $value;
        
        $result = Connection::execute($sql);

        if ($result->num_rows > 0) {

            $objects = array();

            while($row = $result->fetch_assoc()) {

                $values = array();

                $reflectionClass = new ReflectionClass(static::class);
                $properties = $reflectionClass->getProperties();

                foreach ($properties as $value){

                    if($value->getName() != "tableName"){
                    $values[$value->getName()] = $row[$value->getName()];
                    }
    
                }

                $obj = $reflectionClass->newInstance($values);
                array_push($objects, $obj);
            }

            return $objects;

        }else{
            echo "0 results";
        }
    }
 
}

class PrimaryKey{

    public $value;
    
    function __construct($value){

        $this->value = $value;

    }
}

?>

