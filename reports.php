<?php
include_once "functions/authentication.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - GSM - Guidance Monitoring System</title>
    <meta name="description" content="GSM - Guidance Monitoring System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Catamaran.css">
    <link rel="stylesheet" href="assets/css/Lato.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css">
    <link rel="stylesheet" href="assets/css/Pricing-Clean-badges.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-custom">
        <div class="container"><a class="navbar-brand" href="#">GMS - Guidance Monitoring System</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarResponsive"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="functions/user-logout.php">logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="text-center text-white masthead">
        <div class="masthead-content">
            <div class="container">
                <h1 class="masthead-heading mb-0">WEST PRIME HORIZON</h1>
                <h2 class="masthead-subheading mb-0">Institute Inc.</h2>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>
    <div class="container"></div>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>REPORTS</h2>
                <p>GSM - GUIDANCE MONITORING SYSTEM</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                <h3 class="text-dark mb-4">Violation List</h3>
            </div>
            <div class="col">
                <div class="row row-cols-4">
                    <div class="col-md-3"><button class="btn btn-primary" type="button" style="width: 100%;">Minor</button></div>
                    <div class="col-md-3"><button class="btn btn-primary" type="button" style="width: 100%;">Major</button></div>
                    <div class="col"><button class="btn btn-primary" type="button" style="width: 100%;">ALL</button></div>
                    <div class="col-md-3"><button class="btn btn-primary" type="button" style="width: 100%;">PRINT</button></div>
                </div>
            </div>
        </div>
        <div class="card" id="TableSorterCard-1">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped table tablesorter" id="ipi-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">violation id</th>
                                    <th class="text-center">student id</th>
                                    <th class="text-center">fullname</th>
                                    <th class="text-center">age</th>
                                    <th class="text-center">sex</th>
                                    <th class="text-center">strand</th>
                                    <th class="text-center">Guardian</th>
                                    <th class="text-center filter-false sorter-false">phone</th>
                                    <th class="text-center filter-false sorter-false">type</th>
                                    <th class="text-center filter-false sorter-false">offense</th>
                                    <th class="text-center filter-false sorter-false">level</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>01</td>
                                    <td>01</td>
                                    <td>Ana</td>
                                    <td>17</td>
                                    <td>Male</td>
                                    <td>BSIT</td>
                                    <td>Diseño</td>
                                    <td>000000</td>
                                    <td>Major</td>
                                    <td>Bullying</td>
                                    <td>1st Offense</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="py-5 bg-black">
        <div class="container">
            <p class="text-center text-white m-0 small">Copyright&nbsp;© GSM - Guidance Monitoring System 2023</p>
        </div>
    </footer>
    <div class="modal fade" role="dialog" tabindex="-1" id="register">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Create Student</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form class="text-center" method="post">
                        <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username"></div>
                        <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                        <div class="mb-3"><input class="form-control" type="text" name="fullname" placeholder="Fullname"></div>
                        <div class="mb-3"><input class="form-control" name="birthday" placeholder="Username" type="date"></div>
                        <div class="mb-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-xl-6"><input class="form-control" type="text" name="age" placeholder="Age"></div>
                                    <div class="col-md-6 col-xl-6"><input class="form-control" type="text" name="gender" placeholder="Sex"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3"><input class="form-control" type="text" name="strand" placeholder="Strand"></div>
                        <div class="mb-3"><input class="form-control" type="text" name="guardian_name" placeholder="Guardian Name"></div>
                        <div class="mb-3"><input class="form-control" type="text" name="guardian_phone" placeholder="Guardian Phone"></div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Add Student</button></div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="update">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Student</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form class="text-center" method="post">
                        <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username"></div>
                        <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                        <div class="mb-3"><input class="form-control" type="text" name="fullname" placeholder="Fullname"></div>
                        <div class="mb-3"><input class="form-control" name="birthday" placeholder="Username" type="date"></div>
                        <div class="mb-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-xl-6"><input class="form-control" type="text" name="age" placeholder="Age"></div>
                                    <div class="col-md-6 col-xl-6"><input class="form-control" type="text" name="gender" placeholder="Sex"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3"><input class="form-control" type="text" name="strand" placeholder="Strand"></div>
                        <div class="mb-3"><input class="form-control" type="text" name="guardian_name" placeholder="Guardian Name"></div>
                        <div class="mb-3"><input class="form-control" type="text" name="guardian_phone" placeholder="Guardian Phone"></div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Update Student</button></div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="violation">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Violation</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form class="text-center" method="post">
                        <div class="mb-3"><input class="form-control" type="text" name="id" placeholder="Student ID"></div>
                        <div class="mb-3"><input class="form-control" name="birthday" placeholder="Username" type="date"></div>
                        <div id="floating-label-1" class="form-floating mb-3"><select class="form-select form-select" for="floatinginput" placeholder="HGsOFT">
                                <option value="1">Major</option>
                                <option value="2">Minor</option>
                            </select><label class="form-label" id="floating-label-2" for="floatinginput">Select Type...</label></div>
                        <div id="floating-label-3" class="form-floating mb-3"><select class="form-select form-select" for="floatinginput" placeholder="HGsOFT">
                                <option value="1">1st Offense</option>
                                <option value="2">2nd Offense</option>
                                <option value="3">3rd Offense</option>
                                <option value="4">Candidate for Expulsion</option>
                            </select><label class="form-label" id="floating-label-4" for="floatinginput">Select Level...</label></div>
                        <div class="mb-3"><textarea class="form-control" placeholder="Offense"></textarea></div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Add Violation</button></div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="view-violations">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">View Student</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6">
                                <h3 class="text-dark mb-4">Students List</h3>
                            </div>
                        </div>
                        <div class="card" id="TableSorterCard">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table tablesorter" id="ipi-table">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th class="text-center">student id</th>
                                                    <th class="text-center">fullname</th>
                                                    <th class="text-center">birthday</th>
                                                    <th class="text-center">age</th>
                                                    <th class="text-center">sex</th>
                                                    <th class="text-center">strand</th>
                                                    <th class="text-center">Guardian</th>
                                                    <th class="text-center filter-false sorter-false">phone</th>
                                                    <th class="text-center filter-false sorter-false">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr>
                                                    <td>01</td>
                                                    <td>Ana</td>
                                                    <td>5/31/2023</td>
                                                    <td>17</td>
                                                    <td>Male</td>
                                                    <td>BSIT</td>
                                                    <td>Diseño</td>
                                                    <td>Diseño</td>
                                                    <td class="text-center align-middle" style="max-height: 60px;height: 60px;"><a class="btn btnMaterial btn-flat success semicircle" role="button" href="#"><i class="fas fa-pen"></i></a><a class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" role="button" style="margin-left: 5px;" data-bs-toggle="modal" data-bs-target="#delete-modal" href="#"><i class="fas fa-trash btnNoBorders" style="color: #DC3545;"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---1-Index-Table-with-Search--Sort-Filters.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---Material-UI-Actions.js"></script>
</body>

</html>