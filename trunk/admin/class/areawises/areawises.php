<?php
class areawises {
    function getAllAreawises($con) {
        $conn = $con;
        $result = mysql_query('SELECT * FROM areawises WHERE status = 1 order by sort_order',$conn);
        mysql_close($conn);
        return $result;
    }
}

?>
