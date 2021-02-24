<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="jquery-3.5.1.js">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="GE_Dinar_Two/GE Dinar Two Light.ttf">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=apRJxGF6"></script>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <link rel="stylesheet" href="fontawesome/css/all.css">
    <!--CSS 
Add slick.css in your <head>
-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.min.css">

    <!--JS
Add slick.js before your closing <body> tag, after jQuery (requires jQuery 1.7 +)
-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.js"></script>

    <title>HomePage</title>
    <style>
        .nav-item a {
            font-size: 14px !important;
            font-weight: bold !important;
            color: #0c3e72 !important;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
        }

        .dark {
            background-color: #222;
            color:  rgb(248, 172, 29);
            /* #e6e6e6 */
        }
        .dark 
        ,slider{
            color:  rgb(248, 172, 29);
        }
        
        .theme-switch-wrapper {
            display: flex;
            align-items: center;
            float: right;
        }
        
        .theme-switch {
            display: inline-block;
            height: 34px;
            position: relative;
            width: 60px;
            text-align: right;
        }
        
        .theme-switch input {
            display: none;
        }
        .carousel-caption {
            right: 680px;
            top: 60px;
            width: 350px;
        }
        @media (max-width: 990px) {
            .carousel-caption {
                display: none !important;
            }
            .carousel-item img {
                width: 100% !important;
            }
            .prev_nex {
                margin-right: -45px;
                padding: 5px !important;
            }
        }

        /* INNER CONTAINER */
        .ticker-wrap {
            width: 100%;
            margin-left: -100%;
            /* padding-left: 100%; */
            /* Push contents to right side of screen */
        }

        @keyframes ticker {
            0% {
                transform: translate3d(0, 0, 0);
            }
            100% {
                transform: translate3d(100%, 0, 0);
            }
        }

        .ticker-move {
            /* Basically move items from right side of screen to left in infinite loop */
            display: inline-block;
            white-space: nowrap;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            animation-name: ticker;
            animation-duration: 15s;
        }

        .ticker-move:hover {
            animation-play-state: paused;
            /* Pause scroll on mouse hover */
        }


        /* ITEMS */

        .ticker-item {
            display: inline-block;
            /* Lay items in a horizontal line */
            padding: 0 2rem;
        }

        @media only screen and (max-width: 768px) {
            .ticker-move {
                animation-duration: 20s;
            }
        }
        
        .homepage_text {
            font-family: GEDinarTwo-Light, GE Dinar Two;
            font-size: 20px;
            color: #0c3e72 !important;
        }
        .card_style1{
            border:none;
            background-color: rgb(248, 172, 29, 0.93);
        }
        .card_style2{
            border:none;
            background-color: rgb(248, 172, 29, 0.78);
        }
        .card_style3{
            border:none;
            background-color: rgb(248, 172, 29, 0.62);
        }
        .card_style4{
            border:none;
            background-color: rgb(248, 172, 29, 0.37);
        }
        .card_group_style{
            border:none;
        }
    </style>
</head>

