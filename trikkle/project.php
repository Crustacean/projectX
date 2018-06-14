<html>
    <head>
        <title>trikkle</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <meta name="keywords" content="">
        <meta name="description" content="" >
        <meta name="author" content="trickle">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
        <!--        <link rel="icon" href="images/icon.jpg" >
                <link rel="manifest" href="/manifest.webmanifest">-->
        <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link href="wysiwyg.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="/wp-content/plugins/wp-live-chat-support/css/font-awesome.min.css?ver=4.8.2">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet'  type='text/css'>
        <link href="https://static1.squarespace.com/static/ta/5134cbefe4b0c6fb04df8065/9271/assets/fonts/HCo_fonts_www.css" rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <script src="script/jquery-latest.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $(window).bind('scroll', function () {
                    var navHeight = $(window).height() - 70;
                    if ($(window).scrollTop() > navHeight) {
                        $('nav').addClass('fixed');
                    } else {
                        $('nav').removeClass('fixed');
                    }
                });
            });

            $(document).ready(function () {
                $('.open-menu').on('click', function () {
                    $('.overlay').toggleClass('open');
                });

                $('.menu-button').click(function () {
                    $(this).toggleClass('menu-open');
                });

                $('.close-menu').on('click', function () {
                    $('.overlay').removeClass('open');
                    $('.menu-button').removeClass('menu-open');
                });
            });

        </script>
    </head>

    <body>
        <div class="container">
            <div class="content">
                <div class="topContent2">
                    <menu class="menuNav">
                        <div id="logo">
                            <span class="icon">trikkle</span>
                            <div class="fake-cursor"></div>
                            <input type="search" class="search desktopSearch" placeholder="&nbsp;FIND A DESIGN" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" autofocus="on"/>
                            <label for="drop" class="menubtn">                    
                                <a id="bar-menu-button" class="bar-menu-button">
                                    <span class="bar-line"></span>
                                    <span class="bar-line"></span>
                                    <span class="bar-line"></span>
                                    <span class="bar-line"></span>
                                </a>                                
                            </label>
                        </div>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <input type="search" class="search mobileSearch" placeholder="&nbsp;FIND A DESIGN" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" autofocus="on"/>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-1" class="toggle">All Categories +</label>
                                <a href="#">All Categories</a>
                                <input type="checkbox" id="drop-1"/>
                                <ul>
                                    <li><a href="#" class="nav-item">Huge Sale</a></li>
                                    <li><a href="#">Discounts</a></li>
                                    <li>
                                        <!-- Second Tier Drop Down -->        
                                        <label for="drop-2" class="toggle">Fashion +</label>
                                        <a href="#">Fashion</a>        
                                        <input type="checkbox" id="drop-2"/> 
                                        <ul>
                                            <li>
                                                <!-- Third Tier Drop Down -->        
                                                <label for="drop-3" class="toggle">Women Fashion +</label>
                                                <a href="#">Women Fashion</a>         
                                                <input type="checkbox" id="drop-3"/>
                                                <ul>
                                                    <li><a href="#">Blazers</a></li>
                                                    <li><a href="#">Jumpsuits</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">T-Shirts</a></li>
                                                    <li><a href="#">Shorts</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <!-- Fourth Tier Drop Down -->        
                                                <label for="drop-4" class="toggle">Men Fashion +</label>
                                                <a href="#">Men Fashion</a>         
                                                <input type="checkbox" id="drop-4"/>
                                                <ul>
                                                    <li><a href="#">Blazers</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">T-Shirts</a></li>
                                                    <li><a href="#">Shorts</a></li>
                                                    <li><a href="#">Socks</a></li>
                                                    <li><a href="#">Sandals</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <!-- Fifth Tier Drop Down -->        
                                                <label for="drop-5" class="toggle">Accessories +</label>
                                                <a href="#">Accessories</a>         
                                                <input type="checkbox" id="drop-5"/>
                                                <ul>
                                                    <li><a href="#">Shoes & boots</a></li>
                                                    <li><a href="#">Gloves</a></li>
                                                    <li><a href="#">For hair</a></li>
                                                    <li><a href="#">Scarves</a></li>
                                                    <li><a href="#">Sun glasses</a></li>
                                                    <li><a href="#">Bags</a></li>
                                                    <li><a href="#">Hats</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Kids' Fashion</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <!-- Sixth Tier Drop Down -->        
                                        <label for="drop-6" class="toggle">Jewelery +</label>
                                        <a href="#">Jewelery</a>         
                                        <input type="checkbox" id="drop-6"/> 
                                        <ul>
                                            <li><a href="#">Earings</a></li>
                                            <li><a href="#">Necklaces</a></li>
                                            <li><a href="#">Bracelets</a></li>
                                            <li><a href="#">Cufflinks</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <!-- Seventh Tier Drop Down -->        
                                        <label for="drop-7" class="toggle">Technology +</label>
                                        <a href="#">Technology</a>         
                                        <input type="checkbox" id="drop-7"/> 
                                        <ul>
                                            <li><a href="#">Phone Chargers</a></li>
                                            <li><a href="#">Phone Covers</a></li>
                                            <li><a href="#">Extensions</a></li>
                                            <li><a href="#">Laptops</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <!-- Eighth Tier Drop Down -->
                                <label for="drop-8" class="toggle">On Sale +</label>
                                <a href="#">On Sale</a>
                                <input type="checkbox" id="drop-8"/>
                                <ul>
                                    <li><a href="#">Bags & hats</a></li>
                                    <li><a href="#">Cross body bags</a></li>
                                    <li><a href="#">Top handle bags</a></li>
                                    <li><a href="#">Heels</a></li>
                                    <li><a href="#">Flats</a></li>
                                    <li><a href="#">Sunglasses</a></li>
                                    <li><a href="#">For hair</a></li>
                                    <li><a href="#">Belts</a></li>
                                    <li><a href="#">Caps</a></li>
                                    <li><a href="#">Scarves</a></li>
                                </ul>
                            </li>
                            <li>
                                <!-- Ninth Tier Drop Down -->
                                <label for="drop-9" class="toggle">Social +</label>
                                <a href="#">Social</a>
                                <input type="checkbox" id="drop-9"/>
                                <ul>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Instagram</a></li>
                                </ul>
                            </li>
