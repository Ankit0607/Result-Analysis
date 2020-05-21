<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Result  Analyser</title>
    <link rel="shortcut icon" href="../Teacher Module/assets/images/dlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
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
                    <div class="col-lg-6 col-xl-6">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Single Records Insertion</h6>
                                
                            </div>
                            <div class="card-body">
                                Year<select name="y1" class="form-control">
                                    <option value="1st">1st Year</option>
                                    <option value="2nd">2nd Year</option>
                                    <option value="3rd">3rd Year</option>
                                    <option value="4th">4th Year</option>
                                </select>
                                Branch<select name="bh1" class="form-control">
                                    <option>Computer Science</option>
                                    <option>Information Technology</option>
                                    <option>Electrical Engineering</option>
                                    <option>Electrical & Electronics</option>
                                    <option>Mechanical Engineering</option>
                                    <option>Civil Engineering</option>
                                </select>
                                Semester<select name="s1" class="form-control">
                                        <option>Odd</option>
                                        <option>Even</option>
                                </select>
                                Roll<input type="number" name="roll" placeholder="e.g 1728410019" class="form-control"/><br>
                                Marks<input type="number" name="marks" placeholder="e.g 00" class="form-control"/><br>
                                <input type="submit" value="Insert" name="b1" class="btn btn-primary">
                            </div>
                            </div>
                        </div>


                        <div class="col-lg-6 col-xl-6">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary font-weight-bold m-0">Multiple Record Insertion</h6>
                                   
                                </div>
                                <div class="card-body">
                                    <!-- <h1 class=" card-title display-5 text-secondary font-weight-bold" style="margin-top: -15px;">Multiple Record Insertion</h1> -->
                            <br> <br><br><br><br><br><br><br>
                            <br><br> <br><br><br>
                            <input type="submit" value="Insert" name="b1" class="btn btn-primary">
                            </div>
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