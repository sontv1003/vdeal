<?php

class categoy {

    function getAllCategory($con) {
        $result = mysql_query('SELECT * FROM categories WHERE status = 1 order by sort_order',$con);
       
        mysql_close($con);
        return $result;
    }

}

?>
