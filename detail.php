<?php   
    $pid = (isset($_GET['pid'])) ? $_GET['pid']: '';
    $result = mysql_query('SELECT * FROM projects WHERE status = 1 AND id = '.$pid);
?>
<div class="content_box">
<?php if(mysql_num_rows($result) > 0): 
        $row = mysql_fetch_object($result);
?>
    <h3 class="post_title"><?=$row->name?></h3>
    <?=$row->description;?>
<?php else: ?>
    <span class="error">Data is empty.</span>
<?php endif;?>
</div>