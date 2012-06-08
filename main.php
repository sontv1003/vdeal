<?php
    $page = (!empty($_GET['page'])) ? $_GET['page'] : '';
    
    switch($page) {
        case 'static_page': 
            include 'static_page.php';
            break;
        case 'cat_list': 
            include 'cat_list.php';
            break;
        case 'detail': 
            include 'detail.php';
            break;        
        default: 
            include 'home.php';
            break;
    }
    
?>