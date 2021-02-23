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
            font-size: 16px !important;
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
    </style>
</head>

<body>

    <!--STRAT NAVBAR-->
    <nav class="navbar navbar-expand-xl navbar-light fixed-top" style="background-color: rgb(255, 255, 255,0.7);">
        <div>
            <div style="float: right;">
                <a class="navbar-brand kk mr-2" href="#">
                    <img class="imglogo" src="img/HeaderLogo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            </div>
        </div>

        <div class="row upnavbar">
            <img class="ml-3 m-2" src="img/global.png " alt=" ">
            <!-- <img class="ml-3 m-2" src="img/search.png " alt=" "> -->
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="" src="img/search.png " alt=" ">
                     </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- <a class="dropdown-item">خدمات الاكترونية</a> -->
                    </div>
                </li>   
          </ul>
            <a href="question.php"><img class="ml-3 m-2" src="img/about.png " alt=" "></a>
            <a class="ml-2 m-2 login " href="">الدخول</a>
            <a class="ml-2 m-2 signup " href="">التسجيل</a>
        </div>

        <!-- style="float: right;" -->
        <div class="collapse navbar-collapse text-right navstyle"  id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto my-3 " dir="rtl">

                <li class="nav-item active text-right">
                    <a class="nav-link" href="index.php">الرئيسية<span class="sr-only">(current)</span></a>
                </li>


                <li class="nav-item dropdown">
                    <a id="ttt" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        خدماتنا
                     </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="electronic_services.php">خدمات الاكترونية</a>
                        <a class="dropdown-item" href="">خدمة نافذة واحدة</a>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="advertisements.php">اعلانات</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        وسائل الاعلام
                     </a>
                    <div class="dropdown-menu text-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="last_issue.php">العدد الاخير</a>
                        <a class="dropdown-item" href="news.php">الأخبار</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="procedures_guide.php">دليل الاجراءات</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        فعاليات
                     </a>
                    <div class="dropdown-menu text-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="activities_and_events.php">أنشطة وفعاليات</a>
                        <a class="dropdown-item" href="initiatives.php">مبادرات</a>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        السياحة
                     </a>
                    <div class="dropdown-menu text-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">السياحة عن السلط</a>
                        <a class="dropdown-item" href="#">السياحة بالاردن</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
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
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        نبذة تاريخية
                     </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="from_al-salt.php">عن السلط</a>
                        <a class="dropdown-item" href="from_al-salt.php">عن بلدية السلط</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
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
                        <button type="button" id='myvoice'><img class="my-1" src="img/microphone.png" alt=""></button>
                        <img class="my-1" src="img/keyboard.png" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--End Slider-->

    <!--Start ticker-->

    <div class="container-fluid tickernews">
        <div class="row">
            <div class="col-10">
                <div class="tcontainer">
                    <div class="ticker-wrap">
                        <div class="ticker-move body_news_ticker" style="padding: 12px;">
                            <div class="ticker-item">
                            <p>        
                                لوريم_ايبسوم_دولار_سيت_أميت_كونسيكتيتور_أدايبا_يسكينج_أليايت_سيت_دو_أيوسمود_تيمبور_2
                            </p> 
                        </div>

                            <img src="img/ticker.png" width="63" height="49" alt="">
                            <div class="ticker-item">
                            <p>
                                لوريم_ايبسوم_دولار_سيت_أميت_كونسيكتيتور_أدايبا_يسكينج_أليايت_سيت_دو_أيوسمود_تيمبور_2
                            </p>
                            </div>
                            <img src="img/ticker.png" width="63" height="49" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 tickernews d-flex justify-content-end titlenew_header_right">
                <p class="d-flex align-items-center newss my-2">شريط الأخبار</p>
            </div>
        </div>
    </div>
    <!--end ticker-->

    <div class="container-fluid py-5 center_home_design">
        <div class="carddesignNew">
            <div class="row">
                <div class="col-6 col-sm-4 card1">
                    <div class="itemscontent fade">
                        <img class="logoata" src="img/Page-1.png" alt="">
                        <a href="bids.php"><p class="itemstext">العطاءات</p></a>
                    </div>
                </div>
                <div class="col-6 col-sm-2 card2">
                    <div class="itemscontent1 fade">
                        <img src="img/broken-link.png" alt="">
                        <p class="itemstext1">روابط مهمة</p>
                    </div>
                </div>
                <div class="col-6 col-sm-2 card3">
                    <div class="itemscontent1 fade">
                        <img src="img/question (1).png" alt="">
                        <a href="question.php"><p class="itemstext2">أسئلة شائعة</p></a>
                    </div>
                </div>
                <div class="col-6 col-sm-4 card4">
                    <div class="itemscontent2 fade">
                        <img class="logoata1" src="img/file.png" alt="">
                       <a href="dawnload_center.php"> <p class="itemstext3">مركز التحميل</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="notecontainer">
        <div class="d-flex justify-content-center titlecon welcome_bald">بلدية السلط ترحب بكم</div>
        <div class="style_content_plugin">
            <div class="container">
                <p>
                    أكسير سيتاشن يللأمكو لابوريتاشن يللأمكو لابورير سيتاشيوب أ كوممودو كونسيكيوات أكسير سيتاشن يللأمكو لابورير سيتاشيوب أ كوممودو كونسيكيوات أكسير سيتاشن يللأمكو لابورير سيتاشيوب أ كوممودوو لابوريروب أ كوممودو كونودو كونسيكيوات
                </p>

                <p class="py-2">
                    يوات أكسير سيتاشن يللأاشيوب أ أ كوممودو كونسي يوات أكسير سيتاشن يللأاشيوب أ أ كوممودو كونسي
                </p>
                <div class="logo_more">
                    <a href="#">المزيد</a>
                </div>
            </div>
        </div>
    </div> -->

