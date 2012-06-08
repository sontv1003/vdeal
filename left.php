<?php
    $result = mysql_query("SELECT * FROM areawises WHERE status = 1 order by sort_order");
?>
<ul class="area_list">
<?php  while ($row = mysql_fetch_object($result)): ?>
    
    <li><a href="index.php?page=cat_list&area_id=<?php echo $row->id;?>"><?php echo $row->name;?></a></li>
    
<?php endwhile; ?>
</ul>