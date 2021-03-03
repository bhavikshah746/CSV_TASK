<?php
define("HOST","localhost");
define("UNAME","root");
define("PASSWORD","");
define("DB_NAME","test");

Class DBConn{
    private $con;

    function connect(){
        $this->con = new mysqli(HOST,UNAME,PASSWORD,DB_NAME);

        if(mysqli_connect_error()){
            echo "Failed to connect with database";
        }
    }
}

?>