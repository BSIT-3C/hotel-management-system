<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Monsterrat', sans-serif;
    }

    nav {
        background: #1840c4;
        padding: 10px 40px 10px 70px;
        border: 1px;
        border-left: none;
        border-right: none;
    }

    h1 {
        font-size: 50px;
        font-family: 'Times New Roman', Times, serif;
        margin-left: 10px;
    }

    body {
        margin: auto;
        text-align: left;
    }

    .container {
        margin: 20px;
        width: 40px;
        height: 30px;
        align-items: center;
        justify-content: center;
        float: inline-end;
    }

    form {
        background: #fff;
        display: flex;
        align-self: auto;
    }

    form input {
        flex: 1;
        border: #1840c4;
        outline: #1840c4;
    }

    form button {
        background: #1840c4;
        padding: 10px 50px;
        border: none;
        outline: none;
        color: #fff;
        letter-spacing: 1px;
        border-radius: 20px;
        cursor: pointer;
    }

    .Viewing {
        max-width: 1100px;
        padding: 30px;
        margin: auto;
    }

    form .fa-calendar {
        align-self: center;
        padding: 10px 20px;
    }

    form .fa-download {
        align-self: center;
        padding: 10px 20px;
    }
</style>

<body>

    <nav>
        <ul>
            <div>
                <a>
                    <img src="{{ asset('images/logo3.png') }}" alt="Hotle logo" width="150" height="90"
                        class="logo" />
                </a>
            </div>
        </ul>
    </nav>

    <div class="group">

        <h1> PAYROLL</h1>
        <div class="container">
            <form>
                <i class="fa-solid fa-calendar"></i>
                <input type="text" placeholder="Month/Day/Year">
                <button type="Search">Search</button>
            </form>
        </div>
        <div class="Viewing">
            <embed src="{{ asset('file/payrollPrint.pdf') }}" height="520" width="1000" />
        </div>

        <div class="example">
        </div>



    </div>



</body>

</html>
