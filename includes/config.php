<?php
    /**
     * DEFINE CONSTANT  
     */
    define("CONTACT_EMAIL", "transontt@gmail.com");
    
    
    /**
     * Config HOST  
     */
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    
    $conn = mysql_connect($host,$user,$pass);
    if(!$conn) {
        die("Can't connect to MySQL Database");
    }
    mysql_select_db("vdeal",$conn);
    
    
    $ROOT_URL ="http://localhost";
    
?>
