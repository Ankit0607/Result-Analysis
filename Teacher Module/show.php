<html>
    <head>
        <title>Result Analyser</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="assets/images/dlogo.png" type="image/x-icon">
        <meta name="description" content="Website Creator Description">
        
        <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assets/tether/tether.min.css">
        <link rel="stylesheet" href="assets/dropdown/css/style.css">
        <link rel="stylesheet" href="assets/theme/css/style.css">
        <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
        <link rel="stylesheet" href="assets1/socicon/css/styles.css">
        <link rel="stylesheet" href="assets1/dropdown/css/style.css">
        <link rel="stylesheet" href="assets1/animatecss/animate.min.css">
        <link rel="stylesheet" href="assets1/tether/tether.min.css">
        <link rel="stylesheet" href="assets1/theme/css/style.css">
        <link rel="preload" as="style" href="assets1/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets1/mobirise/css/mbr-additional.css" type="text/css">
    
    </head>

    <body>
        <div class="container">

            <div>
            <?php
                include "tmenu.php";
            ?>
            </div>

            <div class="row">
                <div class="col-md-12">
                <form action="" method="post">
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 1280px; margin-top: 90px; margin-left: -80px;">
                        <div class="card-body">
                            <h1 class="card-title display-2 text-secondary" style="margin-top: -17px;">Select Record</h1>
                            <table class="table table-borderless">
                                <tr>
                                    <td>
                                        Year<select name="y1" class="form-control">
                                            <option>1st Year</option>
                                            <option>2nd Year</option>
                                            <option>3rd Year</option>
                                            <option>4th Year</option>
                                        </select>
                                    </td>
                                    
                                    <td>
                                         Branch<select name="bh1" class="form-control">
                                            <option>Computer Science</option>
                                            <option>Information Technology</option>
                                            <option>Electrical Engineering</option>
                                            <option>Electrical & Electronics</option>
                                            <option>Mechanical Engineering</option>
                                            <option>Civil Engineering</option>
                                    </select>
                                    </td>
                                    
                                    <td>
                                         Branch<select name="bh1" class="form-control">
                                            <option>Computer Science</option>
                                            <option>Information Technology</option>
                                            <option>Electrical Engineering</option>
                                            <option>Electrical & Electronics</option>
                                            <option>Mechanical Engineering</option>
                                            <option>Civil Engineering</option>
                                        </select>
                                    </td>
                                    
                                    <td>
                                        Semester<select name="s1" class="form-control">
                                            <option>Odd</option>
                                            <option>Even</option>
                                        </select>
                                    </td>

                                    <td>
                                        Subject<select name="s1" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="submit" value="Search" name="b1" class="btn btn-primary"/><br>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-12">
                <!-- <?php
                if(isset($_POST["b1"])){
                    require("dbconnect.php");
                    $grn=$_POST["t1"];
                    $sql="select * from stu where rn=$grn";
                    $rs=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($rs)>0){
                        ?> -->
                        <table class="table table-bordered">
                            <tr class="bg-primary">
                                <td>Roll Number</td>
                                <td>Name</td>
                                <td>Branch</td>
                                <td>Semester</td>
                                <td>Marks</td>
                            </tr>
                            <!-- <?php
                                require("dbconnect.php");
                                $sql="select * from stu where rn=$grn";
                                $rs=mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_array($rs)){
                            ?>
                            <tr>
                                <td><?php echo $row["rn"]; ?> </td>
                                <td><?php echo $row["name"]; ?> </td>
                                <td><?php echo $row["course"]; ?> </td>
                                <td><?php echo $row["sem"]; ?> </td>
                            </tr>
                            <?php
                            }
                            ?> -->
                        </table>
                    <!-- <?php    
                    }
                    else{
                        echo"<br><div style='color:red'>Record not Found";
                    }
                }
                ?> -->
            </div>
            </form>
        </div>
       
    </div>
        <?php 
        include 'footer.php'
    ?>
        <script src="assets/web/assets/jquery/jquery.min.js"></script>
        <script src="assets/popper/popper.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/tether/tether.min.js"></script>
        <script src="assets/dropdown/js/nav-dropdown.js"></script>
        <script src="assets/dropdown/js/navbar-dropdown.js"></script>
        <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
        <script src="assets/parallax/jarallax.min.js"></script>
        <script src="assets/mbr-flip-card/mbr-flip-card.js"></script>
        <script src="assets/smoothscroll/smooth-scroll.js"></script>
        <script src="assets/theme/js/script.js"></script>
       
    </body>
</html>