<body dir="rtl">

    <!--STRAT NAVBAR-->
    <nav class="navbar navbar-expand-xl navbar-light fixed-top" style="background-color: rgb(255, 255, 255,0.7);">
            <div style="float: left;">
                <a class="navbar-brand kk mr-2" href="#">
                    <img class="imglogo" src="img/HeaderLogo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            </div>

            <div>
                <table class="w-25">
                    <tr>
                        <td>
                            <form action="" method="post">  
                                <div class="dropdown" style="background-color:rgb(0,0,0,0);">
                                    <button style="background-color:rgb(0,0,0,0);border:none;" class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="" src="img/search.png" width="30px">
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">
                                            <input type="text" name="t1" placeholder="Search" class="text-left" style="padding:4px;">
                                            <button class="btn btn-success w-25">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </td>
                        
                        <td>
                            <div class="mr-4">
                                <a href="question.php"><img class="" src="img/about.png" width="30px"></a>
                            </div>
                        </td>
                        <td>
                            <div class="mr-4">
                                <a href="../"><img class="" src="img/global.png" width="30px"></a>
                            </div>
                        </td>
                        <td>
                            <div class="mr-4">
                                <a href="#">Login</a>    
                            </div>
                        </td>
                        <td>
                            <div class="mr-4">
                                <a href="#">SignUp</a>    
                            </div>
                        </td>
                    </tr>
                </table>
            </div>


            <!-- <div class="card-group text-right" style="background-color:rgb(0,0,0,0);width:410px">
                <div class="card col-6 col-sm-3" style="background-color:rgb(0,0,0,0);border:none">
                    <form action="" method="post">  
                        <div class="dropdown" style="background-color:rgb(0,0,0,0);">
                            <button style="background-color:rgb(0,0,0,0);border:none;" class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="" src="img/search.png" width="30px">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">
                                    <input type="text" name="t1" placeholder="Search" class="text-left" style="padding:4px;">
                                    <button class="btn btn-success w-25">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card col-6 col-sm-3 my-2" style="background-color:rgb(0,0,0,0);border:none">
                    <img class="" src="img/about.png" width="30px">
                </div>
                <div class="card col-6 col-sm-3 my-2" style="background-color:rgb(0,0,0,0);border:none">
                    <a href="../"><img class="" src="img/global.png" width="30px"></a>
                </div>
                <div class="card col-6 col-sm-3 my-2" style="background-color:rgb(0,0,0,0);border:none">
                   <a href="#">SignUp</a>    
                </div>
                <div class="card col-6 col-sm-3 my-2" style="background-color:rgb(0,0,0,0);border:none">
                   <a href="#">Login</a>    
                </div>
            </div>
 -->
        <!-- style="float: right;" -->
        <div class="collapse navbar-collapse text-left navstyle float-left"  id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto my-3 " dir="ltr">

                <li class="nav-item active text-left">
                    <a class="nav-link" href="index.php">Home Page<span class="sr-only"></span></a>
                </li>


                <li class="nav-item dropdown">
                    <a id="ttt" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Municipality of Salt
                     </a>
                    <div class="dropdown-menu dropdown-menu-right text-left" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="Municipal_council_members.php">Municipal council members</a>
                        <a class="dropdown-item" href="presidency_municipal_council.php">Presidency Municipal Council</a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="relationship.php">Our relationships</a>
                        <a class="dropdown-item" href="Board_committees.php">Board committees</a>
                        <a class="dropdown-item" href="Previous_Boards.php">Previous boards</a>
                        <a class="dropdown-item" href="municipal_areas.php">Municipal areas</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                     </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="electronic_services.php">Electronic Services</a>
                        <a class="dropdown-item" href="">One window service</a>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="advertisements.php">Advertisements</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    The media
                     </a>
                    <div class="dropdown-menu dropdown-menu-right text-left" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="last_issue.php">last number </a>
                        <a class="dropdown-item" href="news.php">News</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="procedures_guide.php">Procedures Manual</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Events
                     </a>
                    <div class="dropdown-menu dropdown-menu-right text-left" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="activities_and_events.php">Activities and Events</a>
                        <a class="dropdown-item" href="initiatives.php">Initiatives</a>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tourism
                     </a>
                    <div class="dropdown-menu dropdown-menu-right text-left" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Tourism about Al-Salt</a>
                        <a class="dropdown-item" href="#">Tourism in Jordan</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Multiple topics 
                     </a>
                    <div class="dropdown-menu dropdown-menu-right text-left" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="multiple_page.php">Multiple Pages</a>
                        <a class="dropdown-item" href="dawnload_center.php">Download center</a>
                        <a class="dropdown-item" href="from_al-salt.php">Al-Salt community</a>
                        <a class="dropdown-item" href="about_jordan.php">About Jordan</a>
                        <a class="dropdown-item" href="procedures_guide.php">Procedures Guide</a>
                        <a class="dropdown-item" href="from_al-salt.php">Organizational Structure</a>
                        <a class="dropdown-item" href="bids.php">Bids</a>
                        <a class="dropdown-item" href="from_al-salt.php">Achievements</a>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Brief History
                     </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="from_al-salt.php">About Salt</a>
                        <a class="dropdown-item" href="from_al-salt.php">About Municipality of Salt</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Call Us
                     </a>
                    <div class="dropdown-menu dropdown-menu-right text-left" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="opinion_us.php">Opinion of Us</a>
                        <a class="dropdown-item" href="call_us.php">Complaints and suggestions</a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="join_us.php">Join Us</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end navbar -->


    <!--Start Slider-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" style="max-height: 600px;">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/RepeatGrid28.png" height="600px" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/RepeatGrid28.png" height="600px" alt="Second slide">
            </div>

            <div class="carousel-control-next listrightslider">
                <ul class="list-group" aria-hidden="true">
                    <li class="list-group-item imgslidestop">
                        <button style="border:none;" id="bigger"><img src="img/font.png" alt=""></button>
                        <button style="border:none;" id="smaller"><img class="my-1" src="img/font2.png" alt=""></button>
                        <button style="border:none;" id="moreBigger"><img class="my-1 mr-3" src="img/font3.png" alt=""></button>
                        <button style="border:none;" id="checkbox"><img class="my-1" src="img/picture (1).png" alt=""></button>
                        <img class="my-1" src="img/picture (1)0.png" alt="">
                        <img class="my-1" src="img/picture (2).png" alt="">
                        <img class="my-1" src="img/visibility.png" alt="">
                        <img class="my-1" src="img/invisible.png" alt="">
                        <button type="button" id=''><img class="my-1" src="img/microphone.png" alt=""></button>
                        <img class="my-1" src="img/keyboard.png" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--End Slider-->

    <!--Start ticker-->

    <div class="container-fluid tickernews" dir="rtl">
        <div class="row">
            <div class="col-10">
                <div class="tcontainer">
                    <div class="ticker-wrap">
                        <div class="ticker-move body_news_ticker" style="padding: 12px;">
                            <div class="ticker-item">
                            <p>        
                                 sakjd asj djasd las  dlas dlasd asjd asld 
                            </p> 
                        </div>

                            <img src="img/ticker.png" width="63" height="49" alt="">
                            <div class="ticker-item">
                            <p>
                                sakjd asj djasd las  dlas dlasd asjd asld 
                            </p>
                            </div>
                            <img src="img/ticker.png" width="63" height="49" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 tickernews d-flex justify-content-end titlenew_header_right">
                <p class="d-flex align-items-center newss my-2">News Ticker</p>
            </div>
        </div>
    </div>
    <!--end ticker-->
    

