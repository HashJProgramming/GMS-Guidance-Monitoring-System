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
                    <div class="col-md-3"><a class="btn btn-primary" type="button" href="reports.php?filter=Minor" style="width: 5em">Minor</a></div>
                    <div class="col-md-3"><a class="btn btn-primary" type="button" href="reports.php?filter=Major" style="width: 5em">Major</a></div>
                    <div class="col"><a class="btn btn-primary" type="button" href="reports.php" style="width: 5em">ALL</a></div>
                    <div class="col-md-3"><a class="btn btn-primary" type="button" style="width: 5em" target="_blank" href="print/">PRINT</a></div>
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
                                <?php include_once 'functions/view-reports.php';?>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</body>

</html>