<!DOCTYPE html>
<html>

<head>
    <title>Claim Lost Item</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .primary {
            background-color: rgb(24, 64, 196);
        }

        .secondary {
            background-color: rgb(225, 223, 210);
        }

        .tertiary {
            background-color: rgb(255, 255, 255);
        }

        .quarternary {
            background-color: rgb(223, 223, 223);
        }
    </style>
</head>

<div>
    <x-header />
    <div class="container-fluid">

        <div class="container my-3">
            <div class="row my-4 align-items-center">
                <span class="col">Show <input type="number" name="quantity" min="1" max="200"> entries</span>
                <form class="col form-inline my-2 w-25">
                    <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="table-secondary text-center align-middle">
                        <th scope="col" width="5%">
                            <h6>No.</h6>
                        </th>
                        <th scope="col" width="25%">
                            <h6>Item Name</h6>
                        </th>
                        <th scope="col" width="13%">
                            <h6>Quantity</h6>
                        </th>
                        <th scope="col">
                            <h6>Room Number</h6>
                        </th>
                        <th scope="col">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6>Date Found</h6><button class="bi bi-filter btn"></button>
                            </div>
                        </th>
                        <th scope="col" width="20%">
                            <h6>Action</h6>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-basic btn-sm">Edit</button>
                            <button type="button" class="btn btn-basic btn-sm">Delete</button>
                            <button type="button" class="btn btn-basic btn-sm">Claim</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-basic btn-sm">Edit</button>
                            <button type="button" class="btn btn-basic btn-sm">Delete</button>
                            <button type="button" class="btn btn-basic btn-sm">Claim</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-basic btn-sm">Edit</button>
                            <button type="button" class="btn btn-basic btn-sm">Delete</button>
                            <button type="button" class="btn btn-basic btn-sm">Claim</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-basic btn-sm">Edit</button>
                            <button type="button" class="btn btn-basic btn-sm">Delete</button>
                            <button type="button" class="btn btn-basic btn-sm">Claim</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-basic btn-sm">Edit</button>
                            <button type="button" class="btn btn-basic btn-sm">Delete</button>
                            <button type="button" class="btn btn-basic btn-sm">Claim</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-basic btn-sm">Edit</button>
                            <button type="button" class="btn btn-basic btn-sm">Delete</button>
                            <button type="button" class="btn btn-basic btn-sm">Claim</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-basic btn-sm">Edit</button>
                            <button type="button" class="btn btn-basic btn-sm">Delete</button>
                            <button type="button" class="btn btn-basic btn-sm">Claim</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-basic btn-sm">Edit</button>
                            <button type="button" class="btn btn-basic btn-sm">Delete</button>
                            <button type="button" class="btn btn-basic btn-sm">Claim</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-basic btn-sm">Edit</button>
                            <button type="button" class="btn btn-basic btn-sm">Delete</button>
                            <button type="button" class="btn btn-basic btn-sm">Claim</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-basic btn-sm">Edit</button>
                            <button type="button" class="btn btn-basic btn-sm">Delete</button>
                            <button type="button" class="btn btn-basic btn-sm">Claim</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container" style="padding-right: 35px">
        <nav aria-label="Page Navigation">
            <span>Showing 1 to 200 entries</span>
            <ul class="pagination" style="float: right">
                <li class="page-item"><a class="page-link" style="color: #141619" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" style="color: #141619" href="#">1</a></li>
                <li class="page-item"><a class="page-link" style="color: #141619" href="#">2</a></li>
                <li class="page-item"><a class="page-link" style="color: #141619" href="#">3</a></li>
                <li class="page-item"><a class="page-link" style="color: #141619" href="#">...</a></li>
                <li class="page-item"><a class="page-link" style="color: #141619" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>