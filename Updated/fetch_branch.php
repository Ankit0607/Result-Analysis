<?php

require("configure.php");
$year_id = ($_REQUEST["year_id"] <> "") ? trim($_REQUEST["year_id"]) : "";
if ($year_id <> "") {
    $sql = "SELECT * FROM tbl_branch WHERE year_id = :cid ORDER BY branch_name";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":cid", trim($year_id));
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo($ex->getMessage());
    }
    if (count($results) > 0) {
        ?>
        branch 
            <select name="branch" class="form-control" onchange="showsubject(this);">
                <option value="">-- Please Select --</option>
                <?php foreach ($results as $rs) { ?>
                    <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["branch_name"]; ?></option>
                <?php } ?>
            </select>
        
        <?php
    }
}
?>