<!--                            <li><a id="cart">Cart <span class="badge">4</span></a></li>-->
                            <li>
                                <!-- Tenth Tier Drop Down -->
                                <label for="drop-10" class="toggle">My Account +</label>
                                <a href="#">My Account</a>
                                <input type="checkbox" id="drop-10"/>
                                <ul>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">My Wishlist</a></li>
                                    <li><a href="#">Pre Order</a></li>
                                    <li><a href="#">My Cart <span class="badge">14</span></a></li>
                                    <li><a href="#">Checkout</a></li>
                                    <li><a href="#">Sign in</a></li>
                                </ul>
                            </li>
                        </ul>
                        </div>
                    </menu>
                    <div class="center">
                        <div class="centerContent">
                            <div class=""><h1>TRIKKLE</h1></div>
                            <div class=""><h2>Make it Beautiful.</h2></div>
                            <br />
                            <a class="bigbuttonsTop" href="">GET STARTED</a>
                        </div>
                    </div>
                <div class="wrapped">
                    
                    dcjdhcjsdc
                </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="social" >
                <a class="fa fa-facebook" style="font-size: 20px;font-weight: 400;"></a>
                <a class="fa fa-twitter" style="font-size: 20px;font-weight: 400;"></a>
                <a class="fa fa-instagram" style="font-size: 20px;font-weight: 400;"></a>
                <a class="fa fa-youtube-play" style="font-size: 20px;font-weight: 400;"></a>
            </div>
            site by <a href="" rel="nofollow" target="_blank">trikkle</a>
        </footer>
    </body>
</html>