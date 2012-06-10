<?php   
    $cat_id = (isset($_GET['cid'])) ? $_GET['cid']: '';
    $area_id = (isset($_GET['aid'])) ? $_GET['aid']: '';
    $paginate = (isset($_GET['p'])) ? $_GET['p']: '';
    
    $offset = 0;
    $limit = NUMS_ROW_PAGINATE;
    
    if(is_numeric($paginate))
        $offset = ($paginate-1) * NUMS_ROW_PAGINATE;       
    
    $where = '';
    if(is_numeric($area_id))
        $where = ' AND area_id = '.$area_id;
    
    $result = mysql_query('SELECT * FROM projects WHERE status = 1 AND cat_id = '.$cat_id.$where.' ORDER BY id DESC LIMIT '.$offset.','.$limit);
   
    // All count records
    $count = mysql_num_rows(mysql_query('SELECT * FROM projects WHERE status = 1 AND cat_id = '.$cat_id.$where));
?>

<h3 id="title" class="title"></h3>
<div class="content_box">
<?php if(mysql_num_rows($result) > 0): ?>
    <?php while($row = mysql_fetch_object($result)):?>
    <div class="post area_<?=$row->area_id?>">
        <div class="left img">
            <a href="index.php?page=detail&cid=<?=$cat_id?>&pid=<?=$row->id?>&aid=<?=$row->area_id?>"><img src="images/uploads/<?=$Util->getFileNameImage($row->picture)?>" width="180px"/></a>
            <label class="title"><a href="index.php?page=detail&cid=<?=$cat_id?>&pid=<?=$row->id?>&aid=<?=$row->area_id?>"><?=$row->name?></a></label>
        </div>
        <div class="right summary">
            <span class="summary_text"><?=$row->summary?></span>
            <span class="detail"><a href="index.php?page=detail&cid=<?=$cat_id?>&pid=<?=$row->id?>&aid=<?=$row->area_id?>">Click for details...</a></span>
        </div>
        <div class="clear"></div>
    </div>
    <?php endwhile;?>
    
<!--  Paginate -->
    <div id="paginate">
        <?php
        $num_page = ceil((Double)$count/$limit); 
        if($num_page>1){ // Only Show Paginate when number page > 1
            $url = $Util->currentURL();
            $url = $Util->remove_querystring_var($url,'p');
            echo 'Page&nbsp;';
            for($i=1;$i <= $num_page;$i++) {
                
                $active = ($paginate == $i)? 'class="active"':'';
                echo '<span '. $active .'><a href="'.$url.'&p='.$i.'">'.$i.'</a></span>';
            }
        }
        ?>
    </div>
<!-- end Paginate -->    
<?php else: ?>
    <span class="error">Data is empty.</span>
<?php endif;?>
</div>



<script>
    var menuTile = $('#menu_header .active').text();
    $('h3#title').text(menuTile);
</script>