<div class="card-group card_group_style py-5">

  <div class="card text-center card_style1">
    <div class="card-body">
    <img class="my-4" src="img/Page-1.png" alt="Card image cap">
    <a href="bids.php"><p class="card-text my-3 homepage_text">Bidding</p></a>
    </div>
  </div>
  
  <div class="card text-center card_style2">
    <div class="card-body">
    <img class="my-4" src="img/broken-link.png" alt="Card image cap">
    <a href="#"><p class="card-text my-3 homepage_text">Important links</p></a>
    </div>
  </div>

  <div class="card text-center card_style3">
    <div class="card-body">
    <img class="my-4" src="img/question (1).png" alt="Card image cap">
    <a href="question.php"><p class="card-text my-3 homepage_text">Frequently Asked Questions</p></a>
    </div>
  </div>

  <div class="card text-center card_style4">
    <div class="card-body">
    <img class="my-4" src="img/file.png" alt="Card image cap">
    <a href="dawnload_center.php"><p class="card-text my-3 homepage_text">Download Center</p></a>
    </div>
  </div>

</div>


<!-- 
    <div class="container-fluid py-5 center_home_design">
        <div class="carddesignNew">
            <div class="row">
                <div class="col-6 col-sm-4 card1">
                    <div class="itemscontent fade">
                        <img class="logoata" src="img/Page-1.png" alt="">
                        <a href="bids.php"><p class="itemstext">Bidding</p></a>
                    </div>
                </div>
                <div class="col-6 col-sm-2 card2">
                    <div class="itemscontent1 fade">
                        <img src="img/broken-link.png" alt="">
                        <p class="itemstext1">Important links</p>
                    </div>
                </div>
                <div class="col-6 col-sm-2 card3">
                    <div class="itemscontent1 fade">
                        <img src="img/question (1).png" alt="">
                        <a href="question.php"><p class="itemstext2">Frequently Asked Questions</p></a>
                    </div>
                </div>
                <div class="col-6 col-sm-4 card4">
                    <div class="itemscontent2 fade">
                        <img class="logoata1" src="img/file.png" alt="">
                       <a href="dawnload_center.php"> <p class="itemstext3">Download center</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


