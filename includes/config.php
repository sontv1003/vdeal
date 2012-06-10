<?php
    /**
     * DEFINE CONSTANT  
     */
    define("CONTACT_EMAIL", "vdealproperties@gmail.com"); // Admin's email receive Contact us
    define("NUMS_ROW_PAGINATE", 10); //Nums row in a page (Project list)
    
    
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
