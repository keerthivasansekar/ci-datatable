<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI Datatable</title>
    <link rel="stylesheet" href="./assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/plugins/datatables/datatables.min.css">
    <link rel="stylesheet" href="./assets/plugins/datatables/DataTables/css/datatables.bootstrap5.min.css">
    <link rel="stylesheet" href="./assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="./assets/plugins/fontawesome/css/brands.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <i class="fa-brands fa-bootstrap fa-2xl"></i>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
                </form>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2">Login</button>
                    <button type="button" class="btn btn-warning">Sign-up</button>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row" style="padding: 50px">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Emp ID#</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <script src="./assets/plugins/jquery/jquery-3.6.4.min.js"></script>
    <script src="./assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/plugins/datatables/datatables.min.js"></script>
    <script src="./assets/plugins/datatables/DataTables/js/dataTables.bootstrap5.min.js"></script>
    <script src="./assets/plugins/fontawesome/js/fontawesome.min.js"></script>
    <script src="./assets/plugins/fontawesome/js/brands.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>