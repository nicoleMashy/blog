
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}" type="text/css">
</head>
<body>

<nav class="fixed-nav-bar">
    <div id="menu" class="menu">
        <a class="sitename" href="fixed-navigation-bar.html"></a>
        <!-- Example responsive navigation menu  -->
        <a class="show" href="#menu">Menu</a><a class="hide" href="#hidemenu">Menu</a>
        <ul class="menu-items">
            <li><a style="" href=""><img src="/images/.png" class="card-img-top" alt="..."></a></li>
            <li><a href="">Home</a></li>
            <li><a href="">Products</a></li>
            <li><a href="">Gallery</a></li>
            <li><a href="">Product tips</a></li>
            <li><a href="">About</a></li>
            <div class="topnav-right">

                <li><a href=""><i class="fa fa-sign-in"> Login</i></a></li>
                <li><a href=""><i class="fa fa-shopping-cart">view cart</i></a></li>
            </div>
        </ul>
    </div>
</nav>
<br>
<hr class="style13">
<br>
<div class="container" style="height: 100px;"></div>
<div class="container">
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/images/home.png" alt="Los Angeles" width="1100" height="500">
        </div>
        <div class="carousel-item">
            <img src="/images/hey.png" alt="Chicago" width="1100" height="500">
        </div>
        <div class="carousel-item">
            <img src="/images/home.png" alt="New York" width="1100" height="500">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
</div>
<div class="container" style="height: 80px;"></div>
<div class="container">
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

                    <div class="card" style="width: 18rem; height: 400px;">
                        <img src="/images/product.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text" style="text-color: maroon">Sk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>

                    </div>
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

                    <div class="card" style="width: 18rem; height: 400px;">
                        <img src="/images/product.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text" style="text-color: maroon">Sk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>

                    </div>
                    <div class="card" style="width: 18rem; height: 400px;">
                        <img src="/images/product.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text" style="text-color: maroon">Sk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>

                    </div>
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
                    <div class="card" style="width: 18rem; height: 400px;">
                        <img src="/images/product.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text" style="text-color: maroon">Sk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>


                        </div>
                    </div>
                    <div class="card" style="width: 18rem; height: 400px;">
                        <img src="/images/product.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text" style="text-color: maroon">Sk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>

                    </div>
                    <div class="card" style="width: 18rem; height: 400px;">
                        <img src="/images/product.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text" style="text-color: maroon">Sk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>

                    </div>
                </div>


            </div>

        </div>

    </div>
</div>
<div class="container">
    <div class="topnav">

        <!-- Centered link -->
        <div class="topnav-centered">
            <a href="#home" class="active">Home</a>
        </div>

        <!-- Left-aligned links (default) -->
        <a href="#news"> <img src="/images/book.png" class="card-img-top" alt="..."></a>
        <a href="#contact"> <img src="/images/twitter.png" class="card-img-top" alt="..."></a>
        <a href="#contact"> <img src="/images/youtube.png" class="card-img-top" alt="..."></a>
        <a href="#contact"> <img src="/images/instagram.png" class="card-img-top" alt="..."></a>
        <a href="#contact"> <img src="/images/pinteres.png" class="card-img-top" alt="..."></a>


        <div class="topnav-right">
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>

        </div>

    </div>
    <div class="rows">
        <div class="columnd" style="background-color:white; text-align: center;">
            <h2>help and support</h2>
            <p>Some text..</p>
        </div>
        <div class="columnd" style="background-color:white; text-align: center;">
            <h2>shopping with us</h2>
            <p>Some text..</p>
        </div>
        <div class="columnd" style="background-color:white; text-align: center;">
            <h2>view cart</h2>
            <p>Some text..</p>
        </div>
    </div>


</div>
<footer id="footer" class="modern-footer"><div class="container">
        <nav id="footer_nav"><ul class="inline"><li class="footer-item-616 "> <a data-ct-action="Navigation Click" data-ct-category="Custom" data-ct-identifier="Footer_nav-616" data-ct-information="Footer Navigation-Terms of use" title="Terms of use" href="http://www.unilever.co.za/resource/legalnotice/" class="navItemLink">Terms of use</a></li><li class="footer-item-32 "> <a data-ct-action="Navigation Click" data-ct-category="Custom" data-ct-identifier="Footer_nav-32" data-ct-information="Footer Navigation-Privacy Notice" aria-label='' target="_blank" title="Privacy Notice" href="http://www.unilevernotices.com/south-africa/english/privacy-notice/notice.html" class="navItemLink">Privacy Notice</a></li><li class="footer-item-29 "> <a data-ct-action="Navigation Click" data-ct-category="Custom" data-ct-identifier="Footer_nav-29" data-ct-information="Footer Navigation-Cookie Notice" aria-label='' target="_blank" title="Cookie Notice" href="" class="navItemLink">Cookie Notice</a></li><li class="footer-item-617 "> <a data-ct-action="Navigation Click" data-ct-category="Custom" data-ct-identifier="Footer_nav-617" data-ct-information="Footer Navigation-Accessibility" title="Accessibility" href="http://www.unilever.co.za/resource/accessibility.aspx" class="navItemLink">Accessibility</a></li><li class="footer-item-1598 "> <a data-ct-action="Navigation Click" data-ct-category="Custom" data-ct-identifier="Footer_nav-1697" data-ct-information="Footer Navigation-About" title="About" href="https://www.sunlight.co.za/about-us" class="navItemLink">About</a></li><li class="footer-item-6 "> <a data-ct-action="Navigation Click" data-ct-category="Custom" data-ct-identifier="Footer_nav-11" data-ct-information="Footer Navigation-Contact" title="Contact" href="" class="navItemLink">Contact</a></li><li class="footer-item-927 "> <a data-ct-action="Navigation Click" data-ct-category="Custom" data-ct-identifier="Footer_nav-927" data-ct-information="Footer Navigation-Unilever" aria-label='' target="_blank" title="Unilever" href="" class="navItemLink">Sterling Haven</a></li><li class="footer-item-954 "> <a data-ct-action="Navigation Click" data-ct-category="Custom" data-ct-identifier="Footer_nav-956" data-ct-information="Footer Navigation-T's &amp; C's" title="T's &amp; C's" href="" class="navItemLink">T's &amp; C's</a></li><li class="footer-item-8 "> <a data-ct-action="Navigation Click" data-ct-category="Custom" data-ct-identifier="Footer_nav-1664" data-ct-information="Footer Navigation-Site Map" title="Site Map" href="" class="navItemLink">Site Map</a></li></ul>
        </nav> <aside class="footer-banner clearfix"><p>© Copyright 2019 star mashaishe All rights reserved</p><p class="site-footer"></p> </aside></div>
</footer>

</body>
</html>

