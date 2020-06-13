<?php
    require("configure.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Result Analyser</title>
    <link rel="shortcut icon" href="../Teacher Module/assets/images/dlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">



</head>

<body id="page-top">
    <div id="wrapper">
        <?php include "nav.php" ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <?php include "nav2.php" ?>
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary font-weight-bold m-0">Report Generation</h6>

                                </div>

                                <table class="table table-borderless">
                                    <tr>
                                        <td>
                                            <?php
                                $sql = "SELECT * FROM tbl_year ORDER BY year_name";
                                try {
                                    $stmt = $DB->prepare($sql);
                                    $stmt->execute();
                                    $results = $stmt->fetchAll();
                                } catch (Exception $ex) {
                                    echo($ex->getMessage());
                                }
                                ?>
                                            year <select name="year" class="form-control" onChange="showbranch(this);">
                                                <option value="">-- Please Select --</option>
                                                <?php foreach ($results as $rs) { ?>
                                                <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["year_name"]; ?>
                                                </option>
                                                <?php } ?>
                                            </select>

                                        </td>

                                        <td>
                                            <div id="output1"></div>
                                        </td>



                                        <td>
                                            <div id="output2"></div>
                                        </td>
                                    </tr>
                                    <script src="jquery-1.9.0.min.js"></script>
                                    <script>
                                        function showbranch(sel) {
                                            var year_id = sel.options[sel.selectedIndex].value;
                                            $("#output1").html("");
                                            $("#output2").html("");
                                            if (year_id.length > 0) {

                                                $.ajax({
                                                    type: "POST",
                                                    url: "fetch_branch.php",
                                                    data: "year_id=" + year_id,
                                                    cache: false,
                                                    beforeSend: function () {
                                                        $('#output1').html(
                                                            '<img src="loader.gif" alt="" width="24" height="24">'
                                                            );
                                                    },
                                                    success: function (html) {
                                                        $("#output1").html(html);
                                                    }
                                                });
                                            }
                                        }

                                        function showsubject(sel) {
                                            var branch_id = sel.options[sel.selectedIndex].value;
                                            if (branch_id.length > 0) {
                                                $.ajax({
                                                    type: "POST",
                                                    url: "fetch_subject.php",
                                                    data: "branch_id=" + branch_id,
                                                    cache: false,
                                                    beforeSend: function () {
                                                        $('#output2').html(
                                                            '<img src="loader.gif" alt="" width="24" height="24">'
                                                            );
                                                    },
                                                    success: function (html) {
                                                        $("#output2").html(html);
                                                    }
                                                });
                                            } else {
                                                $("#output2").html("");
                                            }
                                        }
                                    </script>


                                    <tr>
                                        <td>
                                            <input type="submit" value="Generate Report" name="b1"
                                                class="btn btn-primary" /><br>
                                        </td>
                                    </tr>
                                </table>
                            </div>



                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>

    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>


</html>