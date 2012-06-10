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
$selected = (isset($_GET['cid'])) ? $_GET['cid']: '';
?>
    <li <?php echo ($selected == '')?'class="active"':'';?> ><a href="index.php">HOME</a></li>
<?php    
$result = mysql_query('SELECT * FROM categories WHERE status = 1 order by sort_order');
while($row = mysql_fetch_object($result)):
    $filter = null;
    if($row->is_static_page == 1):
        $filter = "static";
    else:    
        $filter = "category";
    endif;
?>
    <li <?php echo ($selected == $row->id)?'class="active"':'';?>><a href="index.php?page=<?=$filter?>&cid=<?=$row->id?>"><?php echo strtoupper($row->name);?></a></li>
<?php endwhile;?>
    <li <?php echo ($selected === 0)?'class="active"':'';?>><a href="index.php?page=contact&cid=0">CONTACT US</a></li>
</ul>