<div class="card notecontainer d-flex justify-content-center" style="background-image: URL('img/Repeat Grid 8.png');">
<div class="card-body text-center">
        <div class="container">
            <h1 style="margin-top:100px;">askdn asjjd aklsd</h1>
        <p class="card-text">
             sad asd asdasd a\s \afsf\afa\fsad\sadsad\sa fds
        </p>
        <div class="logo_more">
            <a href="#">More</a>
        </div>
    </div>
  </div>
</div>




    <div class="endslider">
        <div class="container">
            <div class="text-center">
                <p class="title_news_slider_arrow">News</p>
                <p class="body_news_slider_arrow">sad jasdkjasd js dkaj dsjsdaj dsajsd aj</p>
            </div>
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <div class="bg-warning p-2 prev_nex">
                            <a class="nex" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <img src="img/icon (2).png" height="40px" aria-hidden="true" alt="">
                            </a>
                            <a class="prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <img src="img/icon (1).png" height="40px" aria-hidden="true" alt="">
                            </a>
                        </div>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/Repeat Grid 5.png" height="400px" class="d-block w-50" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="slider_multi_arrow">asdjn asd kjasd</h5>
                                <p>
                                   sad asda das das sad asda das das sad asda das das sad asda das das 
                                </p>
                                <button class="btn btnmore text-white">More</button>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Repeat Grid 5.png" height="400px" class="d-block w-50" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="slider_multi_arrow">asdjn asd kjasd</h5>
                                <p>
                                sad asda das das sad asda das das 
                                </p>
                                <button class="btn btnmore text-white">More</button>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Repeat Grid 5.png" height="400px" class="d-block w-50" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="slider_multi_arrow">asdjn asd kjasd</h5>
                                <p>
                                   sadassad asda das das sad asda das das 
                                </p>
                                <button class="btn btnmore text-white">More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: rgba(224,224,225,0.34);">
        <div class="container my-5">
            <div class="slidenice">
                <div class="item">
                    <div id="box" class="box slider_footer_end d-flex justify-content-center" style="background-image:url('img/RepeatGrid28.png'); height: 250px;">
                        <p class="slider_card_craz" id="testhide">Municipal Council decision</p>
                        <div id="cover" class="covernew p-5 d-flex justify-content-center">
                            <!-- <a href="#"> -->
                            <table class="text-left my-4">
                                <tr>
                                    <th class="font_h hover_up_slider_card"> asd asd asd</th>
                                </tr>
                                <tr>
                                    <td class="text_up_hover_card">asd kasjd ksjad </td>
                                </tr>
                            </table>
                            <!-- </a> -->
                            <p class="btn btnmore">More</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div id="box" class="box slider_footer_end d-flex justify-content-center" style="background-image:url('img/RepeatGrid28.png'); height: 250px;">
                        <p class="slider_card_craz" id="testhide">Municipal Council decision</p>
                        <div id="cover" class="covernew p-5 d-flex justify-content-center">
                            <!-- <a href="#"> -->
                            <table class="text-left my-4">
                                <tr>
                                    <th class="font_h hover_up_slider_card">asd kasjd ksjad  </th>
                                </tr>
                                <tr>
                                    <td class="text_up_hover_card">asd kasjd ksjad asd kasjd ksjad </td>
                                </tr>
                            </table>
                            <!-- </a> -->
                            <p class="btn btnmore">More</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div id="box" class="box slider_footer_end d-flex justify-content-center" style="background-image:url('img/RepeatGrid28.png'); height: 250px;">
                        <p class="slider_card_craz" id="testhide">Municipal Council decision</p>
                        <div id="cover" class="covernew p-5 d-flex justify-content-center">
                            <!-- <a href="#"> -->
                            <table class="text-left my-4">
                                <tr>
                                    <th class="font_h hover_up_slider_card">asd kasjd ksjad </th>
                                </tr>
                                <tr>
                                    <td class="text_up_hover_card">asd kasjd ksjad asd kasjd ksjad </td>
                                </tr>
                            </table>
                            <!-- </a> -->
                            <p class="btn btnmore">More</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="">
            <div class="div_upper_foot">
                <div class="row text-left p-4">
                    <div class="col-12 col-sm-12 title_box rotate_rate">
                    <p>
                    Vote
                    </p>    
                </div>
                    <div class="col-12 col-sm-12 container">
                        <!-- <table class="row d-flex justify-content-end table_rates">
                            <tr> -->
                                <label class="rotate_rate">Good</label><input type="radio" name="r" id="">
                                <label class="rotate_rate">Very Good</label><input type="radio" name="r" id="">
                                <label class="rotate_rate">Excellent</label><input type="radio" name="r" id="">
                                <label class="rotate_rate"> ? What do you think of the design </label>
                            <!-- </tr> -->
                        <!-- </table> -->
                    </div>
                    <div class="col-12 col-sm-12 d-flex justify-content-end">
                        <!-- <table class="table_rates2"> -->
                            <!-- <tr> -->
                                <!-- <td class="rotate_rate"> -->
                                    <i class="fa fa-arrow-right my-2 ml-2" aria-hidden="true"></i> 
                                    <a class="rotate_rate" href="#">Results</a>
                                <!-- </td> -->
                                <!-- <td class="rotate_rate"> -->
                                    <i class="fa fa-arrow-right my-2 ml-2 mr-2" aria-hidden="true"></i> 
                                    <a class="rotate_rate" href="#">Vote</a>
                                <!-- </td> -->
                            <!-- </tr> -->
                        <!-- </table> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  

    <div class="card" style="border:none;background-color: rgba(224,224,225,0.34); margin-top:-48px ;">
        <div class="card-img">
            <img src="img/Repeat Grid 11.png" class="w-100" alt="">
        </div>
    </div>


