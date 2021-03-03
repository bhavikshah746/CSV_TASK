<?php

print_r(0);
//CSV task
require_once "connection.php";

class CSV_Task{
    
    private $con;
    
    function __construct(){
        $db = new DBConn();
        $this->con = $db->connect(); 
    }


    function csv_upload(){
        
        $fileName = $_FILES["file"]["tmp_name"];
        
        if($_FILES["file"]["tmp_name"]>0){
            $file = fopen($fileName,"r");
        
            while(($column = fgetcsv($file, 10000, ","))!=FALSE){
                $name = "";
                if (isset($column[0])) {
                    $name = mysqli_real_escape_string($conn, $column[0]);
                }
        
                $sname ="";
                if (isset($column[1])) {
                    $sname = mysqli_real_escape_string($conn, $column[1]);
                }
        
                $email ="";
                if (isset($column[2])) {
                    $email = mysqli_real_escape_string($conn, $column[2]);
                }
        
                $insert = "Insert into csvTbl (name, sname, email) Values (?,?,?)";
                $paramType = "sss";
                $paramArray = array($name,$sname,$email);
        
                $insertId = $db->insert($insert, $paramType, $paramArray);
        
                if(!empty($insertId)){
                    $errFlg = 0;
                }else{
                    $message = "Issue while inserting CSV data";
                    $errFlg = 1;
                }
            }
        }
    }
}



?>
