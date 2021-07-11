<?php

require("Connection.php");

class Model{

    function save(){
        // create a sql record with the child class property values
        // read properties of child class and create a mysql insert statment and execute from connection class

        $sqlCols = "("; // sql columns (column1, column2...)
        $sqlVals = "("; // sql values (value1, value2, value3..)
        
        foreach ($this as $key=>$value){

            $sqlCols = $sqlCols.$key.",";

            if(get_class((object)$value) == "PrimaryKey" )
                $sqlVals = $sqlVals."'".$value->value."'".",";

            else if($key != "tableName")
                $sqlVals = $sqlVals."'".$value."'".",";

        }
        

        $sqlCols = substr($sqlCols, 0, -1); // removes the last comma
        $sqlVals = substr($sqlVals, 0, -1); // removes the last comma

        $sqlCols = $sqlCols.")";
        $sqlVals = $sqlVals.")";

        echo($sqlCols."<br>");
        echo($sqlVals."<br>");

        // INSERT INTO table_name (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')
        $sql = "INSERT INTO " . static::$tableName . " " .$sqlCols. " VALUES " . $sqlVals;

        Connection::execute($sql);
    }

    function delete(){
        // delete the record match with the child class instaince
        // read properties of the child class, get the primary key and create sql delete satement and execute from connection class
        
        foreach ($this as $key=>$value){

            if (get_class((object)$value) == "PrimaryKey"){
                break;
            }

        }

        // "DELETE FROM table_name WHERE pk_column = value";
        $sql = "DELETE FROM " . static::$tableName . " WHERE ". $key . "='". $value->value."'"; // identify the record to delete by the primary key

        Connection::execute($sql);
    }

    public static function deleteByValue($column, $value){
        // parameter - primarykey value of the record need to be deleted 
        // delete the record match with the primaryKey value
        // read properties of the child class, get the primary key property and create sql delete satement and execute from connection class

        // "DELETE FROM table_name WHERE pk_column = value";
        $sql = "DELETE FROM " . static::$tableName . " WHERE ". $column . "='". $value."'"; // identify the record to delete by the primary key
        
        Connection::execute($sql);
    }

    static function fetch($column,$value){
        // get all records from sql table and map them into child class (create child class objects)
        // returns and array of child class objects if no record found returns null

        // SELECT * FROM table_name WHERE column_name = value 
        $sql = "SELECT * FROM " . static::$tableName . " WHERE ". $column . "='". $value . "'";
        
        $result = Connection::execute($sql);

        if ($result->num_rows > 0) {

            $objects = array();

            while($row = $result->fetch_assoc()) {

                $values = array();

                $reflectionClass = new ReflectionClass(static::class); // reflection class stores meta data of a given class
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
            // echo "0 results";
            return null;
        }
    }

    function update(){
        // update sql record's all the columns with the new property values of the child class
        // create the update sql statement and execute from connection class

        $sqlSet = ''; // column1 = value1, column2 = value2

        foreach ($this as $key=>$value){
    
            if(get_class((object)$value) == "PrimaryKey" )
                $sqlSet = $sqlSet. ' ' .$key."='".$value->value."', ";

            else if($key != "tableName")
                $sqlSet = $sqlSet. ' ' .$key."='".$value."', ";

        }

        $sqlSet = substr($sqlSet, 0, -2); // remove last comma

        // UPDATE table_name SET column1 = value1, column2 = value2
        $sql = "UPDATE " . static::$tableName . " SET ". $sqlSet;

        foreach ($this as $key=>$value){
            
            if (get_class((object)$value) == "PrimaryKey")
                break;
        }

        // UPDATE table_name SET column1 = value1, column2 = value2 WHERE id=2
        $sql = $sql . " WHERE ". $key . "='". $value->value."'";

        Connection::execute($sql);
    }
 
}

class PrimaryKey{
    // class to identify primary key value
    public $value;
    
    function __construct($value){

        $this->value = $value;

    }
}

?>

