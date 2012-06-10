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
        return $pageURL;
    }
    
    function getFileNameImage($file_name) {
        if(!empty($file_name)) {
            return $file_name;
        }
        
        return 'no-images.jpg';
    }
    
    function RemoveParameterFromUrl($param_rm, $query='') {
        empty($query)? $query=$_SERVER['QUERY_STRING'] : '';
        echo $query;
        parse_str($query, $params);
        echo '<pre>' . print_r($params, true) . '</pre>';
        unset($params[$param_rm]);
        $newquery = '';
        foreach($params as $k => $v)
            $newquery .= '&'.$k.'='.$v;
        
        return substr($newquery,1);
    }
    
    function remove_querystring_var($url, $key) { 
    $url = preg_replace('/(.*)(?|&)' . $key . '=[^&]+?(&)(.*)/i', '$1$2$4', $url . '&'); 
    $url = substr($url, 0, -1); 
    return $url; 
    }
}
?>
