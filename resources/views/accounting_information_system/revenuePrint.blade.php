<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Revenue</title>
        <link href="{{ URL::asset('css/revenuePrint.css') }}" rel="stylesheet" type="text/css">
        <script src="https://kit.fontawesome.com/65bd41fff5.js" crossorigin="anonymous"></script>

        <nav>
            <ul>
                <div>
                    <a> 
                        <img src="{{asset('images/logo3.png')}}"
                        alt="Hotle logo"
                        width="150"
                        height="90"
                        class="logo"
                        />
                    </a>
                </div>
            </ul>
        </nav>
    </head>

    <body>
        <h1>REVENUE</h1>
            <div class="container">
                    <form>
                        <i class="fa-solid fa-calendar"></i>
                        <input type="text" placeholder="Month/Day/Year">
                        <button type="Search">Search</button>
                    </form>
            </div>
                <div class="Viewing">
                    <embed src="{{asset('file/Revenue.pdf')}}" height="520" width="1000" />
                </div>

                <div class="example"></div>
            </div>
    </body>

</html>
