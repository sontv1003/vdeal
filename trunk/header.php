<div class="banner">
    <div class="logo left"><a href="index.php"><img src="images/logo.png" /></a></div>
    <div class="iconConnect">
        <a href="#"><img src="images/facebook.png" /></a>
        <a href="#"><img src="images/twitter.png" /></a>
    </div>
    <div class="clear"></div>
</div>
<ul id="menu_header">
<?php 
$selected = (isset($_GET['cat_id'])) ? $_GET['cat_id']: '';
?>
    <li <?php echo (empty($selected))?'class="active"':'';?> ><a href="index.php">HOME</a></li>
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
    <li <?php echo ($selected == $row->id)?'class="active"':'';?>><a href="index.php?page=<?=$filter?>&cat_id=<?=$row->id?>"><?php echo strtoupper($row->name);?></a></li>
<?php endwhile;?>
</ul>