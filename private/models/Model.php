<?php

require("Connection.php");

class Model{

    function save(){

        $sqlCols = "(";
        $sqlVals = "(";
        
        foreach ($this as $key=>$value){

            if(get_class((object)$value) == "PrimaryKey" ){

                $sqlCols = $sqlCols.$key.",";
                $sqlVals = $sqlVals."'".$value->value."'".",";

            }else if($key != "tableName"){
                
                $sqlCols = $sqlCols.$key.",";
                $sqlVals = $sqlVals."'".$value."'".",";
            }

        }

        $sqlCols = substr($sqlCols, 0, -1);
        $sqlVals = substr($sqlVals, 0, -1);

        $sqlCols = $sqlCols.")";
        $sqlVals = $sqlVals.")";

        $sql = "INSERT INTO " . $this->tableName . " " .$sqlCols. " VALUES " . $sqlVals;

        Connection::execute($sql);
    }

    function delete(){

        foreach ($this as $key=>$value){

            if (get_class((object)$value) == "PrimaryKey"){
                break;
            }

        }

        $sql = "DELETE FROM " . $this->tableName . " WHERE ". $key . " = ". $value->value;
        Connection::execute($sql);
    }
 
}

class PrimaryKey{

    public $value;
    
    function __construct($value){

        $this->value = $value;

    }
}

?>

