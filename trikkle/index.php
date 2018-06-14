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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <!--        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet'  type='text/css'>-->
        <link href="https://static1.squarespace.com/static/ta/5134cbefe4b0c6fb04df8065/9271/assets/fonts/HCo_fonts_www.css" rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
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

    <body class="body">
        <div class="container">
            <div class="content">
                <div class="topContent">
                    <a id="menu-button" class="menu-button open-menu">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </a>
                    <!-- Overlay Navigation Menu -->
                    <div class="overlay">
                        <div class="menuContainer">
                            <div class="formLine">
                                <input type="text" class="search" name="search" placeholder="I'm looking for..." required="required" autofocus="autofocus" aria-required="true">
                            </div>
                            <br>
                            <nav>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="foodtravels.html">Our Work</a></li>
                                    <li><a href="project.php">Work with Us</a></li>
                                    <li><a href="enter.html">Enter</a></li>
                                </ul>
                                <br />
                                <div class="social" >
                                    <a class="fa fa-facebook" style="font-size: 20px;font-weight: 400;"></a>
                                    <a class="fa fa-twitter" style="font-size: 20px;font-weight: 400;"></a>
                                    <a class="fa fa-instagram" style="font-size: 20px;font-weight: 400;"></a>
                                    <a class="fa fa-youtube-play" style="font-size: 20px;font-weight: 400;"></a>
                                </div>
                                <br>
                            </nav>
                        </div>
                    </div>
                    <div class="center">
                        <div class="centerContent">
                            <div class=""><h1>TRIKKLE</h1></div>
                            <div class=""><h2>Make it Beautiful.</h2></div>
                            <br />
                            <a class="bigbuttons btn-primary-dark bold-button side-by-side" href="project.php">GET STARTED</a>
                        </div>
                    </div>
                    <div class="arrow arrowFloating">
                        <a class="arrowLink" href="">
                            <i class="fa fa-angle-down" id="custom"></i>
                        </a>
                    </div>
                </div>
                <div class="about-us">
                    <div class="about-content">
                        <div class="about-content-cover">
                            <div class="header">
                                <h2 class="heading-text">Impressive visuals, unparralleled capabilities</h2>
                            </div>
                            <div class="paragraph">
                                <p>trikkle is a design company. We help to visualize our clients' ideas through creative, practical thinking, helping them achieve beautiful designs that they love.</p>
                            </div>
                            <div class="click-to-next">
                                <br />
                                <a class="bigbuttons btn-primary-dark bold-button side-by-side" href="project.php">ENQUIRE</a>
                                <a class="bigbuttons btn-primary-dark side-by-side" href="project.php">GET QUOTE</a>
                            </div>                                
                        </div>
                    </div>                        
                </div> 
                <div class="wrapper">
                    <div class="profile">
                        <div class="profileFrame">
                            <div class="profileFrameTitle">
                                <div class="profileTitle">
                                    <h8 class="textUnderline">WHAT WE DO</h8>
                                </div>
                            </div>
                            <div class="profileFrameContent">
                                <div class="profileContent">
                                    <div class="profileFlexBox">
                                        <div class="profileContentWxrbne">
                                            <div class="profileTile">
                                                <div class="tileContainer">
                                                    <div class="tileIcon">
                                                        <div class="webicon">
                                                            <i class="fa fa-desktop"></i>
                                                        </div>
                                                    </div>
                                                    <div class="tileDescription">
                                                        <div class="webDescription">
                                                            WEBSITE DESIGN AND BUILD
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profileTile">
                                                <div class="tileContainer">
                                                    <div class="tileIcon">
                                                        <div class="webicon">
                                                            <i class="fa fa-creative-commons"></i>
                                                        </div>
                                                    </div>
                                                    <div class="tileDescription">
                                                        <div class="webDescription">
                                                            Logo & Icons
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profileTile">
                                                <div class="tileContainer">
                                                    <div class="tileIcon">
                                                        <div class="webicon">
                                                            <i class="fa fa-connectdevelop"></i>
                                                        </div>
                                                    </div>
                                                    <div class="tileDescription">
                                                        <div class="webDescription">
                                                            Content
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profileTile">
                                                <div class="tileContainer">
                                                    <div class="tileIcon">
                                                        <div class="webicon">
                                                            <i class="fa fa-address-card"></i>
                                                        </div>
                                                    </div>
                                                    <div class="tileDescription">
                                                        <div class="webDescription">
                                                            Business card design
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profileTile">
                                                <div class="tileContainer">
                                                    <div class="tileIcon">
                                                        <div class="webicon">
                                                            <i class="fa fa-android"></i>
                                                        </div>
                                                    </div>
                                                    <div class="tileDescription">
                                                        <div class="webDescription">
                                                            App design
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profileTile">
                                                <div class="tileContainer">
                                                    <div class="tileIcon">
                                                        <div class="webicon">
                                                            <i class="fa fa-shirtsinbulk"></i>
                                                        </div>
                                                    </div>
                                                    <div class="tileDescription">
                                                        <div class="webDescription">
                                                            T-shirt print
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profileTile">
                                                <div class="tileContainer">
                                                    <div class="tileIcon">
                                                        <div class="webicon">
                                                            <i class="fa fa-themeisle"></i>
                                                        </div>
                                                    </div>
                                                    <div class="tileDescription">
                                                        <div class="webDescription">
                                                            Web themes
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profileTile">
                                                <div class="tileContainer">
                                                    <div class="tileIcon">
                                                        <div class="webicon">
                                                            <i class="fa fa-headphones"></i>
                                                        </div>
                                                    </div>
                                                    <div class="tileDescription">
                                                        <div class="webDescription">
                                                            Customer support
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profileContentXwjkweh">
                                        <div class="moreProfile">
                                            <div class="click-to-next">
                                                <a class="bigbuttons-light btn-primary-dark" href="project.php">FIND MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <div class="profile-two">
                        <div class="profileFrame">
                            <div class="profileContainer">
                                <picture class="c-image">
                                    <source srcset="images/midsection-picture.jpg" media="(min-width: 1779px)">
                                    <source srcset="images/midsection-picture.jpg" media="(min-width: 1400px)">
                                    <source srcset="images/midsection-picture.jpg" media="(min-width: 1084px)">
                                    <source srcset="images/midsection-picture.jpg" media="(min-width: 768px)">
                                    <source srcset="images/midsection-picture.jpg" media="(min-width: 540px)">
                                    <source srcset="images/midsection-picture.jpg" media="(min-width: 0)">
                                    <img src="images/midsection-picture.jpg" alt="design-concept" class="responsive" width="600" height="400">
                                </picture>
                            </div>
                            <div class="profileText">
                                <div class="profileTextAll">
                                    <!--                                    <div class="profileHeader">
                                                                            <h3 class="profileHeader-text">Why use Trikkle?</h3>
                                                                        </div>-->
                                    <div class="profileGet">
                                        <div class="getContainer">
                                            <div class="staats container padded-container">
                                                <div class="waypoint">
                                                    <h4 class="step-up">Since Yesterday</h4>
                                                    <div class="staats-group">
                                                        <div class="staat-item step-up">
                                                            <h5 class="count-up" data-number="169" data-to="300" data-speed="1500">&nbsp;</h5>
                                                            <p>Git commits</p>
                                                            <p>(<span class="count-up" data-format="(%NUMBER% today)" data-number="0"></span> today)</p>
                                                        </div>
                                                        <div class="staat-item step-up">
                                                            <h5 class="count-up" data-number="80">&nbsp;</h5>
                                                            <p>Cups of coffee</p>
                                                            <p>(<span class="count-up" data-number="50" data-format="(%NUMBER% cans of coke)" ></span> cans of coke)</p>
                                                        </div>
                                                        <div class="staat-item step-up">
                                                            <h5>😜</h5>
                                                            <p>Favourite emoji</p>
                                                            <p>(closely followed by 👊)</p>
                                                        </div>
                                                        <div class="staat-item step-up">
                                                            <h5 class="count-up" data-number="5">&nbsp;</h5>
                                                            <p>Dad jokes</p>
                                                            <p>(by actual dads: <span class="count-up" data-number="2"></span>)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="waypoint">
                                                    <h4 class="step-up">Since Inception</h4>
                                                    <div class="staats-group">
                                                        <div class="staat-item step-up">
                                                            <h5 class="count-up" data-number="200" data-to="300" data-speed="1500">&nbsp;</h5>
                                                            <p>Happy customers</p>
                                                        </div>
                                                        <div class="staat-item step-up">
                                                            <h5 class="count-up" data-number="10">&nbsp;</h5>
                                                            <p>Labs</p>
                                                        </div>
                                                        <div class="staat-item step-up">
                                                            <h5>6</h5>
                                                            <p>Pets</p>
                                                        </div>
                                                        <div class="staat-item step-up">
                                                            <h5 class="count-up" data-number="400" data-to="300" data-speed="1500">&nbsp;</h5>
                                                            <p>Handshakes</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offrampsContainer">
                        <div class="offramps">
                            <div class="offramp" data-mode="inactive" data-type="services" role="complementary" aria-labelledby="b868d047" aria-describedby="1bd553c5"> 
                                <div data-href="/services" class="block"> 
                                    <h3 id="b868d047">Work with Us.</h3> 
                                    <p id="1bd553c5">Tell us about your idea and let us help you create it.</p>
                                    <a class="bigbuttons" href="project.php">GET STARTED</a>                              
                                </div> 
                            </div> 

                            <div class="offramp" data-mode="inactive" data-type="work" role="complementary" aria-labelledby="eaa527fd" aria-describedby="1683f1b6"> 
                                <div data-href="/work" class="block"> 
                                    <h3 id="eaa527fd">Our Work.</h3> 
                                    <p id="1bd553c5">A behind the scenes look at our projects and client partners.</p> 
                                    <a class="bigbuttons" href="">TOUR PLATFORM</a>
                                </div> 
                            </div>
                        </div>                        
                    </div>
                    <div class="cbar">	
                        <div class="cbarItem">
                            <ul>
                                <li><i class="fa fa-mobile" style="font-size: 28px;font-weight: 400; color: #000000;"></i> <span>Easy load in all devices</span></li>
                            </ul>
                        </div>
                        <div class="cbarItem">
                            <ul>
                                <li><i class="fa fa-shield" style="font-size: 28px;font-weight: 400; color: #000000;"></i> <span>Secure admin consoles</span></li>
                            </ul>
                        </div>
                        <div class="cbarItem">
                            <ul>
                                <li><i class="fa fa-cog" style="font-size: 28px;font-weight: 400; color: #000000;"></i> <span>One year Warranty</span></li>
                            </ul>
                        </div>
                        <div class="cbarItem">
                            <ul>
                                <li><i class="fa fa-code" style="font-size: 28px;font-weight: 400; color: #000000;"></i> <span>100% Safe &amp; Secure Code</span></li>
                            </ul>
                        </div> 
                    </div>

                    <!--                    <div class="newsletter">
                                            <div class="subscribe offrampsContainer">
                                                <div class="offramps">
                                                    <div class="offramp statement">
                                                        <div class="blocked">
                                                            <h4 id="b868d047">Join the club</h4>
                                                            <p id="1bd553c5">For happy hour sales and new product releases</p>
                                                        </div>
                                                    </div>
                                                    <div class="offramp">
                                                        <div class="">
                                                            <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                    
                                                                <input type="email" class="required nl-inputbox join" placeholder="Email Address" value="" id="mce-EMAIL" required="" name="EMAIL">
                                                                <br /><br />
                                                                <input type="submit" value="Join" class="nl-submit formbutton">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                    <div class="rowContainer">
                        <div class="row">
                            <div class="nl-textbox col">
                                <h9>JOIN THE COLLECTIVE</h9>
                                <p>For happy hour sales, new product releases and newsletters</p>
                            </div>  
                            <div class="nl-fields col">
                                <div class="nl-mainbox">
                                    <form action="" method="post" id="" name="" class="validate" target="">
                                        <input type="email" class="join nl-inputbox" placeholder="Email Address" value="" id="mce-EMAIL" required name="EMAIL" >
                                        <input type="submit" value="Join" class="nl-submit formbutton">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--                    <div id="partnerships" class="partnerships">
                                            <div class="contained">
                                                <div class="row">
                                                    <a class="partnership-link" href="/getty/">
                                                        <div class="partnership-container col-6 col-md-12" data-scroll data-scroll-image="https://cdn-media.leanin.org/media/2017-02-24/1487959654915/partnerships-1.jpg">
                                                            <div class="partnerships-content padding-sm">
                                                                <h3 class="tile-title heading-3 padding-bottom-md">See how we&#39;re re-picturing women with Getty Images</h3>
                                                                <p class="text-white font-body font-primary hide-sm margin-bottom-xs">LeanIn.Org and Getty Images have teamed up to create the Lean In Collection—a library of thousands of creative images devoted to the powerful depiction of women, girls, and families of all kinds.</p>
                                                                <a href="/getty/"
                                                                   target="_blank"
                                                                   class="font-secondary">View the collection<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px" viewBox="0 0 512 512"><path d="M298.3,256L298.3,256L298.3,256L131.1,81.9c-4.2-4.3-4.1-11.4,0.2-15.8l29.9-30.6c4.3-4.4,11.3-4.5,15.5-0.2l204.2,212.7 c2.2,2.2,3.2,5.2,3,8.1c0.1,3-0.9,5.9-3,8.1L176.7,476.8c-4.2,4.3-11.2,4.2-15.5-0.2L131.3,446c-4.3-4.4-4.4-11.5-0.2-15.8 L298.3,256z"></path></svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </a>
                    
                                                    <a class="partnership-link" href="https://womenintheworkplace.com/">
                                                        <div class="partnership-container col-6 col-md-12" data-scroll data-scroll-image="https://cdn-media.leanin.org/sgff_r1eHetbDYb/2017-10-18/1508345182120/wiw_new.jpg">
                                                            <div class="partnerships-content padding-sm">
                                                                <h3 class="tile-title heading-3 padding-bottom-md">Read the 2017 Women in the Workplace study</h3>
                                                                <p class="text-white font-body font-primary hide-sm margin-bottom-xs">Women in the Workplace 2017 is a comprehensive study of the state of women in corporate America. This research is part of a long-term partnership between LeanIn.Org and McKinsey &amp; Company.</p>
                                                                <a href="https://womenintheworkplace.com/"
                                                                   target="_blank"
                                                                   class="font-secondary">Learn more
                                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px" viewBox="0 0 512 512"><path d="M298.3,256L298.3,256L298.3,256L131.1,81.9c-4.2-4.3-4.1-11.4,0.2-15.8l29.9-30.6c4.3-4.4,11.3-4.5,15.5-0.2l204.2,212.7 c2.2,2.2,3.2,5.2,3,8.1c0.1,3-0.9,5.9-3,8.1L176.7,476.8c-4.2,4.3-11.2,4.2-15.5-0.2L131.3,446c-4.3-4.4-4.4-11.5-0.2-15.8 L298.3,256z"></path></svg>
                                                                </a>
                                                            </div>
                    
                                                            <img src="images/landing-page-mobile-devices.jpeg" alt=""/>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>-->
                </div>
            </div>
        </div>
        <footer>
        <div class="footerCover">
            <div class="profileFrameTitle">
                <div class="profileTitle">
                    <h9 class="textUnderline">GET IN TOUCH</h9>
                </div>                
            </div>
            <div class="contact-form" id="">
                <p>If you have a question, send an email to <span style="color: #7193AC;">help@trikkle.com</span> or simply fill out the form below:</p>
                <form class="">
                    <div class="form">
                        <div class="formFields">
                            <div class="col-xs-6 animated fadeInLeft visible" data-animation="fadeInLeft" data-animation-delay="300">
                                <input type="email" name="mail" id="mail" class=" ask light requiredField ff-cf-email ff-contact-field-not-valid" placeholder="Email">
                                <input type="text" name="subject" id="subject" class=" ask light requiredField ff-cf-subject ff-contact-field-not-valid" placeholder="Subject">
                            </div>
                            <div class="col-xs-6 animated fadeInRight visible" data-animation="fadeInLeft" data-animation-delay="300">
                                <textarea name="message" id="message" class=" searchText textarea light requiredField ff-cf-message ff-contact-field-not-valid" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="formSubmit">
                            <button type="submit" id="submit" name="submit" class="light bigbuttons btn-primary-dark bold-button">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="social" >
                <a class="fa fa-facebook" style="color: #ffffff; font-size: 20px;font-weight: 400; font-family: FontAwesome;"></a>
                <a class="fa fa-twitter" style="color: #ffffff; font-size: 20px;font-weight: 400; font-family: FontAwesome;"></a>
                <a class="fa fa-instagram" style="color: #ffffff; font-size: 20px;font-weight: 400; font-family: FontAwesome;"></a>
                <a class="fa fa-youtube-play" style="color: #ffffff; font-size: 20px;font-weight: 400; font-family: FontAwesome;"></a>
            </div>
            site by <a href="" rel="nofollow" target="_blank">trikkle</a>
            </div>
        </footer>
    </body>
</html>