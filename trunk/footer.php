<?php $result = mysql_query('SELECT * FROM categories WHERE status = 1 order by sort_order');?>

<div class="footer_menu">
    <ul>
        <li><a href="index.php">Home</a></li>
    <?php while($row = mysql_fetch_object($result)):
        $filter = null;
        if($row->is_static_page == 1):
            $filter = "static_page";
        else:    
            $filter = "cat_list";
        endif;
    ?>
        <li><a href="index.php?page=<?=$filter?>&cat_id=<?=$row->id?>"><?php echo $row->name;?></a></li>
    <?php endwhile;?>
        <li><a href="index.php?page=contact&cat_id=0">Contact Us</a></li>
    </ul>
    <div class="clear"></div>
    <span>Copyright &copy; 2012 vdeal.asia</span>
</div>
<?php mysql_close($conn);?>