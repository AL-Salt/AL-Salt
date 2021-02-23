<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="GE_Dinar_Two/GE Dinar Two Light.ttf">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="jquery-3.5.1.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=apRJxGF6"></script>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css.css">
    <title>HomePage</title>
    <style>
        
    
        .nav-item a {
            font-size: 16px !important;
            font-weight: 300px !important;
            color: #0c3e72 !important;
            /* font-family: !important; */
        }

        .dark {
            background-color: #222;
            color: #e6e6e6;
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
    </style>

</head>

<body dir="rtl">
    <!--STRAT NAVBAR-->
<div class="">
    <nav class="navbar navbar-expand-xl navbar-light">

        <div class="row">

        <div class="col-2 my-1 ml-auto">
        <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link ml-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="" src="img/search.png " alt=" ">
                     </a>
                    <div class="dropdown-menu dropdown-menu-right" style="width:300px;background-color:rgb(0,0,0,0);border:none;" aria-labelledby="navbarDropdown">
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" style="color:black;background-color:white;border-radius :100%;" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                    <input style="border-radius:10px 10px 10px 10px;" type="text" class="form-control" placeholder="Search" aria-label="" aria-describedby="basic-addon1" style="text-align:left;">
                    </div>
                    <!-- <a class="dropdown-item">خدمات الاكترونية</a> -->
                    </div>
                </li> 

                <li>
                   <a href="EN"> <img class="ml-3 my-2" src="img/global.png " alt=" "></a>
                </li>
                <li>
                    <a href="question.php"><img class="ml-3 my-2" src="img/about.png " alt=" "></a>
                </li>
            </ul>

                <!-- <img class="ml-3 my-1" src="img/search.png " alt=" "> -->
            </div>

            <div class="col-8 logonaves">
                <a class="navbar-brand">
                    <img class="imglogo" src="img/HeaderLogo.png" alt="">
                </a>
            </div>

            <div class="bookmark col-2">
                <img class="ml-3" src="img/book.png" alt=" ">
                <br><br>
                <button class="navbar-toggler butedit" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" dir="ltr">

                <li class="nav-item active text-left">
                    <a class="nav-link textstyelsn" href="index.php">Home Page<span class="sr-only">(current)</span></a>
                </li>


                <li class="nav-item dropdown text-left">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

                <li class="nav-item dropdown text-left">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                     </a>
                    <div class="dropdown-menu dropdown-menu-right text-left" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="electronic_services.php">Electronic Services</a>
                        <a class="dropdown-item" href="">One window service</a>
                    </div>
                </li>


                <li class="nav-item text-left">
                    <a class="nav-link" href="advertisements.php">Advertisements</a>
                </li>

                <li class="nav-item dropdown text-left">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    The media
                     </a>
                    <div class="dropdown-menu dropdown-menu-right text-left" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="last_issue.php">last number</a>
                        <a class="dropdown-item" href="news.php">News</a>
                        <!-- <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>

                <li class="nav-item text-left">
                    <a class="nav-link" href="procedures_guide.php">Procedures Manual</a>
                </li>

                <li class="nav-item dropdown dropdown-menu-right text-left">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Events
                     </a>
                    <div class="dropdown-menu dropdown-menu-right text-left" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="activities_and_events.php">Activities and Events</a>
                        <a class="dropdown-item" href="initiatives.php">Initiatives</a>
                        <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>


                <li class="nav-item dropdown text-left">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Tourism
                     </a>
                    <div class="dropdown-menu dropdown-menu-right text-left" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Tourism about Al-Salt</a>
                        <a class="dropdown-item" href="#">Tourism in Jordan</a>
                        <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>

                <li class="nav-item dropdown text-left">
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


                <li class="nav-item dropdown text-left">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Brief History
                     </a>
                    <div class="dropdown-menu dropdown-menu-right text-left" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="from_al-salt.php">About Salt</a>
                        <a class="dropdown-item" href="from_al-salt.php">About Municipality of Salt</a>
                    </div>
                </li>

                <li class="nav-item dropdown text-left">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Call Us
                     </a>
                    <div class="dropdown-menu dropdown-menu-right text-left" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="opinion_us.php">Opinion of Us</a>
                        <a class="dropdown-item" href="call_us.php">Complaints and suggestions</a>
                        <a class="dropdown-item" href="join_us.php">Join Us</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
    <!-- end navbar -->


    <!--Start Slider-->
    <div class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" height="600px" src="img/tarek.png" alt="First slide">
            </div>

            <!-- <div class="dropdown" style="position:fixed;">
                <button class="btn btn-secondary " style="border-radius:100%;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    dd
                </button>
                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuButton">
                    <div class="dropdown-item">
                     <ul class="list-group" aria-hidden="true">
                    <li class="list-group-item">
                        <button style="border:none;" id="bigger"><img src="img/font.png" alt=""></button>
                        <button style="border:none;" id="smaller"><img class="my-1" src="img/font2.png" alt=""></button>
                        <button style="border:none;" id="moreBigger"><img class="my-1 mr-3" src="img/font3.png" alt=""></button>
                        <button style="border:none;" id="checkbox"><img class="my-1" src="img/picture (1).png" alt=""></button>
                        <img class="my-1" src="img/picture (1)0.png" alt="">
                        <img class="my-1" src="img/picture (2).png" alt="">
                        <img class="my-1" src="img/visibility.png" alt="">
                        <img class="my-1" src="img/invisible.png" alt="">
                        <img class="my-1" src="img/microphone.png" alt="">
                        <img class="my-1" src="img/keyboard.png" alt="">
                    </li>
                </ul>
            </div> -->
            <div class="d-flex justify-content-start">
                    <div class="carousel-control-next listrightslider1">
                        <ul class="list-group" aria-hidden="true">
                            <li class="list-group-item imgslidestop" style="margin-top:50px;">
                                <button style="border:none;" id="bigger"><img src="img/font.png" alt=""></button>
                                <button style="border:none;" id="smaller"><img class="my-1" src="img/font2.png" alt=""></button>
                                <button style="border:none;" id="moreBigger"><img class="my-1 mr-3" src="img/font3.png" alt=""></button>
                                <button style="border:none;" id="checkbox"><img class="my-1" src="img/picture (1).png" alt=""></button>
                                <img class="my-1" src="img/picture (1)0.png" alt="">
                                <img class="my-1" src="img/picture (2).png" alt="">
                                <img class="my-1" src="img/visibility.png" alt="">
                                <img class="my-1" src="img/invisible.png" alt="">
                                <img class="my-1" src="img/microphone.png" alt="">
                                <img class="my-1" src="img/keyboard.png" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
    
            <!-- listrightslider2 -->
     
    

            <!-- listrightslider2 -->
            <div class="text-left" style="height: 90px; margin-top: 400px; float: left;">
                <ul class="list-group" aria-hidden="true">
                    <li class="list-group-item" style="width: 265px;background-color:rgb(241, 151, 30,0.9);">
                        <!-- imgslidestop1 -->
                        <p class="textpagslidesenw my-2 float-left" style="
                        width: 157px; color:white; font-size: 25px;
                    ">Title Page</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--End Slider-->