<div class="card notecontainer d-flex justify-content-center" style="background-image: URL('img/Repeat Grid 8.png');">
<div class="card-body text-center">
        <div class="container">
            <h1 style="margin-top:100px;">سشي شسي شسي</h1>
        <p class="card-text">
            سشنتت ينتشس يش سي شستي نشتس يتنشس ينتسش يسشي 
            شسن نيشسنمي نمشس ينمشسي شسي
            شسي شس يشسي شسبة سيلنيسلن نن م نم ن ننم نم نم 
        </p>
        <div class="logo_more">
            <a href="#">المزيد</a>
        </div>
    </div>
  </div>
</div>




    <div class="endslider">
        <div class="container">
            <div class="text-center">
                <p class="title_news_slider_arrow">الأخبار</p>
                <p class="body_news_slider_arrow">سشي نىشىسيتشنتس ينتششس ينت شسينت شسنتي نشستي </p>
            </div>
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <div class="bg-warning p-2 prev_nex">
                            <a class="prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <img src="img/icon (1).png" height="40px" aria-hidden="true" alt="">
                            </a>
                            <a class="nex" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <img src="img/icon (2).png" height="40px" aria-hidden="true" alt="">
                            </a>
                        </div>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/Repeat Grid 5.png" height="400px" class="d-block w-50" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="slider_multi_arrow">لوريم ايبسوم</h5>
                                <p>
                                    شسيتنشستن ينتشسي نتشس ينتسيش نتشس نتي سنتي نتسشينت
                                </p>
                                <button class="btn btnmore text-white">المزيد</button>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Repeat Grid 5.png" height="400px" class="d-block w-50" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="slider_multi_arrow">لوريم ايبسوم</h5>
                                <p>
                                    شسيتنشستن ينتشسي نتشس ينتسيش نتشس نتي سنتي نتسشينت
                                </p>
                                <button class="btn btnmore text-white">المزيد</button>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Repeat Grid 5.png" height="400px" class="d-block w-50" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="slider_multi_arrow">لوريم ايبسوم</h5>
                                <p>
                                    شسيتنشستن ينتشسي نتشس ينتسيش نتشس نتي سنتي نتسشينت شسيتنشستن ينتشسي نتشس ينتسيش نتشس نتي سنتي نتسشينت

                                </p>
                                <button class="btn btnmore text-white">المزيد</button>
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
                        <p class="slider_card_craz" id="testhide">قرار المجلس البلدي</p>
                        <div id="cover" class="covernew p-5 d-flex justify-content-center">
                            <!-- <a href="#"> -->
                            <table class="text-right my-4">
                                <tr>
                                    <th class="font_h hover_up_slider_card"> شنتسي نشسس ينش س</th>
                                </tr>
                                <tr>
                                    <td class="text_up_hover_card">سشويةسشي نت س</td>
                                </tr>
                            </table>
                            <!-- </a> -->
                            <p class="btn btnmore">المزيد</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div id="box" class="box slider_footer_end d-flex justify-content-center" style="background-image:url('img/RepeatGrid28.png'); height: 250px;">
                        <p class="slider_card_craz" id="testhide">قرار المجلس البلدي</p>
                        <div id="cover" class="covernew p-5 d-flex justify-content-center">
                            <!-- <a href="#"> -->
                            <table class="text-right my-4">
                                <tr>
                                    <th class="font_h hover_up_slider_card"> سشنتي تنشسي </th>
                                </tr>
                                <tr>
                                    <td class="text_up_hover_card">سشيى شسي شسنتي</td>
                                </tr>
                            </table>
                            <!-- </a> -->
                            <p class="btn btnmore">المزيد</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div id="box" class="box slider_footer_end d-flex justify-content-center" style="background-image:url('img/RepeatGrid28.png'); height: 250px;">
                        <p class="slider_card_craz" id="testhide">قرار المجلس البلدي</p>
                        <div id="cover" class="covernew p-5 d-flex justify-content-center">
                            <!-- <a href="#"> -->
                            <table class="text-right my-4">
                                <tr>
                                    <th class="font_h hover_up_slider_card"> سشةي نتشس ينت</th>
                                </tr>
                                <tr>
                                    <td class="text_up_hover_card">شسةي شةسي تنسش</td>
                                </tr>
                            </table>
                            <!-- </a> -->
                            <p class="btn btnmore">المزيد</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div id="box" class="box slider_footer_end d-flex justify-content-center" style="background-image:url('img/RepeatGrid28.png'); height: 250px;">
                        <p id="testhide">قرار المجلس البلدي</p>
                        <div id="cover" class="covernew p-5 d-flex justify-content-center">
                            <!-- <a href="#"> -->
                            <table class="text-right my-4">
                                <tr>
                                    <th class="font_h hover_up_slider_card"> شسةي نتشسسيتن</th>
                                </tr>
                                <tr>
                                    <td class="text_up_hover_card">نتب نتشس بنتسي ب</td>
                                </tr>
                            </table>
                            <!-- </a> -->
                            <p class="btn btnmore">المزيد</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div id="box" class="box slider_footer_end d-flex justify-content-center" style="background-image:url('img/RepeatGrid28.png'); height: 250px;">
                        <p id="testhide">قرار المجلس البلدي</p>
                        <div id="cover" class="covernew p-5 d-flex justify-content-center">
                            <!-- <a href="#"> -->
                            <table class="text-right my-4">
                                <tr>
                                    <th class="font_h hover_up_slider_card"> سشىي ىشس ي</th>
                                </tr>
                                <tr>
                                    <td class="text_up_hover_card">ينتتب نتسيبنت</td>
                                </tr>
                            </table>
                            <!-- </a> -->
                            <p class="btn btnmore">المزيد</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="div_upper_foot">
                <div class="row text-right my-4 p-5">
                    <div class="col-12 col-sm-12 p-2 title_box rotate_rate">
                    <p>
                    تصويت
                    </p>    
                </div>
                    <div class="col-12 col-sm-12 p-2">
                        <table class="d-flex justify-content-end table_rates">
                            <tr>
                                <td class="rotate_rate"><label>جيد</label><input type="radio" name="r" id=""></td>
                                <td class="rotate_rate"><label>جيد جدا</label><input type="radio" name="r" id=""></td>
                                <td class="rotate_rate"><label>ممتاز</label><input type="radio" name="r" id=""></td>
                                <td class="rotate_rate">ما رايك بالتصميم ؟</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 col-sm-12 p-2 d-flex justify-content-end">
                        <table class="table_rates2">
                            <tr>
                                <td class="rotate_rate">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> <a class="rotate_rate" href="#">النتائج</a>
                                </td>
                                <td class="rotate_rate">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> <a class="rotate_rate" href="#">الصوت</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="card d-block">
            <div class="card-body">
                <blockquote class="blockquote mb-0 my-5">
                    <div class="editimages_footer w-100 h-100">
                        <img src="img/Repeat Grid 11.png" class="w-100 h-100" alt="">
                    </div>
                    <div class="d-flex" style="position: absolute; margin-top: -150px;">
                        <div class="mr-auto">
                            <div class="p-2">تطبيق بلدية</div>
                            <div class="p-2">السلط الكبرى</div>
                        </div>
                        <div class="text_footer_backgr">
                            <table>
                                <tr>
                                    <th>السلط</th>
                                    <td>كل الطرق تؤدي الى</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </blockquote>
            </div>
        </div> -->
    </div>
    <!-- 
    <div class="card background_end_page" style=" background-image: url('img/Repeat\ Grid\ 11.png');">
        <div class="card-body">
            <blockquote class="blockquote mb-0 my-5">
                <div class="d-flex">
                    <div class="mr-auto">
                        <div class="p-2">تطبيق بلدية</div>
                        <div class="p-2">السلط الكبرى</div>
                    </div>
                    <div class="text_footer_backgr">
                        <table>
                            <tr>
                                <th>السلط</th>
                                <td>كل الطرق تؤدي الى</td>
                            </tr>
                        </table>
                        <hr style="border: 1px solid white;">
                        <table class="text-center">
                            <tr style="background-color: red;">
                                <td colspan="2">حمل التطبيق الان</td>
                            </tr>
                            <tr class="bg-white">
                                <td>sadasdsad</td>
                                <td>sadjk askjd bajksdb</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </blockquote>
        </div>
    </div>
 -->

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
          <h5 class="text-uppercase">عدد الزائرين</h5>

          <ul class="list-unstyled mb-0">
            <li>
                 <img src="img/eye (1).png" style="width:20px" alt="">
                 12
            </li>
          </ul>
        </div>



        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">اتصل بنا</h5>

          <ul class="list-unstyled mb-0 my-1">
            <li>
              <a href="opinion_us.php" class="text-white my-1">رايك بهمنا</a>
            </li>
            <li>
              <a href="call_us.php" class="text-white my-1">شكاوي و اقتراحات</a>
            </li>
            <li>
              <a href="join_us.php" class="text-white my-1">انضم الينا</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <!-- <h5 class="text-uppercase">Links</h5> -->

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">الرئيسية</a>
            </li>
            <li>
              <a href="#!" class="text-white">نبذة عن البلدية</a>
            </li>
            <li>
              <a href="#!" class="text-white">المنتجات والخدمات</a>
            </li>
            <li>
              <a href="#!" class="text-white">الاحبار</a>
            </li>
            <li>
              <a href="#!" class="text-white">المركز الاعلامي</a>
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
     جميع الحقوق محفوظة © 2020 
    <a class="text-white" href="http://www.jordancode.com/Default.aspx?Lng=2&P=h">شركة جوردن كود</a>
  </div>
 
    
             
        
         
  <!-- Copyright -->
