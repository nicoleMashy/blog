<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('/css/custom.css') }}" type="text/css">
    </head>
<body>
    <nav class="fixed-nav-bar">
        <div id="menu" class="menu">
            <a class="sitename" href="fixed-navigation-bar.html"></a>
            <!-- Example responsive navigation menu  -->
            <a class="show" href="#menu">Menu</a><a class="hide" href="#hidemenu">Menu</a>
            <ul class="menu-items">
                <li><a style="" href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Twitter</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">Twitter</a></li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron jumbotron bg-cover">

        <div class="container">
            <h1 class="display-3 mb-1">STERLING HAVEN</h1>
            <p class="lead">SHOP WITH US <span>FOR ALL detergents </span></p>
        </div>
    </div>
    <div class="container">
    <div class="rows">
        <div class="column" style="background-color: white;">
            <div class="tab">
                <button class="tablinks" style="background-color:brown ;" >Browse by category</button>
                <button class="tablinks" >detergents</button>
                <button class="tablinks">laundry</button>
                <button class="tablinks">household products</button>
                <button class="tablinks">view all</button>
            </div>
        </div>
    </div>

        <div class="rows">
            <div class="column" style="background-color:white;">

                <div class="row">
                    <div class="columnd">
                        <div class="card" style="width: 18rem; height: 400px;">
                            <img src="/images/product.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text" style="text-color: maroon">Sk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>

                        </div>
                    </div>

                    <div class="columnd">
                        <div class="card">
                            <h3>Card 2</h3>
                            <p>Some text</p>
                            <p>Some text</p>
                        </div>
                    </div>

                    <div class="columnd">
                        <div class="card">
                            <h3>Card 3</h3>
                            <p>Some text</p>
                            <p>Some text</p>
                        </div>
                    </div>


                </div>

            </div>

    </div>
    </div>
    </body>
</html>