<!-- Footer -->

<footer class="text-center text-white footerss" style="background-color: rgb(17, 44, 64);">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
          <i class="fab fa-facebook-f"></i>
          <!-- <i class="fa fa-facebook-square" aria-hidden="true"></i> -->
        </a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-youtube"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

     
    </section>
    <!-- Section: Social media -->

 
    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          <ul class="list-unstyled mb-0">
              <li>
                  <h5 class="text-uppercase">The number of visitors</h5>
              </li>
            <li>
            <img src="img/eye (1).png" style="width:20px" alt="">
                 <div id="CounterVisitor">
                    <span class="counter-item">0</span>
                  </div>
            </li>
          </ul>
        </div>



        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          <ul class="list-unstyled mb-0 my-1">
              <li>
                  <h5 class="text-uppercase">Call Us</h5>
              </li>
            <li>
              <a href="opinion_us.php" class="text-white my-1">Your Opinion of Us</a>
            </li>
            <li>
              <a href="call_us.php" class="text-white my-1">Complaints and suggestions</a>
            </li>
            <li>
              <a href="join_us.php" class="text-white my-1">Join Us</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <!-- <h5 class="text-uppercase">Links</h5> -->

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Home Page</a>
            </li>
            <li>
              <a href="#!" class="text-white">About the municipality</a>
            </li>
            <li>
              <a href="#!" class="text-white">Products and services</a>
            </li>
            <li>
              <a href="#!" class="text-white">News</a>
            </li>
            <li>
              <a href="#!" class="text-white">Media Center</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <img src="img/logo_footer.png" class="w-75" alt="">
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      All Rights reserved © 2020
    <a class="text-white" href="http://www.jordancode.com/Default.aspx?Lng=2&P=h">Jordan Code Company</a>
  </div>
 
    
             
        
         
  <!-- Copyright -->
