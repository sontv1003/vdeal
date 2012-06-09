<?php   
    $pid = (isset($_GET['project_id'])) ? $_GET['project_id']: '';
    $result = mysql_query('SELECT * FROM projects WHERE status = 1 AND id = '.$pid);
?>

<h3 id="title" class="title"></h3>
<div class="content_box">
    <h3 class="post_title"></h3>
<?php if(mysql_num_rows($result) > 0): 
        $row = mysql_fetch_object($result);
?>
    <h3 class="post_title"><?=$row->name?></h3>
    <?=$row->description;?>
<?php else: ?>
    <span class="error">Data is empty.</span>
<?php endif;?>
</div>



<script>
    var menuTile = $('#menu_header .active').text();
    $('h3#title').text(menuTile);
</script>