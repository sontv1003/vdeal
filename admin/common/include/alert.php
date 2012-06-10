<?php
class alert {
    function getMessage($type, $message) {
        echo "<script type=\"text/javascript\">$(document).ready(function(){
            $.fallr('show', {
                closeKey : true,
                closeOverlay : true,
                content : '<p>".$message."</p>',
                icon : '".$type."'
            })
            });</script>";
    }
}

?>
