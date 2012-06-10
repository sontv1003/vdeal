<?php
require_once('/common/plugins/ckeditor/ckeditor.php');
$CKEditor = new CKEditor('description');
$CKEditor->BasePath = '/common/plugins/ckeditor/';
$CKEditor->Value = 'Custom';
?>

<div class="form">
    <form id="frmCategoryAdd" action="category_progress.php" method="post">
        <label>Name</label><input type="text" class="" name="name" value="" />
        <div class="clear"></div>
        
        <label>Description</label>
        <div style="float: left; margin-bottom: 10px;"><?php $CKEditor->editor("editor1", "",array('width' => '620px'));?></div>
        <div class="clear"></div>
        
        <label>Sort Order</label><input type="text" class="" name="sort_order" value="" />
        <div class="clear"></div>
        
        <label>Static Page</label>
        <select name="is_static_page">
            <option value="0">No</option>
            <option value="1">Yes</option>
        </select>
        <div class="clear"></div>
        
        <label>Status</label>
        <select name="status">
            <option value="1">Show</option>
            <option value="0">Hidden</option>
        </select>
        <div class="clear"></div>
        
        <label>.</label> <input type="submit" class="" name="submit" value="Submit" />
       
    </form>
</div>