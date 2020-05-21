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
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Profile</h3>
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4"
                                        src="assets/img/dogs/image2.jpeg" width="160" height="160">
                                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Change
                                            Photo</button></div>
                                </div>
                            </div>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary font-weight-bold m-0">Subject Results&nbsp;</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Operating System<span
                                            class="float-right">20%</span></h4>
                                    <div class="progress progress-sm mb-3">
                                        <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 20%;"><span class="sr-only">20%</span>
                                        </div>
                                    </div>
                                    <h4 class="small font-weight-bold">Discrete Mathematics<span
                                            class="float-right">40%</span></h4>
                                    <div class="progress progress-sm mb-3">
                                        <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 40%;"><span class="sr-only">40%</span>
                                        </div>
                                    </div>
                                    <h4 class="small font-weight-bold"> Database<span class="float-right">60%</span>
                                    </h4>
                                    <div class="progress progress-sm mb-3">
                                        <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 60%;"><span class="sr-only">60%</span>
                                        </div>
                                    </div>
                                    <h4 class="small font-weight-bold">Overall Result<span
                                            class="float-right">80%</span></h4>
                                    <div class="progress progress-sm mb-3">
                                        <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 80%;"><span class="sr-only">80%</span>
                                        </div>
                                    </div>
                                    <h4 class="small font-weight-bold">Account setup<span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress progress-sm mb-3">
                                        <div class="progress-bar bg-success" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 100%;"><span class="sr-only">100%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row mb-3 d-none">
                                <div class="col">
                                    <div class="card text-white bg-primary shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5%
                                                since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card text-white bg-success shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5%
                                                since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 font-weight-bold">User Settings</p>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label
                                                                for="username"><strong>Username</strong></label><input
                                                                class="form-control" type="text" placeholder="user.name"
                                                                name="username"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="email"><strong>Email
                                                                    Address</strong></label><input class="form-control"
                                                                type="email" placeholder="user@example.com"
                                                                name="email"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="first_name"><strong>First
                                                                    Name</strong></label><input class="form-control"
                                                                type="text" placeholder="John" name="first_name"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="last_name"><strong>Last
                                                                    Name</strong></label><input class="form-control"
                                                                type="text" placeholder="Doe" name="last_name"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group"><button class="btn btn-primary btn-sm"
                                                        type="submit">Save&nbsp;</button></div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card shadow">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 font-weight-bold">Contact Settings</p>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group"><label
                                                        for="address"><strong>Address</strong></label><input
                                                        class="form-control" type="text" placeholder="Sunset Blvd, 38"
                                                        name="address"></div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label
                                                                for="city"><strong>City</strong></label><input
                                                                class="form-control" type="text"
                                                                placeholder="Los Angeles" name="city"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label
                                                                for="country"><strong>Country</strong></label><input
                                                                class="form-control" type="text" placeholder="USA"
                                                                name="country"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group"><button class="btn btn-primary btn-sm"
                                                        type="submit">Save&nbsp;</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Manage Subjects</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form>
                                        <!-- <div class="form-group"><label for="signature">Year</label><select class="form-control"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select>
                                        <select
                                            class="form-control">
                                            <optgroup label="This is a group">
                                                <option value="12" selected="">This is item 1</option>
                                                <option value="13">This is item 2</option>
                                                <option value="14">This is item 3</option>
                                            </optgroup>
                                            </select><select class="form-control"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
                                    <div
                                        class="form-group">
                                        <div class="custom-control custom-switch"><input class="custom-control-input" type="checkbox" id="formCheck-1"><label class="custom-control-label" for="formCheck-1"><strong>Notify me about new replies</strong></label></div>
                            </div> -->




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
                                                    s
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




                                        <div class="form-group"><button class="btn btn-primary btn-sm"
                                                type="submit">Save&nbsp;</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">









                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © UGI-IT CELL</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>