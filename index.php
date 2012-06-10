<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
require_once('includes/config.php'); 
require_once('includes/util.php'); 
$Util = new Util();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link  rel="stylesheet" type="text/css" href="css/style.css" />
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    </head>
    <body> 
        <div id="wrap">
            <div id="header"><?php include 'header.php';?></div>            
            <div id="main">
                <div id="content_left" class="left"><?php include 'left.php';?></div>
                <div id="content" class="left"><?php include 'main.php';?></div>
                <div id="content_right" class="right"><?php include 'right.php';?></div>                
                <div class="clear"></div>
            </div>
        </div>
        <div id="footer">
            <?php include 'footer.php';?>
        </div>
    </body>
</html>