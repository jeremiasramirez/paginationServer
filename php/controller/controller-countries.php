<?php

include "../model/countries.php";

$numPagination  = 0;
// $numPagination = $_GET[]

if(isset($_GET["numpagination"])){
    $numPagination = $_GET["numpagination"];
}

$country = new countries();
$country->get_countries($numPagination);