<?php   
    $cat_id = (isset($_GET['cat_id'])) ? $_GET['cat_id']: '';
    $result = mysql_query('SELECT * FROM projects WHERE status = 1 AND cat_id = '.$cat_id.' order by id desc');
?>

<h3 id="title" class="title"></h3>
<div class="content_box">
<?php if(mysql_num_rows($result) > 0): ?>
    <?php while($row = mysql_fetch_object($result)):?>
    <div class="post">
        <div class="left img">
            <a href="index.php?page=detail&cat_id=<?=$cat_id?>&project_id=<?=$row->id?>"><img src="images/uploads/<?=$row->picture?>" width="180px"/></a>
            <label class="title"><a href="index.php?page=detail&cat_id=<?=$cat_id?>&project_id=<?=$row->id?>"><?=$row->name?></a></label>
        </div>
        <div class="right summary">
            <span class="summary_text">                
                <?=$row->summary?>
            </span>
            <span class="detail"><a href="index.php?page=detail&cat_id=<?=$cat_id?>&project_id=<?=$row->id?>">Click for details...</a></span>
        </div>
        <div class="clear"></div>
    </div>
    <?php endwhile;?>
<?php else: ?>
    <span class="error">Data is empty.</span>
<?php endif;?>
</div>



<script>
    var menuTile = $('#menu_header .active').text();
    $('h3#title').text(menuTile);
</script>