</footer>
    <!-- Footer -->
    <!-- <div class="container-fluid py-5 footerss">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-4 my-5  text-left">
                    <img class="m-2" src="img/Repeat Grid 12.png" alt="">
                    <img class="m-2" src="img/Repeat Grid 13.png" alt="">
                    <img class="m-2" src="img/Repeat Grid 14.png" alt="">
                    <img class="m-2" src="img/XMLID_822_.png" alt="">
                </div>
                <div class="col-6 col-sm-8 text-left">
                    <a class="mr-1 f" href="">نبذة عن بلدية ال</a>
                    <a class="mr-3 f" href="">المنتجات والخدما</a>
                    <a class="mr-3 f" href="">الاخبار</a>
                    <a class="mr-3 f" href="">المركز الاعلامي</a>
                    <a class="mr-3 f" href="">اتصل بن</a>
                    <img src="img/logo_footer.png" alt="">
                </div>
            </div>
            <hr class="hrfooter">
            <div class="row">
                <div class="col-4 py-2 text-left" style="color:white">
                    <p>جميع الحقوق محفوظة & 2020 شركة جوردن كود</p>
                </div>
                <div class="col-8 text-left">
                    <table class="float-right">
                        <tr>
                            <td>
                                <img src="img/eye (1).png" alt="">
                            </td>
                            <td style="font-size: 30px;color: white; font-weight: 300px;
                            font-family: ErasITC-Demi, Eras ITC;">
                                12
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div> -->


    <script>
        const listenBtn = document.getElementById('myvoice');
        var element = document.body;
        listenBtn.addEventListener('click', (e) => {
            e.preventDefault();

            const msg = new SpeechSynthesisUtterance(
                document.getElementById('ttt').textContent
                // element.textContent
            );
            window.speechSynthesis.speak(msg);

        });
    </script>

    <script>
        $(document).ready(function() {
            $('#checkbox').click(function() {
                var element = document.body;
                element.classList.toggle("dark");
            });
        });
    </script>

    <script>
            var size = 25; // or any default number yo want
            $(document).ready(function() {
                $("#bigger").click(function() {

                    $("p").css("font-size", size + 1 + "px");
                    //  $("label").css("font-size", size + 1 + "px");
                    if(size <= 29){
                        size++;
                    }
                });
                $("#smaller").click(function() {
                    $("p").css("font-size", size - 1 + "px");
                    if(size >= 20){
                        size--;
                    }
                });
                $("#moreBigger").click(function() {
                    $("p").css("font-size", size + 2 + "px");
                    if(size <= 29){
                        size += 2;
                    }
                });
            });
    </script>

    <script>
        $(document).ready(function() {
            $('.fade').each(function(i) {
                $(this).animate({
                    'opacity': '1',
                    'padding': '15px'
                }, 1000);
            });
        });
    </script>

    <script>
        $("#box").mouseenter(function() {
                $("#testhide").show();
            },
            function() {
                $("#testhide").hide();
            });

        $("#box").mouseout(function() {
                $("#testhide").hide();
            },
            function() {
                $("#testhide").show();
            });
    </script>

    <script>
        $('.slidenice').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            }, {
                breakpoint: 700,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 755,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 759,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 820,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 1107,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }, {
                breakpoint: 1220,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }, {
                breakpoint: 1123,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 419,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 930,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 971,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 987,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 387,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 403,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 812,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 370,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 375,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 360,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 340,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 365,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 355,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },{
                breakpoint: 380,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 2,
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });

        $('.question').slick({
            rtl: true
        });
    </script>

    <script>
        $("#modeee").click(function() {
            $("p").css("font-size", "25px");
            $("a").css("font-size", "25px");
            $("li a").css("font-size", "25px");
            $(".ticker-item").css("font-size", "25px");

            $(".ticker-item").css("background-color", "red");

        });
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>