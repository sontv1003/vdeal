<?php

class authentication {

    function doLogin($username, $password, $Util, $alert) {
        $passwordMD5 = $Util->encryptPassword($password);
        $username = mysql_real_escape_string($username);
        $result = mysql_query("SELECT * FROM admin WHERE username='" . $username . "' AND password='" . $passwordMD5 . "' AND status = 1");
        if ($row = mysql_fetch_object($result)) {
            session_start();
            $_SESSION['admin'] = $row;
            header("location:" . $Util->getServerName() . "/admin/index.php");
        } else {
            echo $alert->getMessage("error", "Username or password is invalid!");
        }
    }

    function preventUserNotLogin($Util) {
        if (!isset($_SESSION)) {
            session_start();
        }

        if (isset($_SESSION['admin']) != true) {
            header("location:" . $Util->getServerName() . "/admin/login.php");
        }
    }

}

?>
