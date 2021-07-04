<?php

require("Connection.php");

class Model{

    function save(){

        $sqlCols = "(";
        $sqlVals = "(";
        
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

        Connection::execute($sql);
    }
 
}

?>