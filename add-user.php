<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add User</title>
        <link href="assets/css/styles.css" rel="stylesheet" />
        <link href="assets/css/custom-styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">
                <img src="./assets/images/logo-2.png" alt="" width="70%">
            </a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="deposit.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-wallet"></i></div>
                                Deposit
                            </a>
                            <a class="nav-link" href="user.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-wallet"></i></div>
                                Users
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.php">Login</a>
                                            <a class="nav-link" href="register.php">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer bg-pattern">
                        <div class="small">Logged in as:</div>
                        Raisul Showmin (ADMIN)
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <div class="row page-title-header mt-3 mb-4">
                            <div class="col-md-6 header-title-main">
                                <h1>Add New User</h1>
                            </div>
                            <div class="col-md-6 breadcrumb-custom-cls">
                                <ol class="breadcrumb breadcrumb-custom ml-auto">
                                    <li class="breadcrumb-item"><a href="user.php" class="breadcrumb-cls"><i class="fas fa-caret-square-left"></i> Back to the list</a></li>
                                </ol>
                            </div>
                        </div>
                        <div class="card mb-4">                            
                            <div class="card-body">
                                <form method="post">
                                        <div class="row">
                                            <div class="col-md-12 input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-tie"></i></span>
                                                <input type="text" class="form-control" placeholder="User Name" name="user_name">
                                            </div>

                                            <!-- <div class="col-md-12 input-group mb-3">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><b>Name</b></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="First Name" name="user_first_name" required>
                                                <input type="text" class="form-control" placeholder="Last Name" name="user_last_name" required>
                                            </div> -->


                                            <div class="col-md-6 input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-venus-mars"></i></span>
                                                 <input type="text" class="form-control" placeholder="User Gender" name="user_gender">
                                            </div>
                                            <div class="col-md-6 input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                                                <input type="email" class="form-control" placeholder="User Email" name="user_email">
                                            </div>
                                            <div class="col-md-6 input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span>
                                                <input type="text" class="form-control" placeholder="User Phone Number" name="user_phone">
                                            </div>
                                            <div class="col-md-6 input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-briefcase"></i></span>
                                                 <input type="text" class="form-control" placeholder="User Designation" name="user_designation">
                                            </div>
                                            <div class="col-md-6 input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-day"></i></span>
                                                <input type="text" class="form-control" placeholder="User Joining Date" name="user_joining_date">
                                            </div>
                                            <div class="col-md-6 input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-cog"></i></span>
                                                 <input type="text" class="form-control" placeholder="User Role" name="user_role">
                                            </div>
                         
                                            <div class="col-md-12 text-right">
                                                <button class="btn btn-danger" type="reset" name="reset">Reset</button>
                                                <button class="btn btn-success" type="submit" name="submit">Insert</button>
                                            </div>
                                        </div>







                                    
                                </form>
                            </div>
                        </div>


                        <!-- <div class="card card-body">                            
                            <h4 class="history-cls"><i class="fas fa-history"></i> History of Deposit</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Number of Installment</th>
                                            <th>Date Of Installment</th>
                                            <th>Amount of Installment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1st Installment</td>
                                            <td>5 Jan 2021</td>
                                            <td>1500</td>
                                        </tr>
                                        <tr>
                                            <td>2nd Installment</td>
                                            <td>3 Jan 2021</td>
                                            <td>1200</td>
                                        </tr>
                                        <tr>
                                            <td>3rd Installment</td>
                                            <td>12 Jan 2021</td>
                                            <td>2000</td>
                                        </tr>                                            
                                    </tbody>
                                  </table>
                            </div>
                        </div> -->












                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
