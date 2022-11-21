<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<style>
    body {
        padding: 0;
        margin: 0;
        background: #1840C4;
    }

    .navbar {
        background:#1840C4;
    }

    .nav-link,
    .navbar-brand {
        color: #fff;
        cursor: pointer;
    }

    .nav-link {
        margin-right: 1em !important;
    }

    .nav-link:hover {
        color: #000;
    }

    .navbar-collapse {
        justify-content: flex-end;
    }
    
    .overlay {
        position: absolute;
        min-height: 100%;
        min-width: 100%;
        left: 0;
        top: 0;
        background: rgba(0, 0, 0, 0.6);
    }

    .description {
	    left: 50%;
	    position: absolute;
	    top: 45%;
	    transform: translate(-50%, -55%);
	    text-align: center;
    }

    .description h1 {
	    color: #E1DFD2;
    }

    .description button {
        border:1px solid #6ab446;
        background:#6ab446;
        border-radius: 0;
        color:#fff;
    }

    .description button:hover {
	    border:1px solid #fff;
        background:#fff;
        color:#000;
    }

    .btn-secondary{
        background-color: #e1dfd2;
    }
</style>

  <body>
    <nav class="navbar navbar-expand-md">
        <img src="https://drive.google.com/uc?export=download&id=1N-yj2KqeeyVd3t_RLgeaO2HGI5i94h4P" alt="logo3" width="100" height="50">
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">EXIT</a>
                </li>
                <!-- wag muna
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                -->
            </ul>
        </div>
    </nav>
    
    <header class="page-header header container-fluid">
        <div class="description">
            <h1 style="font-family: Times New Roman, Times, serif">Accounting Information System</h1>
            <a class="btn btn-secondary dropdown-toggle btn-lg px-4"  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Payroll
            </a>
            
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="/accounting/payrollEdit">Edit</a>
                <a class="dropdown-item" href="/accounting/payrollPrint">Print</a>
            </div>

            <a class="btn btn-secondary dropdown-toggle btn-lg " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Revenue
            </a>
            
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="/accounting/revenueEdit">Edit</a>
                <a class="dropdown-item" href="/accounting/revenuePrint">Print</a>
            </div>


            <a class="btn btn-secondary dropdown-toggle btn-lg" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Expenses
            </a>
            
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="/accounting/expensesEdit">Edit</a>
                <a class="dropdown-item" href="/accounting/expenesPrint">Print</a>
            </div>
        </div>
    </header>
  </body>
</html>