</footer>
<!-- Footer -->
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
                <div class="col-6 col-sm-8 text-right">
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
                <div class="col-8 text-right">
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
        // $(window).on("load", function() {
        //     $(window).scroll(function() {
        //         var windowBottom = $(this).scrollTop() + $(this).innerHeight();
        //         $(".fade").each(function() {
        //             /* Check the location of each desired element */
        //             var objectBottom = $(this).offset().top + $(this).outerHeight();

        //             /* If the element is completely within bounds of the window, fade it in */
        //             if (objectBottom < windowBottom) { //object comes into view (scrolling down)
        //                 if ($(this).css("opacity") == 0) {
        //                     $(this).fadeTo(100, 1);
        //                 }
        //             } else { //object goes out of view (scrolling up)
        //                 if ($(this).css("opacity") == 1) {
        //                     $(this).fadeTo(100, 0);
        //                 }
        //             }
        //         });
        //     }).scroll(); //invoke scroll-handler on page-load
        // });

        $(document).ready(function() {
            $('.fade').each(function(i) {
                $(this).animate({
                    'opacity': '1',
                    'padding': '15px'
                }, 1000);
            });
        });

        // //image fade in
        // //set image display none
        // $("img").css("display", "none");
        // //call the image with fadeIn effect
        // $("img").fadeIn(5000, function() {
        //     $(this).css("display", "normal");
        // });


        // $(document).ready(function() {
        //     $('div').fadeOut(1);
        //     $('div').fadeIn(1000);
        // });


        // $(document).ready(function() {
        //     $('div.hidden').fadeIn(1000).removeClass('hidden');
        // });
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