<?php

Class Util {
    function currentURL() {
        $pageURL = 'http';
        if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        }
        return $pageURL;
    }
    
    function checkIsParamInURL($url) {
        $pos = strpos($url, "?");
        if($pos && $pos<strlen($url)){
            return false;
        }
        
        return true;
    }
    function getServerName(){
        $pageURL = 'http';
        if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
        } else {
        $pageURL .= $_SERVER["SERVER_NAME"];
        }
        return $pageURL."/vdeal-project";
    }
    
    function getFileNameImage($file_name) {
        if(!empty($file_name)) {
            return $file_name;
        }
        
        return 'no-images.jpg';
    }
    
    function remove_querystring_var($url, $key) { 
        $url = preg_replace('/(.*)(?|&)' . $key . '=[^&]+?(&)(.*)/i', '$1$2$4', $url . '&'); 
        $url = substr($url, 0, -1); 
        return $url; 
    }
    
    function getTitle($cid) {
        if(TRIM($cid) === '') {
           return 'Home';
        }elseif($cid == 0) {
            return 'Contact Us';
        }else {
             $result = mysql_query('SELECT name FROM categories WHERE status = 1 AND id = '.$cid);
             if(mysql_num_rows($result) > 0) {
                 $row = mysql_fetch_object($result);
                 return $row->name;
             }
             
             return 'Home';
        }
    }
    
    function encryptPassword($str){
        return md5("vdeal_SonDepTrai".$str);
    }
}
?>
