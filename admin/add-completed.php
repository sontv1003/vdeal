<?php
require_once('../includes/config.php');
require_once('../includes/util.php');
//====================================================
require_once('class/project/objProject.php');
require_once('class/project/project.php');
require_once('class/areawises/areawises.php');
$Util = new Util();
require_once('common/include/alert.php');
$alert = new alert();

if (isset($_POST['areawise']) && $_POST['areawise'] != "" && isset($_POST["name"])
        && isset($_POST['picture']) && isset($_POST['summary']) && isset($_POST['description'])) {
    $project = new objProject();
    $project->setID(0);
    $project->setCateID(3);
    $project->setAreaID($_POST['areawise']);
    $project->setName($_POST["name"]);
    $project->setPicture($_POST['picture']);
    $project->setSummary($_POST['summary']);
    $project->setDescription($_POST['description']);
    $project->setStatus(1);

    $doInsert = new project();
    $doInsert->insertProject($project, $conn, $alert);
}
?>
<script>
    $(document).ready(function(){
        $("#frmAdd").validationEngine('attach', {promptPosition : "centerLeft", autoPositionUpdate : true});
    });
</script>
<h2>
   Add Completed
    <span class="l"></span><span class="r"></span>
</h2>
<div class="hide"><span class="s">Show</span><span class="h">Hide</span></div>
<div class="block">
    <div class="block_in">
        <div class="grid_12">
            <form class="form_place" id="frmAdd" action="" method="post" name="frmAdd">

                <section class="form_row">
                    <div class="grid_2"><label>Areawise :</label></div>
                    <div class="grid_10">
                        <div class="block_content">
                            <select data-placeholder="Choose a Areawise..." name="areawise" class="chzn-select-deselect" style="width:350px;" tabindex="1">
                                <?php
                                $cate = new areawises();
                                $result = $cate->getAllAreawises($conn);
                                while ($row = mysql_fetch_object($result)) {
                                    echo ' <option value=' . $row->id . '>' . $row->name . '</option> ';
                                }
                                ?>

                            </select>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>

                <section class="form_row">
                    <div class="grid_2"><label>Name :</label></div>
                    <div class="grid_10">
                        <div class="block_content">
                            <input type="text" name="name" id="name" class="validate[required] i-format" required="required" />
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>


                <section class="form_row">
                    <div class="grid_2"><label>Picture :</label></div>
                    <div class="grid_10">
                        <div class="block_content">
                            <input type="text" name="picture" id="picture" class="validate[required] i-format" required="required" />
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>


                <section class="form_row">
                    <div class="grid_2"><label>Summary :</label></div>
                    <div class="grid_10">
                        <div class="block_content">
                            <textarea cols="80" class="validate[required] i-format" name="summary" id="summary" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>

                <section class="form_row">
                    <div class="grid_2"><label>Description :</label></div>
                    <div class="grid_10">
                        <div class="rich_editor">
                            <textarea class="validate[required] ckeditor" cols="80" id="description" name="description" rows="10"></textarea>
                            <script type="text/javascript">
                                //<![CDATA[
                                CKEDITOR.replace( 'description',
                                {
                                    toolbar : 'MyToolbar'
                                });
                                //]]>
                            </script> <!-- Open "ckeditor/config.js" to edit options. -->
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>

                <section class="form_row">
                    <div class="grid_2"><div class="field_name"></div></div>
                    <div class="grid_10">
                        <div class="block_content">
                            <input class="button blue medium" type="submit" value="Submit" />
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>
            </form>                
        </div>                                
    </div>
</div>
