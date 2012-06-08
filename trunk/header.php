<div class="banner">BANNER</div>
<ul id="menu_header">
    <li><a href="index.php">HOME</a></li>
<?php 
$result = mysql_query('SELECT * FROM categories WHERE status = 1 order by sort_order');
while($row = mysql_fetch_object($result)):
    $filter = null;
    if($row->is_static_page == 1):
        $filter = "static_page";
    else:    
        $filter = "cat_list";
    endif;
?>
    <li><a href="index.php?page=<?=$filter?>&cat_id=<?=$row->id?>"><?php echo $row->name;?></a></li>
<?php endwhile;?>
</ul>