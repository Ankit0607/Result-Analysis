<html>
<head>
    <title>Result Analyser</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/dlogo.png" type="image/x-icon">
    <meta name="description" content="Website Creator Description">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

    <link rel="stylesheet" href="assets1/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets1/socicon/css/styles.css">
    <link rel="stylesheet" href="assets1/dropdown/css/style.css">
    <link rel="stylesheet" href="assets1/animatecss/animate.min.css">
    <link rel="stylesheet" href="assets1/tether/tether.min.css">
    <link rel="stylesheet" href="assets1/theme/css/style.css">
    <link rel="preload" as="style" href="assets1/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets1/mobirise/css/mbr-additional.css" type="text/css">
  

</head>

<body>  
    <div class="container">
        <section>
            <div>
                <?php
                    include "tmenu.php"
                ?>
            </div>
        </section>
        <div class="row">
            <div class="col-md-6">
                <form name="f1" action="" method="post">
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded " style="width: auto; margin-top: 90px; margin-left:-60px;">
                        <div class="card-body">
                            <h1 class="card-title display-2 text-secondary" style="margin-top: -15px; font-weight-bold">Single Record Insertion</h1>
                            Year<select name="y1" class="form-control">
                                <option>1st Year</option>
                                <option>2nd Year</option>
                                <option>3rd Year</option>
                                <option>4th Year</option>
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
                            Roll<input type="number" name="t1" placeholder="e.g 1728410019" class="form-control"/><br>
                            Marks<input type="number" name="t4" placeholder="e.g 00" class="form-control"/><br>
                            <input type="submit" value="Insert" name="b1" class="btn btn-primary">
                        </div>
                    </div>
                </form>    
            </div>
        
            <div class="col-md-6">
                <form name="f1" action="" method="post">
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 610px; margin-top: 90px;margin-right: 100px;">
                        <div class="card-body">
                            <h1 class=" card-title display-2 text-secondary" style="margin-top: -15px;">Multiple Record Insertion</h1>
                            <br> <br><br><br><br><br><br><br>
                            <br><br> <br><br><br><br><br>
                            <input type="submit" value="Insert" name="b1" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php
        include "footer.php"
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
