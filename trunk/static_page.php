<?php
    $cat_id = (isset($_GET['cid'])) ? $_GET['cid']: '';
    $result = mysql_query('SELECT * FROM categories WHERE status = 1 AND is_static_page = 1 AND id='.$cat_id);    
?>

<h3 id="title" class="title"></h3>
<div class="content_box">
    <?php if(mysql_num_rows($result) > 0):
        $row = mysql_fetch_object($result);
        
        echo $row->description; 
    endif; ?>
</div>
<script>
    var menuTile = $('#menu_header .active').text();
    $('h3#title').text(menuTile);
</script>