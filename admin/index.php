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
                        <?php
                        $page = (isset($_GET['page'])) ? $_GET['page'] : '';
                        if (!empty($page)) {
                            include $page . '.php';
                        } else {
                            include 'home.php';
                        }
                        ?>

                    </div>
                </div><!-- End of grid_12 -->
            </section><!-- end of #page_content -->
        </section><!-- end of #container_12 -->
    </section><!-- end of #container -->
    <script src="<?php echo $hostname . "/admin/common" ?>/js/ui_calls.js" type="text/javascript"></script>
    <script src="<?php echo $hostname . "/admin/common" ?>/js/scripts.js" type="text/javascript"></script>
</body>
</html>