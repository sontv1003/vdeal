<?php
    $result = mysql_query("SELECT * FROM areawises WHERE status = 1 order by sort_order");
    $selected = (isset($_GET['area_id'])) ? $_GET['area_id']: '';
    
    $url = $Util->currentURL();
    if($Util->checkIsParamInURL($url)) {
        $url .='?';
    }
?>
<ul class="area_list box">
    <li>Areawise Listing</li>
<?php  while ($row = mysql_fetch_object($result)): ?>
    <li <?php echo ($selected == $row->id) ? 'class="active"':''?>><a href="<?=$url?>&area_id=<?php echo $row->id;?>"><?php echo $row->name;?></a></li>
<?php endwhile; ?>
</ul>