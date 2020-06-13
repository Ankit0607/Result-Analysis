<?php

require("configure.php");
$branch_id = ($_REQUEST["branch_id"] <> "") ? trim($_REQUEST["branch_id"]) : "";
if ($branch_id <> "") {
    $sql = "SELECT * FROM tbl_subject WHERE branch_id = :sid ORDER BY subject_name";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":sid", trim($branch_id));
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo($ex->getMessage());
    }
     if (count($results) > 0) {
        ?>
subject
<select name="subject" name="box" class="form-control">
    <option value="">-- Please Select --</option>
    <?php foreach ($results as $rs) { ?>
    <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["subject_name"]; ?></option>
    <?php } ?>
</select>

<?php
    }
}
?>