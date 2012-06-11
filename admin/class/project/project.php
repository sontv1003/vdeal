<?php

class project {
    function insertProject($projectObj, $con,$alert) {
        $conn = $con;
        $sql = "INSERT INTO projects (id, cat_id, area_id,name,picture,summary,description,status)
        VALUES (" . $projectObj->getID() . "," . $projectObj->getCateID() . "," . $projectObj->getAreaID() . ",
            '" . $projectObj->getName() . "','" . $projectObj->getPicture() . "','" . $projectObj->getSummary() . "',
                '" . $projectObj->getDescription() . "'," . $projectObj->getStatus() . ")";

        if (!mysql_query($sql, $conn)) {
            echo $alert->getMessage("error", "Cannot add a project, please try again!");
        };

        echo $alert->getMessage("info", "Add project is successfully!");
        mysql_close($conn);
    }

}

?>
