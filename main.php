<?php
    $page = (!empty($_GET['page'])) ? $_GET['page'] : '';

    switch($page) {
        case 'static': 
            include 'static_page.php';
            break;
        case 'category': 
            include 'cat_list.php';
            break;
        case 'detail': 
            include 'detail.php';
            break;        
        case 'contact': 
            include 'contact.php';
            break;        
        default: 
            include 'home.php';
            break;
    }

?>