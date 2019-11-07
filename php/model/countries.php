<?php

include "DATABASE.php";


class countries extends DATABASE{



//    get countries
    function get_countries(){

        $conection = parent::get_database();
        $table = "countries";
        $registers = [];
        $iterator = 0;


        try{

            $sqlLengthCountries = "SELECT * FROM $table";
            $queryLength = $conection->query($sqlLengthCountries);
            $sizeRows = ceil($queryLength->num_rows / 5);

            echo $sizeRows;







            $sqlStatement = "SELECT * FROM $table LIMIT 0, $sizeRows";
            $querySql = $conection->query($sqlStatement);

            while($row = mysqli_fetch_array($querySql)){
                $registers[$iterator] = $row;
                $iterator ++;
            }

            echo json_encode(array(
                "data"=>$registers
            ));


        }catch(Exception $e){
            echo json_encode(array("err"=>$e->getMessage()));
        }


    }

}


//$country = new countries();
//$country->get_countries();
//
//

























