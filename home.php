<?php
    $cat_query = mysql_query('SELECT id,name FROM categories WHERE status = 1 order by sort_order');
while($cat = mysql_fetch_object($cat_query)):
    $project_query = mysql_query('SELECT id,area_id,name,picture FROM projects WHERE status = 1 AND cat_id = '.$cat->id.' ORDER BY id DESC LIMIT 0,3');
    if(mysql_num_rows($project_query) > 0):
?>
    <h3 class="title"><?=strtoupper($cat->name)?></h3>
    <div class="cat">
        <?php 
            while($project = mysql_fetch_object($project_query)):
        ?>
            <div class="left post_feature">
                <a href="index.php?page=detail&cid=<?=$cat->id?>&pid=<?=$project->id?>&aid=<?=$project->area_id?>"><img src="images/uploads/<?=$Util->getFileNameImage($project->picture)?>" width="180px"/></a>
                <label class="title"><a href="index.php?page=detail&cid=<?=$cat->id?>&pid=<?=$project->id?>&aid=<?=$project->area_id?>"><?=$project->name?></a></label>
            </div>
        <?php endwhile;?>
        <div class="clear"></div>
    </div>
    <?php else: ?>
    
    <?php endif; ?>
<?php endwhile; ?>
    <div class="contact_home_box">
        <label>V Deal Properties</label>
        <label>Plot No.317, Door No.7</label>
        <label>4th Main Road, Kamarajar nagar,</label>
        <label>Tiruvanmiyur, Chennai-60041</label>
        <label>Phone: 004 45122122 / 45022122</label>
        <label>Mobile: +91 9940008931 / 9940008934 / 9940008940</label>
        <label>Email: <a href="mailto:info@vdeal.asia">info@vdeal.asia</a>, <a href="mailto:vdealproperties@gmail.com">vdealproperties@gmail.com</a></label>
    </div>