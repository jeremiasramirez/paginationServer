<?php

include "DATABASE.php";


class countries extends DATABASE{



//    get countries
    function get_countries($pages=0){

        $conection = parent::get_database();
        $table = "countries";
        $registers = [];
        $iterator = 0;


        try{
            /*getting size of rows*/
            $sqlLengthCountries = "SELECT * FROM $table";
            $queryLength = $conection->query($sqlLengthCountries);

            /*size of rows*/
            $sizeRows = ceil($queryLength->num_rows / 5);
            $sizeRows_ = ceil($queryLength->num_rows) - 5;
            if($pages==0){
               $pages = 0;

            }
            else{
                $pages = ceil( $pages *$sizeRows_  / 5)  - 5;
            }



            $sqlStatement = "SELECT * FROM $table LIMIT $pages, 5";
            $querySql = $conection->query($sqlStatement);

            while($row = mysqli_fetch_array($querySql)){
                $registers[$iterator] = $row;
                $iterator ++;
            }

            echo json_encode(array(
                "data" => $registers,
                "buttons" => $sizeRows
            ));


        }catch(Exception $e){
            echo json_encode(array("err"=>$e->getMessage()));
        }


    }

}
