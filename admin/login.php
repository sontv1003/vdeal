<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
//Common
require_once('../includes/config.php');
require_once('../includes/util.php');
require_once('../admin/common/include/alert.php');
//======================================
$Util = new Util();
$alert = new alert();
require_once('../admin/class/login/authentication.php');
$auth = new authentication();

$hostname = $Util->getServerName();

?>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"> 

    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="UTF-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="<?php echo $hostname . '/admin/common' ?>/css/reset.css" />
        <link rel="stylesheet" href="<?php echo $hostname . '/admin/common' ?>/css/grid.css" />
        <link rel="stylesheet" href="<?php echo $hostname . '/admin/common' ?>/css/uniform.default.css" />
        <link rel="stylesheet" href="<?php echo $hostname . '/admin/common' ?>/css/chosen.css" />
        <link rel="stylesheet" href="<?php echo $hostname . '/admin/common' ?>/plugins/jqueryui/all/themes/base/jquery.ui.all.css" />
        <link rel="stylesheet" href="<?php echo $hostname . '/admin/common' ?>/plugins/dialogs/jquery-fallr-1.0.css" />
        <link rel="stylesheet" href="<?php echo $hostname . '/admin/common' ?>/css/style.css" />
        <link rel="stylesheet" href="<?php echo $hostname . '/admin/common' ?>/css/config.css" />
        <!--[if gte IE 8]><link rel="stylesheet" href="<?php echo $hostname . "/admin/common" ?>/css/ie8.css" /><![endif]-->
        <!--============ JQUERY =============-->
        <script src="<?php echo $hostname . "/admin/common" ?>/js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo $hostname . "/admin/common" ?>/js/jquery.uniform.js" type="text/javascript"></script>
        <script src="<?php echo $hostname . "/admin/common" ?>/js/chosen.jquery.js" type="text/javascript"></script>
        <script src="<?php echo $hostname . "/admin/common" ?>/js/jquery.placeholder.js" type="text/javascript"></script>
        <script src="<?php echo $hostname . "/admin/common" ?>/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="<?php echo $hostname . "/admin/common" ?>/plugins/dialogs/jquery-fallr-1.2.js" type="text/javascript"></script>
        <script src="<?php echo $hostname . "/admin/common" ?>/plugins/jqueryui/all/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo $hostname . "/admin/common" ?>/plugins/gvchart/jquery.gvChart-1.0.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $hostname . "/admin/common" ?>/js/scriptbreaker-multiple-accordion-1.js"></script>
        <script src="<?php echo $hostname . "/admin/common" ?>/js/head_scripts.js" type="text/javascript"></script>
        <!--=== ENABLE HTML5 TAGS FOR IE ===-->
        <!--[if IE]><script src="<?php echo $hostname . "/admin/common" ?>/js/html5.js"></script><![endif]-->

        <title>vDeal.asia - Admin Control Panel</title>
    </head>

    <body class="login_background">

    <section class="container">
        <section class="container_12">
            <section id="page_content" class="page_content">
                <?php
                session_start();
                session_destroy();
                if (isset($_POST['username']) && isset($_POST["password"])) {
                    $auth->doLogin($_POST['username'], $_POST["password"], $Util,$alert);
                }
                ?>
                <div class="login_box">
                    <h2>
                        <span class="title">administration panel</span>
                        <span class="l"></span><span class="r"></span>
                    </h2>
                    <div class="login_block_in">
                        <form name="formLogin" action="" method="post">
                            <div class="login_row">
                                <input type="text" id="username" name="username" class="username" placeholder="username" />
                            </div>
                            <div class="clear"></div>
                            <div class="login_row">
                                <input type="password" id="password" name="password" class="password" placeholder="password" />
                            </div>
                            <div class="clear"></div>
                            <!--                            <a href="#" class="lostpassword">Lost password?</a>-->
                            <input type="submit" id="submit" class="button blue alignright login_submit" value="Login" />
                        </form>
                    </div>
                </div>
                <div class="clear"></div>
            </section><!-- end of #page_content -->
        </section><!-- end of #container_12 -->
    </section><!-- end of #container -->

    <script src="common/js/ui_calls.js" type="text/javascript"></script>
    <script src="common/js/scripts.js" type="text/javascript"></script>
</body>

</html>