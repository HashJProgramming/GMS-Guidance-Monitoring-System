<?php
include_once "functions/authentication.php";
include_once 'functions/get-data.php';
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
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>OPTIONS</h2>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="card border-primary border-2 h-100">
                    <div class="card-body d-flex flex-column justify-content-between p-4"><span class="badge bg-primary position-absolute top-0 end-0 rounded-bottom-left text-uppercase">GMS</span>
                        <div>
                            <h6 class="text-uppercase text-muted">INFORMATION</h6>
                            <h4 class="display-6 fw-bold">VIOLATIONS</h4>
                            <hr><a class="btn btn-primary d-block w-100" role="button" href="#" data-bs-target="#violation" data-bs-toggle="modal">ADD</a>
                            <hr>
                        </div><a class="btn btn-primary d-block w-100" role="button" href="#" data-bs-target="#view-violations" data-bs-toggle="modal">VIEW</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column justify-content-between p-4">
                        <div>
                            <h6 class="text-uppercase text-muted">INFORMATION</h6>
                            <h4 class="display-6 fw-bold">STUDENTS</h4>
                            <hr><a class="btn btn-primary d-block w-100" role="button" href="#" data-bs-target="#register" data-bs-toggle="modal">ADD</a>
                            <hr>
                        </div><a class="btn btn-primary d-block w-100" role="button" href="#" data-bs-target="#view-students" data-bs-toggle="modal">VIEW</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column justify-content-between p-4">
                        <div>
                            <h6 class="text-uppercase text-muted">INFORMATION</h6>
                            <h4 class="display-6 fw-bold">REPORTS</h4>
                            <hr><a class="btn btn-primary d-block w-100" role="button" target="_blank" href="print/">PRINT</a>
                            <hr>
                        </div><a class="btn btn-primary d-block w-100" role="button" href="reports.php">VIEW</a>
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
                    <form class="text-center" action="functions/create-student.php" method="post">
                        <div class="mb-3"><input class="form-control" required  type="text"  pattern="^(?!\s).*$"name="student_id" placeholder="Student ID"></div>
                        <div class="mb-3"><input class="form-control" required  type="text"  pattern="^(?!\s).*$"name="fullname" placeholder="Fullname"></div>
                      <div class="md-3" style="margin-bottom: 1rem;">
                          <div class="input-group"><span class="input-group-text">Birthdate</span><input class="form-control" required  name="birthday" placeholder="birthday" type="date"></div>
                      </div>
                        <div class="mb-3">
                            <div class="container">
                                <div class="row">
                                    <select class="form-select" name="gender">
                                            <optgroup label="Sex">
                                                <option value="Male" selected>Male</option>
                                                <option value="Female">Female</option>
                                            </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3"><input class="form-control" required  type="text"  pattern="^(?!\s).*$"name="strand" placeholder="Strand"></div>
                        <div class="mb-3"><input class="form-control" required  type="text"  pattern="^(?!\s).*$"name="guardian_name" placeholder="Guardian Name"></div>
                        <div class="mb-3"><input class="form-control" required  type="tel"  maxlength="11"  pattern="[0-9]+" name="guardian_phone" placeholder="Guardian Phone"></div>
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
                    <form class="text-center" action="functions/update-student.php" method="post">
                        <input type="hidden" name="data_id">
                        <div class="mb-3"><input class="form-control" required  type="text"  pattern="^(?!\s).*$"name="fullname" placeholder="Fullname"></div>
                        <div class="mb-3"><input class="form-control" required  name="birthday" placeholder="Username" type="date"></div>
                        <div class="mb-3">

                        <div class="mb-3">
                            <select class="form-select" name="gender">
                                <optgroup label="Sex">
                                    <option value="Male" selected>Male</option>
                                    <option value="Female">Female</option>
                                </optgroup>
                            </select>
                        </div>

                        </div>
                        <div class="mb-3"><input class="form-control" required  type="text"  pattern="^(?!\s).*$" name="strand" placeholder="Strand"></div>
                        <div class="mb-3"><input class="form-control" required  type="text"  pattern="^(?!\s).*$" name="guardian_name" placeholder="Guardian Name"></div>
                        <div class="mb-3"><input class="form-control" required  type="tel" minlength="11" maxlength="11"  pattern="[0-9]+" name="guardian_phone" placeholder="Guardian Phone"></div>
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
                    <form class="text-center" action="functions/create-violation.php" method="post">
                        <div class="mb-3"><input class="form-control" required  type="text"  pattern="^(?!\s).*$"name="id" placeholder="Student ID"></div>
                        <div id="floating-label-1" class="form-floating mb-3"><select name="type" class="form-select form-select" for="floatinginput" placeholder="Major">
                                <option value="Major">Major</option>
                                <option value="Minor">Minor</option>
                            </select><label class="form-label" id="floating-label-2" for="floatinginput">Select Type...</label></div>
                        <div class="mb-3"><textarea class="form-control" required  placeholder="Offense" name="offense"></textarea></div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Add Violation</button></div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="view-students">
        <div class="modal-dialog modal-xl" role="document">
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
                            <div class="col">
                                <form id="search-form" method="POST">
                                    <div class="input-group">
                                        <span class="input-group-text">Student</span>
                                        <input class="form-control"  type="text" name="student_id" pattern="^(?!\s).*$">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card" id="TableSorterCard">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped tablesorter" id="ipi-table">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th class="text-center">Student ID</th>
                                                    <th class="text-center">Full Name</th>
                                                    <th class="text-center">Birthday</th>
                                                    <th class="text-center">Age</th>
                                                    <th class="text-center">Sex</th>
                                                    <th class="text-center">Strand</th>
                                                    <th class="text-center">Guardian</th>
                                                    <th class="text-center filter-false sorter-false">Phone</th>
                                                    <th class="text-center filter-false sorter-false">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <?php include_once 'functions/students-list.php'; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="view-violations">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">View Violations</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6">
                                <h3 class="text-dark mb-4">Violation List</h3>
                            </div>
                            <div class="col">
                                <form id="search-form2" method="POST">
                                    <div class="input-group">
                                        <span class="input-group-text">Student</span>
                                        <input class="form-control"  type="text" name="student_id" pattern="^(?!\s).*$">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card" id="TableSorterCard-1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table tablesorter" id="ipi-table2">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th class="text-center">VIOLATION&nbsp;id</th>
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
                                                <?php include_once 'functions/violations-list.php';?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="profile">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Student Violations</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6">
                                <h3 class="text-dark mb-4">Violation List</h3>
                            </div>
                        </div>
                        <div class="card" id="print_data">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table tablesorter" id="ipi-table3">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th class="text-center">VIOLATION&nbsp;id</th>
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
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="button" data-bs-dismiss="modal" id="print">Print</button>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" tabindex="-1" id="confirmation">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="functions/remove-student.php" method="post">
                <input type="hidden" name="data_id">
                <div class="modal-header">
                    <h4 class="modal-title">Remove Student</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this student?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-danger" type="submit">Remove</button></div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
    <script>
        const url = window.location.href;

        if (url.indexOf("#success") > -1) {
        swal("Success", "GMS - Guidance Monitoring System", "success");
        }

        if (url.indexOf("#error") > -1) {
        swal("Error", "GMS - Guidance Monitoring System", "error");
        }
    </script>

    <script>
        $(document).ready(function() {
            // When the search form is submitted
            $('#search-form').submit(function(event) {
                event.preventDefault(); // Prevent default form submission

                // Send AJAX request to retrieve filtered data
                $.ajax({
                    url: 'functions/view-students.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) { // Update table with filtered data
                        $('#ipi-table tbody').html(response);
                    }
                });
            });

            $('#search-form2').submit(function(event) {
                event.preventDefault(); // Prevent default form submission
        
                // Send AJAX request to retrieve filtered data
                $.ajax({
                    url: 'functions/view-violations.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) { // Update table with filtered data
                        $('#ipi-table2 tbody').html(response);
                    }
                });
            });

            $('a[data-bs-target="#profile"]').on('click', function() {
                var id = $(this).data('id');
                console.log(id);
                $.ajax({
                    url: 'functions/student-profile.php',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function(response) { // Update table with filtered data
                        $('#ipi-table3 tbody').html(response);
                    }
                });
            });
        });

        function printTable() {
        // Get the table data
        var tableData = $("#print_data").html();

        // Create a new window
        var win = window.open("about:blank");

        // Set the window's content
        win.document.write('<html><head><title>PRINT</title><link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">' +
                           '<style>table {border-collapse: collapse; width: 100%;}' +
                           'th, td {border: 1px solid black; padding: 8px; text-align: left;}' +
                           'th {background-color: #dddddd;}</style></head><body>' +
                           tableData + '</body></html>');

        // Print the window
        win.print();
    }
        // Attach the print event to the print button
        $("#print").on("click", printTable);
    </script>
    <script>
        $('a[data-bs-target="#update"]').on('click', function() {
            var id = $(this).data('id');
            var fullname = $(this).data('fullname');
            var birthdate = $(this).data('birthdate');
            var age = $(this).data('age');
            var sex = $(this).data('sex');
            var strand = $(this).data('strand');
            var guardian_name = $(this).data('gurdian');
            var phone = $(this).data('phone');

            console.log(id);
            
            $('input[name="data_id"]').each(function() {
                $(this).val(id);
            });

            $('input[name="fullname"]').each(function() {
                $(this).val(fullname);
            });

            $('input[name="birthday"]').each(function() {
                $(this).val(birthdate);
            });

            $('input[name="age"]').each(function() {
                $(this).val(age);
            });

            $('select[name="gender"]').each(function() {
                $(this).val(sex);
            });

            $('input[name="strand"]').each(function() {
                $(this).val(strand);
            });

            $('input[name="guardian_name"]').each(function() {
                $(this).val(guardian_name);
            });

            $('input[name="guardian_phone"]').each(function() {
                $(this).val(phone);
            });
        });
        $('a[data-bs-target="#confirmation"]').on('click', function() {
            var id = $(this).data('id');
            console.log(id);
            $('input[name="data_id"]').each(function() {
                $(this).val(id);
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</body>

</html>