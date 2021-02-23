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
            font-size: 19px !important;
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

<body>
    <!--STRAT NAVBAR-->
    <nav class="navbar navbar-expand-xl navbar-light">

        <div class="row">
            <div class="col-2 my-1">
                
            <a href="EN"> <img class="ml-3 my-1" data-toggle="tooltip" data-placement="top" title="اللغة الانجليزية" src="img/global.png " alt=" "></a>
            
                <img class="ml-3 my-1" data-toggle="tooltip" data-placement="top" title="البحث"  src="img/search.png " alt=" ">
               <a href="question.php"><img data-toggle="tooltip" data-placement="top" title="المساعدة" class="ml-3 my-1" src="img/about.png " alt=" "></a>
            </div>

            <div class="col-8 logonaves">
                <a class="navbar-brand">
                    <img data-toggle="tooltip" data-placement="top" title="بلدية السلط" class="imglogo" src="img/HeaderLogo.png" alt="">
                </a>
            </div>

            <div class="bookmark col-2">
                
                <img class="mr-3"  data-toggle="tooltip" data-placement="top" title="حفظ الصفحة" src="img/book.png" alt=" ">
                <br><br>
                <button class="navbar-toggler butedit" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto" dir="rtl">

                <li class="nav-item active text-right">
                    <a class="nav-link textstyelsn" href="index.php">الرئيسية<span class="sr-only">(current)</span></a>
                </li>


                <li class="nav-item dropdown text-right">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        عن بلدية السلط
                     </a>
                    <div class="dropdown-menu text-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Municipal_council_members.php">أعضاء مجلس البلدية</a>
                        <a class="dropdown-item" href="presidency_municipal_council.php">رئاسة مجلس البلدية</a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="relationship.php">علاقاتنا</a>
                        <a class="dropdown-item" href="Board_committees.php">لجان المجلس</a>
                        <a class="dropdown-item" href="Previous_Boards.php">مجالس سابقة</a>
                        <a class="dropdown-item" href="municipal_areas.php">مناطق البلدية</a>
                    </div>
                </li>

                <li class="nav-item dropdown text-right">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        خدماتنا
                     </a>
                    <div class="dropdown-menu text-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="electronic_services.php">خدمات الاكترونية</a>
                        <a class="dropdown-item" href="">خدمة نافذة واحدة</a>
                    </div>
                </li>


                <li class="nav-item text-right">
                    <a class="nav-link" href="advertisements.php">اعلانات</a>
                </li>

                <li class="nav-item dropdown text-right">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        وسائل الاعلام
                     </a>
                    <div class="dropdown-menu text-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="last_issue.php">العدد الاخير</a>
                        <a class="dropdown-item" href="news.php">الأخبار</a>
                        <!-- <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>

                <li class="nav-item text-right">
                    <a class="nav-link" href="procedures_guide.php">دليل الاجراءات</a>
                </li>

                <li class="nav-item dropdown text-right">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        فعاليات
                     </a>
                    <div class="dropdown-menu text-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="activities_and_events.php">أنشطة وفعاليات</a>
                        <a class="dropdown-item" href="initiatives.php">مبادرات</a>
                        <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>


                <li class="nav-item dropdown text-right">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        السياحة
                     </a>
                    <div class="dropdown-menu text-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">السياحة عن السلط</a>
                        <a class="dropdown-item" href="#">السياحة بالاردن</a>
                        <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>

                <li class="nav-item dropdown text-right">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        مواضيع متعددة  
                     </a>
                    <div class="dropdown-menu text-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="multiple_page.php">صفحات متعددة</a>
                        <a class="dropdown-item" href="dawnload_center.php">مركز التحميل</a>
                        <a class="dropdown-item" href="from_al-salt.php">مجتمع السلط</a>
                        <a class="dropdown-item" href="about_jordan.php">عن الاردن</a>
                        <a class="dropdown-item" href="procedures_guide.php">دليل الاجرائات</a>
                        <a class="dropdown-item" href="from_al-salt.php">الهيكل التنظيمي</a>
                        <a class="dropdown-item" href="bids.php">العطائات</a>
                        <a class="dropdown-item" href="from_al-salt.php">الانجازات</a>
                        <!-- <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>


                <li class="nav-item dropdown text-right">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        نبذة تاريخية
                     </a>
                    <div class="dropdown-menu text-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="from_al-salt.php">عن السلط</a>
                        <a class="dropdown-item" href="from_al-salt.php">عن بلدية السلط</a>
                        <!-- <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>

                <li class="nav-item dropdown text-right">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        اتصل بنا
                     </a>
                    <div class="dropdown-menu text-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="opinion_us.php">رايك بهمنا</a>
                        <a class="dropdown-item" href="call_us.php">شكاوي واقتراحات</a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="join_us.php">انضم الينا</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end navbar -->


    <!--Start Slider-->
    <div class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" height="500px" src="img/tarek.png" alt="First slide">
            </div>
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

            <!-- listrightslider2 -->
            <div class="text-right" style="height: 90px; margin-top: 360px; float: right;">
                <ul class="list-group" aria-hidden="true">
                    <li class="list-group-item" style="width: 270px;background-color:rgb(241, 151, 30,0.9);">
                        <!-- imgslidestop1 -->
                        <p class="textpagslidesenw my-2 float-left" style="
                        width: 220px; color:white; font-size: 25px;
                    ">عنوان الصفحة</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--End Slider-->

