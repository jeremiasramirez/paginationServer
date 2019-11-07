<?php


/* class database */

class DATABASE {

    protected $host;
    protected $user;
    protected $password;
    protected $db;


    function __construct(){
        $this->host = "127.0.0.1";
        $this->user = "jere";
        $this->password = "0847";
        $this->db = "paginationServer";
    }

//    return host


    function get_host(){
        return $this->host;
    }

//return user
    function get_user(){
        return $this->user;
    }

//    return password
    function get_password(){
        return $this->password;
    }

//  return database name
    function get_db(){
        return $this->db;
    }

//    return mysql

    function get_database(){

        try{
            $conection = new mysqli(

                $this->get_host(),
                $this->get_user(),
                $this->get_password(),
                $this->get_db()
            );

            if(mysqli_connect_errno($conection)){
                echo json_encode(array("error" => mysqli_connect_error($conection)));
            }
            return $conection;

        }catch(Exception $e){
            echo $e->getMessage();
        }


    }



}






