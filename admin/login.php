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

    <body class="login_background">

    <section class="container">
        <section class="container_12">
            <section id="page_content" class="page_content">

                <div class="login_box">
                    <h2>
                        <span class="title">administration panel</span>
                        <span class="l"></span><span class="r"></span>
                    </h2>
                    <div class="login_block_in">
                        <form action="index.html">
                            <div class="login_row">
                                <input type="text" id="username" class="username" placeholder="username" />
                            </div>
                            <div class="clear"></div>
                            <div class="login_row">
                                <input type="password" id="password" class="password" placeholder="password" />
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