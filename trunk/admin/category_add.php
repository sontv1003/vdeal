<?php
require_once('/common/plugins/ckeditor/ckeditor.php');
$CKEditor = new CKEditor('description');
$CKEditor->BasePath = '/common/plugins/ckeditor/';
$CKEditor->Value = 'Custom';
?>
<h2>
    vDeal Admin CP v.10
    <span class="l"></span><span class="r"></span>
</h2>
<div class="hide"><span class="s">Show</span><span class="h">Hide</span></div>
<div class="block">
    <div class="block_in">
        <div class="grid_12">
            <div class="form">
                <img src="../images/under.jpg"/>
<!--                <form id="frmCategoryAdd" action="category_progress.php" method="post">
                    <label>Name</label><input type="text" class="" name="name" value="" />
                    <div class="clear"></div>

                    <label>Description</label>
                    <div style="float: left; margin-bottom: 10px;"><?php $CKEditor->editor("editor1", "", array('width' => '620px')); ?></div>
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

                </form>-->
            </div>
        </div>
    </div>
</div>
