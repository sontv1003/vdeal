<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
require_once('../includes/config.php');
require_once('../includes/util.php');
$Util = new Util();
$hostname = $Util->getServerName();
?>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"> 
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="UTF-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <?php
        include '../admin/common/include/header.php';
        ?>
       
    </head>
    <body>
        <?php include '../admin/common/include/sidebar.php'; ?>
    <section class="container">
        <section class="container_12">
            <section id="page_content" class="page_content">				
                <div class="grid_12">
                    <div class="box">
                        <h2>
                            Statistics
                            <span class="l"></span><span class="r"></span>
                        </h2>
                        <div class="hide"><span class="s">Show</span><span class="h">Hide</span></div>
                        <div class="block">
                            <div class="block_in">
                                <div class="grid_12">
                                    hjh
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div><!-- End of grid_12 -->
            </section><!-- end of #page_content -->
        </section><!-- end of #container_12 -->
    </section><!-- end of #container -->
    <script src="<?php echo $hostname . "/vdeal-project/admin/common" ?>/js/ui_calls.js" type="text/javascript"></script>
    <script src="<?php echo $hostname . "/vdeal-project/admin/common" ?>/js/scripts.js" type="text/javascript"></script>
</body>
</html>