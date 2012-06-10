<?php
    $result = mysql_query("SELECT * FROM areawises WHERE status = 1 order by sort_order");
    $selected = (isset($_GET['aid'])) ? $_GET['aid']: '';
    
    $url = $Util->currentURL();
    if($Util->checkIsParamInURL($url)) {
        $url .='?';
    }
    //Remove parameters aid and p in URL
    $url = $Util->remove_querystring_var($url,'aid');
    $url = $Util->remove_querystring_var($url,'p');
?>
<ul class="area_list box">
    <li>Areawise Listing</li>
<?php  while ($row = mysql_fetch_object($result)): ?>
    <li <?php echo ($selected == $row->id) ? 'class="active"':''?>><a id="area_<?php echo $row->id;?>" href="<?=$url?>&aid=<?php echo $row->id;?>"><?php echo $row->name;?></a></li>
<?php endwhile; ?>
</ul>