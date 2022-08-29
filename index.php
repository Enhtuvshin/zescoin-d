<!DOCTYPE html>
<html class="no-js" lang="mn">

<?php

$url = 'https://seclab.mn/php/api2.php';
$json = $json = file_get_contents($url) ;

$coins = json_decode($json);




// include('simple_html_dom.php');
// $html= file_get_html('https://cmc.bibi.mn/');
// $html = strval( $html );


// $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

// fwrite($myfile, $html);

// echo "<script src='data.js'> 
//     </script>";

// $url = 'https://seclab.mn/php/api2.php';
// $json = file_get_contents($url);
// Convert to array 
// $array = array($json)
// echo json_decode($array)

// $array = json_decode($json, true);
// echo $array["pair"];
// $trpre=$array["trade"]["ZESCMNT"]["dayUpdate"];
// $trtotal=$array["trade"]["ZESCMNT"]["dayValue"];

// $comprice=$array["complex"]["ZESCMNT"]["price"];
// $comprice = explode("≈", $comprice);
// $compre=$array["complex"]["ZESCMNT"]["dayUpdate"];
// $comtotal=$array["complex"]["ZESCMNT"]["dayValue"];

// echo($array['trade']['ZESCMNT']['price']);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/logo/zesc.png" type="image/png">
    <title>ZESCOIN</title>
    <!-- CSS Files -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <!--Rotating text-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!--hide and show table-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/components.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all">

    <script type="js" src="./WEBMAIN.js"></script>
    <script type="js" src="./Data.js"></script>

</head>

<body data-spy="scroll" data-target=".main-menubar" style="overflow-x:hidden">
    <!--preloader-->
    <div class="preloader-wrapper">
        <div class="preloader">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
    </div>
<div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
<script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "109698924650999");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v11.0'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="page-wrapper bg-primary">
        <div class="header-particle" id="particles-js">
            <div class="full-header-area">
                <div class="top-header-area">
                    <div class="container">
                        <div class="top-header">
                           
                        </div>
                    </div>
                </div>
                <div class="header-area">
                    <div class="container">
                        <header>
                            <div class="main-header-area">
                                <div class="main-menubar d-flex justify-content-between align-items-center">
                                    <div class="logo-area">
                                        <a href=""><img src="assets/img/logo/zes.png" alt="cryptocoin image"></a>
                                    </div>
                                    <div class="main-menu-area d-flex justify-content-between align-items-center">
                                        <ul id="menu" class="menu">
                                            <li><a href="#">Эхлэл</a></li>
                                            <li><a href="#team">Бидний тухай</a></li>
                                            <li><a href="#faq">Тусламж</a></li>
                                            <!-- <li><a href="#">Мэдээлэл</a></li> -->
                                            <li><a href="#contact">Холбоо барих</a></li>
                                            <li><a href="https://zescoin.mn/whitepaper.html">WHITEPAPER</a></li>
                                            <li><a href="#home">Шатаалт</a></li>                                
                                            <!--<li><a onclick="location.href='index1.php'">EN</a></li>-->                                                         
                                        </ul>

                                        <div class="try-app-btn ml-60">
                                        
                                            <a href="#token"
                                                class="btn btn-sm btn-primary rounded-50 hvr-shutter-out-horizontal">ЗэсКойн
                                                авах</a>
                                        </div>
                                        <div>
                                        <click><a onclick="location.href='english.php'" alt='Broken Link'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/img/logo/en.png" height="25" width="20" /></a></click>
                                        </div>
                                        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                        <div class="bar-icon">
                                            <div class="bar-line"></div>
                                            <div class="bar-line"></div>
                                            <div class="bar-line"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>

                        <!--=====   mobile-container  ==========-->
                        <div class="mobile-menu">
                            <div class="container">
                                <div id="mobile-container"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=========================================
                hero-section-area start form here
        ===========================================-->
            <section class="hero-section-area pt-md-150 pb-md-70 py-60">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="hero-section-details mb-30" data-aos="fade" data-aos-delay="500">
                                <div class="typewritter typing-text">
                                    <h1>Онлайн сурталчилгааны <span class="typer" id="main"
                                            data-words="дэвшилт,шинэ үе,хувьсал,шинэ соёл" data-colors="#1c8dff"
                                            data-delay="100" data-deleteDelay="3000"></span><span class="cursor"
                                            data-cursorDisplay="|" data-colors="#1c8dff" data-owner="main"></span>
                                    </h1>
                                </div>




                                <p>Зэскойн нь онлайн сурталчилгааны орлогоос хэрэглэгчдэд хуваарилах, сурталчилгааны
                                    төлбөр тооцоог түргэн, хялбар болгох крипто токен юм. </p>
                                <div class="hero-btn d-flex flex-wrap mt-40" data-aos="fade-up" data-aos-delay="600">
                                    <a href="/cooperation.pdf"
                                        class="btn btn-lg gradient-btn rounded-50 mr-20 mb-10 hvr-shutter-out-horizkenontal">Зар
                                        сурталчилгаа</a>
                                    <a href="#try_app"
                                        class="btn btn-lg btn-primary rounded-50 mb-10 hvr-shutter-out-horizontal">Апп
                                        татах</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-section-banner" data-aos="fade-left">
                                <img class="img-fluid" src="assets/img//banner/hero-banner.png" alt="Banner image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-title maxw-550 mx-auto  mb-50" data-aos="fade-up">
                    <!-- <div class="about-header text-center">
                        <h2>Гарчиг</h2>
                        <div class="countdown-timer">
                            <div class="clock pb-30"></div>
                        </div>

                    </div> -->

                </div>
                <!--=========================================================
    PRICING-TABLE-AREA
   =========================================================== -->

                <div class="container" id="token">
                    <div class="pricing-table-head d-flex justify-content-between flex-wrap">
                        <p>Анхдагч зах зээлийн захиалга (IEO)
                            <br> <span>2021.09.07 (12:00)</span></p>
                        <p><b>Хоердогч зах зээлийн арилжаа</b>
                            <br> <span>2021.09.28 (12:00)</span></p>
                        <p>Арилжаалагдаж буй биржүүд
                            <br> <span>Trade.mn, Complex.mn, Capex.mn</span></p>
                        <p>Зах зээлд нийлүүлэгдсэн
                            <br> <span>1,000,000,000 (20%)</span></p>
                        
                    </div>
                    <div class="pricing-table mt-40">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="single-price-details mb-md-20 mb-lg-0" data-aos="fade-up"
                                    data-aos-duration="1000">
                                    <div class="single-Price text-center">
                                        <div class="coin-type">

                                            <a>
                                                <img style="height: 57px; width: 57px;" src="assets/img/logo/zesc.png" alt="cryptocoin image"  >
                                            </a>
                                            <div class="coin-name my-20">
                                                    <h3>ZesCoin</h3>
                                                </a>
                                                <span></span>
                                            </div>
                                            <div class="coin-price-rate d-flex justify-content-between flex-wrap">
                                                <div class="rate">
                                                    <h6>Ханш</h6>
                                                    <span > <?php echo  $coins[0]->price; ?> ₮</span>
                                                </div>
                                                <div class="rate">
                                                    <h6>Өөрчлөлт </h6>
                                                    <span>(<?php echo $coins[0]->percent; ?>%)</span> 
                                                </div>
                                                <!-- <div class="rate">
                                                    <h6>Доод</h6>
                                                    <span>5.84 ₮</span>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="rate-fluctuation text-left">
                                            <p>ZESC - MNT </p>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-price-details mb-md-20 mb-lg-0" data-aos="fade-up"
                                    data-aos-duration="1200">
                                    <div class="single-Price text-center">
                                        <div class="coin-type">
                                            <a>
                                                <img style="height: 57px; width: 57px;"
                                                    src="assets/img/logo/btc.png" alt="cryptocoin image">
                                            </a>

                                            <div class="coin-name my-20">
                                            
                                                    <h3>Bitcoin</h3>
                                                </a>

                                                <span></span>
                                            </div>
                                            <div class="coin-price-rate d-flex justify-content-between flex-wrap">
                                                <div class="rate">
                                                    <h6>Ханш</h6>
                                                    <span > <?php echo  $coins[1]->price; ?> ₮</span>
                                                </div>
                                                <div class="rate">
                                                    <h6>Өөрчлөлт </h6>
                                                    <span>(<?php echo $coins[1]->percent; ?>%)</span> 
                                                </div>
                                                <!-- <div class="rate">
                                                    <h6>Доод</h6>
                                                    <span>5.84 ₮</span>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="rate-fluctuation text-left">
                                            <p>BTC - MNT </p>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-price-details mb-md-20 mb-lg-0" data-aos="fade-up"
                                    data-aos-duration="1500">
                                    <div class="single-Price text-center">
                                        <div class="coin-type">
                                            <a >
                                                <img style="height: 57px; width: 57px;" src="assets/img/logo/eth.png"
                                                    alt="cryptocoin image">
                                            </a>
                                            <div class="coin-name my-20">
                                                
                                            <a>
                                                    <h3>Ethereum</h3>
                                                </a>

                                            </div>
                                            <div class="coin-price-rate d-flex justify-content-between flex-wrap">
                                                <div class="rate">
                                                    <h6>Ханш</h6>
                                                    <span > <?php echo  $coins[2]->price; ?> ₮</span>
                                                </div>
                                                <div class="rate">
                                                    <h6>Өөрчлөлт </h6>
                                                    <span>(<?php echo $coins[2]->percent; ?>%)</span> 
                                                </div>
                                                <!-- <div class="rate">
                                                    <h6>Доод</h6>
                                                    <span>5.84 ₮</span>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="rate-fluctuation text-left">
                                            <p>ETH - MNT </p>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-price-details mb-md-20 mb-lg-0" data-aos="fade-up"
                                    data-aos-duration="1800">
                                    <div class="single-Price text-center">
                                        <div class="coin-type">
                                            <a >
                                                <img style="width: 57px;" src="assets/img/logo/bnb.png"
                                                    alt="cryptocoin image">
                                            </a>
                                            <div class="coin-name my-20">
                                                <h3>BNB</h3>

                                            </div>
                                            <div class="coin-price-rate d-flex justify-content-between flex-wrap">
                                                <div class="rate">
                                                    <h6>Ханш</h6>
                                                    <span > <?php echo  $coins[3]->price; ?> ₮</span>
                                                </div>
                                                <div class="rate">
                                                    <h6>Өөрчлөлт </h6>
                                                    <span>(<?php echo $coins[3]->percent; ?>%)</span> 
                                                </div>
                                                <!-- <div class="rate">
                                                    <h6>Доод</h6>
                                                    <span>5.84 ₮</span>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="rate-fluctuation text-left">
                                            <p>BNB - MNT </p>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
        <!--=========================================================
                MANAGEMENT-SYSTEMS-AREA SECTION AREA
   =========================================================== -->
        <section class="management-systems-area section-padding">
            <div class="container">
                <div class="row systems-row ">

                    <div class="col-md-6">
                        <div class="single-systems" data-aos="fade-up">
                            <h3>Зэс Сурталчилгааны Сүлжээ <br>(Zes Ad Network)</h3>
                            <p>Зэс Сурталчилгааны Сүлжээ нь байршуулсан сурталчилгааг веб хэрэглэгч болон гар утасны апп
                                хэрэглэгчтэй холбодог. Зэскойн нь Секлаб багийн мэргэжилтнүүд болон зөвлөхүүдийн хамт
                                бүтээсэн Blockchain дээр суурилсан крипто токен
                                юм.
                            </p>
                            <p>Хэрэглэгчид сурталчилгаа үзэж койн цуглуулах болон хамтарч ажиллах байгууллагууд
                                сурталчилгаагаа түгээн, бизнесээ өргөжүүлэх боломжтой.
                            </p>
                            <a href="https://zescoin.mn/whitepaper.html"
                                class="btn btn-lg rounded-50 gradient-btn hvr-shutter-out-horizontal">WHITEPAPER</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-systems d-flex system-img" data-aos="fade-up">
                            <img src="assets/img/banner/system-banner-2.png" alt="cryptocoin image">
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!--=========================================================
                    STEP-SECTION AREA
   =========================================================== -->
        <section class="step-area section-padding" id="road-map">
            <div class="container">
                <div class="section-title maxw-700 mx-auto text-center mb-50" data-aos="fade-up">
                    <h2>Төлөвлөгөө</h2>
                    <p>Дотоодын сурталчилгааны зах зээлд ажиллах болон олон улсын зах зээлд үйлчилгээ үзүүлэх "ЗэсКойн"
                        төслийн үйл ажиллагааны төлөвлөгөөг танилцуулж байна.
                    </p>
                </div>
                <div class="custom-scrollbar">
                    <div class="full-step" data-aos="fade-up">
                        <div class="single-step active">
                            <div class="step-text">
                                <h6>Ethereum blockchain дээр гарсан</h6>
                            </div>
                            <div class="step-date">
                                <p>2021.05.21</p>
                            </div>
                        </div>
                        <div class="single-step active">
                            <div class="step-text">
                                <h6>Whitepaper нийтлэгдсэн</h6>
                            </div>
                            <div class="step-date">
                                <p>2021.05.29</p>
                            </div>
                        </div>

                        <div class="single-step active">
                            <div class="step-text">
                                <h6>Zescoin.mn вебсайтын нээлт
                                </h6>
                            </div>


                            <div class="step-date">
                                <p>2021.06.15</p>
                            </div>
                        </div>
                        <div class="single-step active">
                            <div class="step-text">
                                <h6>Zescoin Wallet апп нээлт</h6>
                            </div>


                            <div class="step-date">
                                <p>2021.08.30</p>
                            </div>
                        </div>
                        <div class="single-step active">
                            <div class="step-text">
                                <h6> Анхдагч зах зээлийн захиалга (IEO) </h6>
                            </div>
                            <div class="step-date">
                                <p>2021.09.07</p>
                            </div>
                        </div>
                        <div class="single-step active">
                            <div class="step-text">
                                <h6>Хоёрдогч зах зээлийн арилжаа (Complex.mn)</h6>
                            </div>
                            <div class="step-date">
                                <p>2021.09.28</p>
                            </div>
                        </div>
                        <div class="single-step active">
                            <div class="step-text">
                                <h6>Trade.mn бирж дээр гарсан</h6>
                            </div>
                            <div class="step-date">
                                <p>2021.10.21</p>
                            </div>
                        </div>
                        <div class="single-step ">
                            <div class="step-text">
                                <h6>Нэмж 2 бирж дээр арилжаа эхлүүлэх</h6>
                            </div>
                            <div class="step-date">
                                <p>2021.IV </p>
                            </div>
                        </div>
                        <div class="single-step ">
                            <div class="step-text">
                                <h6> MELON сошиал энтертайнмент апп нээлт</h6>
                            </div>
                            <div class="step-date">
                                <p>2022 I</p>
                            </div>
                        </div>
                        <div class="single-step ">
                            <div class="step-text">
                                <h6> Харилцагч байгууллагын тоог 100 болгох</h6>
                            </div>
                            <div class="step-date">
                                <p>2022 II</p>
                            </div>
                        </div>
                        <div class="single-step ">
                            <div class="step-text">
                                <h6 style="font-size: 12px;"> Глобал үйлчилгээг +10 сая хэрэглэгчтэй платформ дээр
                                    үзүүлнэ</h6>
                            </div>
                            <div class="step-date">
                                <p>2022 III</p>
                            </div>
                        </div>
                        <div class="single-step ">
                            <div class="step-text">
                                <h6>Олон улсын бирж дээр арилжаа эхлэнэ</h6>
                            </div>
                            <div class="step-date">
                                <p>2022 IV</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=========================================================
                    BOARD-MEMBER-AREA
   =========================================================== -->
   <div class="board-member-area section-padding">
            <div class="container">
            <div class="section-title maxw-700 mx-auto text-center mb-50" data-aos="fade-up">
                    <h2>Хамт олон</h2>
                    <p>Мэдээллийн технологийн салбарт 10-аас дээш жилийн туршлагатай, цахим худалдаа, мэдээллийн аюулгүй
                        байдлын чиглэлээр гарааны компани үүсгэж, амжилттай ажиллуулсан бизнесийн туршлагатай. </p>
                </div>
                <div class="board-slider owl-carousel owl-theme slider-nav slider-dots">
                    <!--single slider-->
                    <div class="single-board-slider">
                        <div class="single-board-member d-flex flex-column justify-content-center align-items-center">
                            <div class="board-avater mb-40">
                                <img src="assets/img/board/board-1.png" alt="cryptocoin image">
                            </div>
                            <div class="board-title board-title-2 text-center">
                                <h5 class="lh-1 mb-10"><a href="">Д. Заяабаатар</a></h5>
                                <p>Гүйцэтгэх захирал</p>
                                <span>"СекЛаб" ХХК</span>
                            </div>
                        </div>
                    </div>
                    <!--single slider-->
                    <div class="single-board-slider">
                        <div class="single-board-member d-flex flex-column justify-content-center align-items-center">
                            <div class="board-avater mb-40">
                                <img src="assets/img/board/board-2.png" alt="cryptocoin image">
                            </div>
                            <div class="board-title board-title-2 text-center">
                                <h5 class="lh-1 mb-10"><a href="">Г. Батхуяг</a></h5>
                                <p>Санхүү хариуцсан захирал</p>
                                <span>"СекЛаб" ХХК</span>
                            </div>
                        </div>
                    </div>
                    <!--single slider-->
                    <div class="single-board-slider">
                        <div class="single-board-member d-flex flex-column justify-content-center align-items-center">
                            <div class="board-avater mb-40">
                                <img src="assets/img/board/board-3.png" alt="cryptocoin image">
                            </div>
                            <div class="board-title board-title-2 text-center">
                                <h5 class="lh-1 mb-10"><a href="">У. Баттулга</a></h5>
                                <p>Ахлах хөгжүүлэгч</p>
                                <span>"СекЛаб" ХХК</span>
                            </div>
                        </div>
                    </div>
                    <!--single slider-->
                    <div class="single-board-slider">
                        <div class="single-board-member d-flex flex-column justify-content-center align-items-center">
                            <div class="board-avater mb-40">
                                <img src="assets/img/board/board-4.png" alt="cryptocoin image">
                            </div>
                            <div class="board-title board-title-2 text-center">
                                <h5 class="lh-1 mb-10"><a href="">А. Түвшинжаргал</a></h5>
                                <p>Ахлах хөгжүүлэгч</p>
                                <span>"СекЛаб" ХХК</span>
                            </div>
                        </div>
                    </div>
                    <!--single slider-->
                    <div class="single-board-slider">
                        <div class="single-board-member d-flex flex-column justify-content-center align-items-center">
                            <div class="board-avater mb-40">
                                <img src="assets/img/board/board-5.png" alt="cryptocoin image">
                            </div>
                            <div class="board-title board-title-2 text-center">
                                <h5 class="lh-1 mb-10"><a href="">Н. Батсүх</a></h5>
                                <p>Ахлах Дизайнер</p>
                                <span>"СекЛаб" ХХК</span>
                            </div>
                        </div>
                    </div>
                    <!--single slider-->
                    <div class="single-board-slider">
                        <div class="single-board-member d-flex flex-column justify-content-center align-items-center">
                            <div class="board-avater mb-40">
                                <img src="assets/img/board/board-6.png" alt="cryptocoin image">
                            </div>
                            <div class="board-title board-title-2 text-center">
                                <h5 class="lh-1 mb-10"><a href="">Б. Солонго</a></h5>
                                <p>Менежер</p>
                                <span>"СекЛаб" ХХК</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=========================================================
                    MAP-AREA
   =========================================================== -->
        <section class="map-area section-padding">
            <div class="container">

                <div class="regional-map" data-aos="fade-up">
                    <div id="world_map" style="width: 100%; height: 400px"></div>
                </div>
            </div>
        </section>

        <!--=========================================================
                 APP-SECTION-AREA
   =========================================================== -->
        <section class="app-section-area section-padding" id="try_app">
            <div class="container">
                <div class="section-title maxw-700 mx-auto text-center mb-50" data-aos="fade-up">
                    <h2>Зэскойн хэтэвч (Zesc Wallet App)</h2>

                </div>
                <div class="row align-items-center">

                    <div class="col-md-8">
                        <div class="app-details mb-sm-30 mb-md-0" data-aos="fade-up">

                            <p>Бид ЗэсКойны хэрэглээг олонд түгээх ZesCoin Wallet апп-ийг нэвтрүүлэн ажиллаж байна.
                                Энэхүү аппликейшн нь сурталчилгаа үзээд олсон ЗэсКойноо нэг дор хадгалах, хэрэглэгч
                                хоорондоо шилжүүлэх боломжтой.</p>
                            <div class="app-feature mt-3">

                                <p><span class="icon_check"></span> ЗэсКойн хадгалах</p>
                                <p><span class="icon_check"></span> HODL хийх</p>
                                <p><span class="icon_check"></span> ЗэсКойн шилжүүлэх</p>
                                <p><span class="icon_check"></span> Сурталчилгаа үзэж ЗэсКойн цуглуулах</p>
                                <p><span class="icon_check"></span> Сурталчилгаа дээрх ZesQR код уншуулан ЗэсКойн авах
                                </p>
                                <p><span class="icon_check"></span> Крипто ханшийн мэдээлэл харах</p>

                            </div>
                            <div class="app-btn mt-45">
                                <a href="https://play.google.com/store/apps/details?id=com.seclab.melon"
                                    class="btn btn-lg rounded-50 gradient-btn mr-20 hvr-shutter-out-horizontal">PLAYSTORE<img
                                        class="ml-10" src="assets/img/icons/playstore-white.svg"
                                        alt="cryptocoin image"></a>
                                <a href="https://apps.apple.com/mn/app/zescoin-wallet/id1582435424"
                                    class="btn btn-lg rounded-50 btn-primary hvr-shutter-out-horizontal">APPLE STORE <i
                                        class="fa fa-apple ml-10 text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <img src="assets/img/banner/walletapp.png" alt="cryptocoin image">

                    </div>
                </div>
            </div>
        </section>


        <!--========================================================= 
                    HOME-SECTION-AREA
        ==========================================================-->
        <section class="home-section-area section-padding" id="home">
        <div class="container">
                <div class="section-title maxw-750 mx-auto text-center mb-5" data-aos="fade-up">
                    <h2>Шатаалт</h2></div>
        <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
.counter-up{
  background: url("images/bg-2.jpeg") no-repeat;
  min-height: 50vh;
  background-size: cover;
  background-attachment: fixed;
  padding: 0 50px;
  position: relative;
  display: flex;
  align-items: center;
}
.counter-up::before{
  position: absolute;
  content: "";
  top: 0;
  border-radius: 10px;
  left: 0;
  height: 100%;
  width: 100%;
  background: 
}
.counter-up .content{
  z-index: 1;
  position: relative;
  display: flex;
  width: 100%;
  height: 100%;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}
.counter-up .content .box{
  
  width: calc(30% - 35px);
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  flex-direction: column;
  padding: 20px;
  border: 1px dashed rgba(255,255,255,0.6);
}
.content .box .icon{
  font-size: 48px;
  color: #e6e6e6;
}
.content .box .counter-value{
  font-size: 40px;
  font-weight: 500;
  color: #f2f2f2;
  font-family: sans-serif;
}
.counter-value{
  font-size: 40px;
  font-weight: 500;
  color: #f2f2f2;
  font-family: sans-serif;
}
.content .box .text{
  font-weight: 400;
  color: #ccc;
}
@media screen and (max-width: 1036px) {
  .counter-up{
    padding: 50px 50px 0 50px;
  }
  .counter-up .content .box{
    width: calc(50% - 30px);
    margin-bottom: 50px;
  }
}
@media screen and (max-width: 580px) {
  .counter-up .content .box{
    width: 100%;
  }
}
@media screen and (max-width: 500px) {
  .wrapper{
    padding: 20px;
  }
  .counter-up{
    padding: 30px 20px 0 20px;
  }
  .counter-value{
    font-size:40px;
  }
}
         </style>
<?php
        require 'dbconnect.php';?>
        <?php 
              $query = "SELECT * FROM students";
              $query_run = mysqli_query($con, $query);

              if(mysqli_num_rows($query_run) > 0)
              {
              foreach($query_run as $student)
                   {
                    ?>
                    
<div>
  <div class="counter-up">
    <div class="content">
      <div class="box">
        <div class="icon"><i class="fas fa-history"></i></div>
        <div class="counter-value"><?= $student['numbers1']; ?></div>
        <div class="text">Анх гарсан тоо хэмжээ</div>
      </div>
      <div class="box">
        <div class="icon"><i class="fas fa-fire"></i></div>
        <div class="counter-value"><?= $student['numbers2']; ?></div>
        <div class="text">Нийт шатаалт</div>
      </div>
      <div class="box">
        <div class="icon"><i class="fas fa-users"></i></div>
        <div class="counter-value"><?= $student['numbers3']; ?></div>
        <div class="text">Одоогийн тоо хэмжээ</div>
      </div>
    </div>
  </div>
</div>
<?php
                          }
                   }
                          else
                     {
                          echo "<h5> No Record Found </h5>";
                  }
              ?> 

                <?php
        require 'dbcon.php';?>
  <style> 
#panel, #flip {
  
    text-transform: uppercase;
  border-radius: 10px;
  padding: 5px;
  text-align: center;
  background-color: #0c1248;
  border: solid 1px;
  font-size: 20px;
  color: #f2f2f2;
  font-family: sans-serif;
  
  border-color: transparent;
  
}

#panel {
  padding: 50px;
  display: none;
  background: url(https://codemyui.com/wp-content/uploads/2019/06/Shooting-Star-Background-in-Pure-CSS-1.gif) center;
}
</style>
<div id="flip"><i class="fa fa-angle-down">&nbsp;&nbsp;<i class="fa fa-angle-down">&nbsp;&nbsp;&nbsp;</i>Шатаалтын дэлгэрэнгүй Мэдээлэл &nbsp;&nbsp;&nbsp;<i class="fa fa-angle-down">&nbsp;&nbsp;</i><i class="fa fa-angle-down"></i></div>
<div id="panel">
  <style>
        table{
  width:100%;
  table-layout: fixed;
  background-repeat: no-repeat;
  background-size: 100%;
  background-image: center;
  border-color: transparent;
}
.tbl-header{
  background-color: rgba(0,0,0,0.3);
  border-color: transparent;
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(0,0,0,0.3);
  border-color: transparent;
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
  border-color: transparent;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(0,0,0,0.3);
}



@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #0c1248, #0c1248);
  background: linear-gradient(to right, #0c1248, #0c1248);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #fff;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px #0c1248; 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px #0c1248;

}
td,th {
  text-align: center;
}
    </style>

<div class="tbl-header">
    <table cellpadding="0" cellspacing="0">
      <thead>
                                <tr style="width:100%">
                                    
                                    <th>Анх гарсан койны хэмжээ</th>
                                    <th>Шатаагдсан койн</th>
                                    <th>Одоо байгаа  хэмжээ</th>
                                    <th>Он сар өдөр</th>
                                    
                                </tr>
                            </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php 
              $query = "SELECT * FROM students";
              $query_run = mysqli_query($con, $query);

              if(mysqli_num_rows($query_run) > 0)
              {
              foreach($query_run as $student)
                   {
                    ?>
               <tr>
                  
                  <td><?= $student['name']; ?></td>
                  <td><?= $student['phone']; ?></td>
                  <td><?= $student['course']; ?></td>
                  <td><?= $student['date'];?></td>
               </tr>
                     <?php
                          }
                   }
                          else
                     {
                          echo "<h5> No Record Found </h5>";
                  }
              ?> 
      </tbody>
    </table>
    
    <script src="hide.js"></script>
  </div>
                </section>

<!-- follow me template -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="scrr.js"></script>
        </section>
        <!--=========================================================
                    FAQ-SECTION-AREA
      =========================================================== -->
        <section class="faq-section-area section-padding" id="faq">
            <div class="container">
                <div class="section-title maxw-700 mx-auto text-center mb-50" data-aos="fade-up">
                    <h2>Түгээмэл асуулт</h2>
                    <!-- <p>Хэрэглэгчид сурталчилгаа үзэж койн цуглуулах болон хамтарч ажиллах байгууллагууд сурталчилгаагаа хийлгэн бизнесээ өргөжүүлэх боломжтой. </p> -->
                </div>
                <div class="row">
                    <!-- SINGLE TAB STYLE -->
                    <div class="col-md-12">
                        <div class="tab-section">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#vision">ЗэсКойн</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#goal">ЗэсКойн хэтэвч апп</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#mission"> Крипто</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#general">Анхааруулга</a>
                                </li>

                                <!-- 
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#goal">CLIENT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#legal">LEGAL</a>
                                </li> -->
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade " id="general">
                                    <div class="faq-body-content">
                                        <ul class="list-group">
                                            <li class="list-group-item" data-aos="fade-up">
                                                <div class="faq-qus-title">
                                                    <h6>Та өөрийн хөрөнгө оруулах гэж байгаа төслийн талаар сайтар
                                                        судлана уу. Үүнд: </h6>
                                                </div>
                                                <div class="faq-qus-ans">
                                                    <p><span class="icon_check"></span> Тухайн төслийн Whitepaper-ийг
                                                        сайтар уншиж танилцах</p>
                                                    <p><span class="icon_check"></span> Хувийн сэтгэл хөдлөлөөр
                                                        хандахгүй байх</p>
                                                    <p><span class="icon_check"></span> Бусдын үгэнд хэт автаж шийдвэр
                                                        гаргахгүй байх</p>
                                                    <p><span class="icon_check"></span> Pump ( хэт үнийн хөөрөгдөл),
                                                        Dump ( хэт үнийн бууралт)-д өртөхөөс болгоомжил</p>
                                                    <p><span class="icon_check"></span> Мэдээ мэдээллийг албан ёсны
                                                        сувгуудаас авна уу</p>
                                                </div>
                                            </li>
                                            <li class="list-group-item" data-aos="fade-up">
                                                <div class="faq-qus-title">
                                                    <h6> Та шилжүүлэг хийхдээ анхаарах зүйлс: </h6>
                                                </div>
                                                <div class="faq-qus-ans">
                                                    <p><span class="icon_check"></span> Шилжүүлэг хийхээс өмнө бага
                                                        дүнгээр шилжүүлэг хийж үзэх</p>
                                                    <p><span class="icon_check"></span> Шилжүүлэг хийх хаяг болон бусад
                                                        мэдээллүүдээ шалгах</p>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="mission">
                                    <ul class="list-group">
                                        <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6>Криптовалют гэж юу вэ?</h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>Криптовалют гэдэг нь Блокчейн технологи дээр тулгуурлан бүтээгдсэн
                                                    цахим орчинд тоон хэлбэрээр байрших, ямар нэгэн дундын зохицуулагч
                                                    институт, байгууллагагүй оршин байдаг цахим валют юм. Криптовалютыг
                                                    хуурамчаар хийх боломжгүй ба энэ нь тоо үсгийн нууцлалтай мэдээлэл
                                                    буюу криптографаар бүтээгддэг.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6>Крипто валют ямар эрсдэлтэй вэ?
                                                </h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>Криптовалют сонирхож байгаа хэрэглэгч маш сайн судалгаа хийж үзэх
                                                    хэрэгтэй. Крипто нь үнийн тогтворгүй, биет бус , 24 цагийн
                                                    зохицуулалтгүй хөрөнгийн зах зээл дээр байдаг бөгөөд ямар ч эрх
                                                    бүхий байгууллагад даатгалгүй байдаг. Гэнэтийн өөрчлөлт буюу үнийн
                                                    уналт болон өсөлт байхыг анхаарна уу.
                                                </p>
                                            </div>
                                        </li>
                                        <!-- <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6>Крипто валютын арилжаанд хэрхэн оролцох вэ?</h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>Та Монголын Complex.mn, Trade.mn, Coinhub.mn, Dax.mn гэх мэт
                                                    биржүүдэд бүртгүүлэн арилжаанд оролцох боломжтой.

                                                </p>
                                            </div>
                                        </li> -->
                                        <!-- <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6>HODL гэж юу вэ?</h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>Hold гэдэг үгийг алдаж бичсэнээс үүссэн энэ үг нь крипто ертөнцөд
                                                    худалдан авсан койноо хадгалах гэсэн утгатай. Энэ нь урт хугацаанд
                                                    койноо заралгүй хадгалах, хадгаламжийн хүү хэлбэрээр койны тоог
                                                    нэмэх
                                                    боломжийг хэлнэ.
                                                </p>
                                            </div>
                                        </li> -->

                                    </ul>
                                </div>
                                <div class="tab-pane fade show active" id="vision">
                                    <ul class="list-group">
                                        <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6> Зэскойн гэж юу вэ?</h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>Онлайн сурталчилгааны орлогоос хэрэглэгчдэд хуваарилах,
                                                    сурталчилгааны
                                                    төлбөр тооцоог түргэн, хялбар болгох зорилгоор “Секлаб” ХХК-аас
                                                    гаргаж
                                                    буй крипто токен юм.
                                                    Арилжаа явагдаж буй биржүүд: Trade.mn, Complex.mn.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6>Худалдан авалт</h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>“ZesCoin”-ий WhitePaper буюу цаашид үйл ажиллагаандаа барьж явах
                                                    дүрэм
                                                    болон ирээдүйд хийгдэх ажлуудад тусгаснаар Сурталчилгааны орлогын
                                                    70%
                                                    хувийг ZesCoin-ийг худалдан авалтад зориулна. </p>
                                            </div>
                                        </li>
                                        <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6>Хамтарч ажиллах </h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>ZesCoin аппликейшинд сурталчилгаа байршуулснаар онлайн хэлбэрээр
                                                    сурталчилгаа
                                                    түгээх, байгууллагынхаа хэрэглэгчдийн тоо, хандалтыг ахиулах
                                                    боломжийг бий болгоно. </p>
                                                <p> BoosterZ үйлчилгээ : </p>
                                                <p><span class="icon_check"></span>Premium багц- 500’000 төг, 50’000 хэрэглэгч </p>
                                                <p><span class="icon_check"></span>Standart багц- 300’000 төг, 30’000 хэрэглэгч </p>
                                                <p><span class="icon_check"></span>Basic багц- 100’000 төг, 10’000+1’000 хэрэглэгч. </p>
                                                </p>
                                            </div>
                                        </li>

                                        <!-- <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6>Хаанаас худалдаж авах вэ?</h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>Та манай койныг Complex.mn болон Trade.mn-ээс худалдаж авах
                                                    боломжтой. Удахгүй бусад биржүүд дээр гарах болно.</p>
                                            </div>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="goal">
                                    <ul class="list-group">
                                        <!-- <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6>Аппликейшн ашиглах видео заавар </h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <div class="section-title  maxw-550 mx-auto  mb-50" data-aos="fade-up">

                                                    <div class=" video-button" style="left: 40%;">
                                                        <div class="circle"></div>
                                                        <div class="circle-btn">
                                                            <a class="video-play-btn " href=""><i class="fa fa-play circle-ripple"></i>
                                                        </a>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </li> -->
                                        <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6>ZesCoinWallet аппликейшн ямар зориулалттай вэ?</h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>Zescoin Wallet аппликейшн бол ЗэсКойныг хадгалах хэтэвч юм.
                                                    Аппликейшн дээр бичлэг үзэж койноо цуглуулах, мэдээлэл авах,
                                                    цуглуулсан койноо бирж рүү оруулах зориулалтай. Дотоодын болон
                                                    олон улсын бирж рүү Ethereum блокчэйн дээр гүйлгээ хийх функцийг
                                                    нэмж хөгжүүлэх боломжтой аппликейшн юм.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6>Зэскойн хэрхэн цуглуулах вэ?</h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p><span class="icon_check"></span>Сурталчилгаа үзэх: ZesCoin wallet app
                                                    дээр
                                                    байгууллагуудын байршуулсан сурталчилгааг үзэж койн цуглуулах
                                                    боломжтой.
                                                </p>
                                                <p><span class="icon_check"></span>Найзаа урих: Та профайл хэсэгт байгаа
                                                    найзаа
                                                    урих сонголтоос линк авж урих найз руугаа илгээнэ. Таны урьсан найз
                                                    аппаа суулгаад,
                                                    бүртгүүлэх дарахаасаа өмнө найзын урилга явуулсан линк дээр дарж
                                                    койн цуглуулах боломжтой.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6>Аппликейшнд бүртгүүлэх заавар</h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>ZesCoin Wallet апп-ыг Play Store/App Store дээрээс татаж аваад
                                                    “Фэйсбүүкээр үргэлжлүүлэх” товчийг дарж бүртгүүлэх боломжтой.
                                                    IOS үйлдлийн системтэй бол “AppleID-аар үргэлжлүүэх” товчийг
                                                    дарж бүртгүүлж болно.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6> Баталгаажуулалт</h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>Иргэний үнэмлэх, гадаад паспорт, иргэний үнэмлэхийн
                                                    лавлагаагаар баталгаажуулалт хийж болно. Зааврын дагуу илгээх
                                                    ёстойг анхаарна уу.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6> HODL функц </h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>HODL гэдэг нь: Урт хугацаанд койноо заралгүй хадгалах, хадгаламжийн
                                                    хүү хэлбэрээр койны тоог нэмэх боломжийг хэлнэ. Та ‘’ZesCoinWallet’’
                                                    аппликейшн дотор өөрийн цуглуулсан болон биржээс татсан койноо 1 жил
                                                    болон 3 сар, 6 сарын хугацаатай HODL хийх боломжтой.

                                                </p>
                                            </div>
                                        </li>
                                        <!-- <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6> Иргэний үнэмлэх баталгаажуулах
                                                </h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>Та ZesCoin wallet app дээрх баталгаажуулах хэсгээс иргэний үнэмлэх
                                                    баталгаажуулалтыг зааврын дагуу хийнэ үү. Иргэний үнэмлэх, гадаад
                                                    паспорт-р баталгаажуулж болно. Мөн иргэний үнэмлэх байхгүй бол
                                                    лавлагаагаар
                                                    болно. Бүртгүүлэхэд Facebook-тэй бүх хүн бүртгүүлэх боломжтой. Харин
                                                    койн гаргах, шилжүүлэхэд иргэний үнэмлэх болон гадаад паспортаар
                                                    баталгаажуулна.
                                                </p>
                                            </div>
                                        </li> -->

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /SINGLE TAB STYLE -->
                </div>
            </div>
        </section>



        
        <!--=========================================================
                  CONTRACT-SECTION-AREA
   =========================================================== -->
   <section class="contract-section-area section-padding" id="contact">
            <div class="container">
                <div class="section-title maxw-700 mx-auto text-center mb-50">
                    <h2>Холбоо барих</h2>
                    <p>Манай компани болон ЗэсКойн төсөлтэй хамтарч ажиллах, сурталчилгаа түгээх болон бусад асуудлаар
                        бидэнтэй доорх хаягаар холбоо барина уу.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!--CONTACT FORM AREA -->
                        <div class="form-wrapper" data-aos="fade-up">
                            <div class="form-title">
                                <h3>Зурвас илгээх</h3>
                            </div>
                            <form class="form" id="sheetdb-form" action="https://sheetdb.io/api/v1/oc338u0vmw0kt">

                                <div class="form-group">
                                    <label class="form-label" for="last">Имэйл хаяг <sup>*</sup></label>
                                    <input id="last" name="data[email]" class="form-input" type="text" />
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="sms">Зурвас<sup>*</sup></label>
                                    <textarea class="form-input" name="data[text]" id="sms" placeholder="" rows="2"
                                        cols="3" name="message"></textarea>
                                </div>

                                <div class="form-group" id="alertbutton" style="left: 80%;">
                                    <input id="last"
                                        class=" btn btn-lg gradient-btn rounded-100 mr-20 mb-10 hvr-shutter-out-horizontal"
                                        type="submit" value="Илгээх" />

                                </div>
                                <h2 id="alert" style="color:green; font-size:15px "></h2>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--MAP AREA -->
                        <div class="rigional-map-area" data-aos="fade-up">
                            <img src="assets/img/banner/contact.png" alt="contact">
                            <div class="map-address">
                                <div class="contact-tool d-flex align-items-center mb-20">
                                    <div class="icon d-flex justify-content-center align-items-center mr-10"><i
                                            class="icon_phone"></i></div>
                                    <a href=""> + (976) 77803803</a>
                                </div>
                                <div class="contact-tool d-flex align-items-center mb-20">
                                    <div class="icon d-flex justify-content-center align-items-center mr-10"><i
                                            class="icon_mail"></i></div>
                                    <a href=""> zescoin@seclab.mn</a>
                                </div>
                                <div class="contact-tool d-flex align-items-center mb-20">
                                    <div class="icon d-flex justify-content-center align-items-center mr-10"><i
                                            class="fa fa-map-marker"></i></div>
                                    <a href="">Мэлмий төв 4 давхар,
                                        Зэст баг,
                                        Эрдэнэт хот, Монгол улс</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=========================================================
                  PARTNER-SECTION-AREA
   =========================================================== -->
        <section class="partner-section-area section-padding h-100">
            <div class="container">
                <div class="section-title maxw-700 mx-auto text-center mb-50">
                    <h2>Түншүүд</h2>
                </div>
                <div class="partner-logo owl-carousel owl-theme" data-aos="fade-up">
                    <div class="single-sponser-slider">
                        <div class="sponser-img">
                            <img src="assets/img/partner-logo/partner1.png" alt="partner image">
                        </div>
                    </div>
                    <div class="single-sponser-slider">
                        <div class="sponser-img">
                            <img src="assets/img/partner-logo/partner2.png" alt="partner image">
                        </div>
                    </div>
                    <div class="single-sponser-slider">
                        <div class="sponser-img">
                            <img src="assets/img/partner-logo/partner3.png" alt="partner image">
                        </div>
                    </div>
                    <div class="single-sponser-slider">
                        <div class="sponser-img">
                            <img src="assets/img/partner-logo/partner4.png" alt="partner image">
                        </div>
                    </div>
                    <div class="single-sponser-slider">
                        <div class="sponser-img">
                            <img src="assets/img/partner-logo/partner1.png" alt="partner image">
                        </div>
                    </div>
                    <div class="single-sponser-slider">
                        <div class="sponser-img">
                            <img src="assets/img/partner-logo/partner2.png" alt="partner image">
                        </div>
                    </div>
                    <div class="single-sponser-slider">
                        <div class="sponser-img">
                            <img src="assets/img/partner-logo/partner3.png" alt="partner image">
                        </div>
                    </div>
                    <div class="single-sponser-slider">
                        <div class="sponser-img">
                            <img src="assets/img/partner-logo/partner4.png" alt="partner image">
                        </div>
                    </div>
                </div>
            </div>
        </section>



        
    </div>
    <!--++++++++ Start footer section ++++++++-->
    <div class="footer-section-wrapper">
        <div class="footer-area  section-padding bg-primary">
            <div class="container">
                <div class="footer-section  mt-50">
                    <div class="row">
                        <div class="col-md-4 col-sm-8">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="#"><img src="assets/img/logo/zes.png" alt="cryptocoin image"></a>
                                </div>
                                <p>Зэскойн нь онлайн сурталчилгааны орлогоос хэрэглэгчдэд хуваарилах, сурталчилгааны
                                    төлбөр тооцоог түргэн, хялбар болгох крипто токен юм.</p>
                                <div class="social-links mt-20">
                                    <ul class="d-flex">
                                        <li>
                                            <a href="https://www.facebook.com/zescoin">
                                                <i class="fa fa-facebook"></i>
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/Zescoin_">
                                                <i class="fa fa-twitter"></i>
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.reddit.com/r/zescoin/">
                                                <i class="fa fa-reddit"></i>
                                                <i class="fa fa-reddit"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://t.me/zescoinofficial">
                                                <i class="fa fa-telegram"></i>
                                                <i class="fa fa-telegram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/zescoin_official/">
                                                <i class="fa fa-instagram"></i>
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="footer-widget">

                                <a href="https://seclab.mn/">
                                    <h6 style="color: rgb(70, 122, 201);">
                                        "Секлаб" ХХК
                                    </h6>
                                </a>
                                <ul>
                                    <li><a href="https://seclab.mn/">Нүүр хуудас</a></li>
                                    <li><a href="https://seclab.mn/">Бидний тухай</a></li>
                                    <li><a href="https://seclab.mn/">Холбоо барих</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="footer-widget ">
                                <h6>Зэскойн</h6>
                                <ul>
                                    <li><a href="#">Эхлэл</a></li>
                                    <li><a href="#road-map">Төлөвлөгөө</a></li>
                                    <li><a href="#team">Бидний тухай</a></li>
                                    <li><a href="#faq">Тусламж</a></li>
                                    <li><a href="#home">Шатаалт</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-8">
                            <div class="footer-widget ">
                                <h6>Аппликейшн</h6>
                                <ul>
                                    <li><a href="#faq">Аппликейшн ашиглах заавар</a></li>
                                    <li><a href="tos.pdf">Аппликейшны үйлчилгээний нөхцөл</a></li>
                                    <li><a href="privacy.pdf">Аппликейшны нууцлалын бодлого</a></li>
                                    <li><a href="#try_app">Аппликейшн татах</a></li>
                                    <noindex>
                                        
                            </noindex>
                                    <div class="social-links mt-20">
                                        <ul class="d-flex">
                                            <li>
                                                <a href="https://apps.apple.com/mn/app/zescoin-wallet/id1582435424">
                                                    <i class="fa fa-apple"></i>
                                                    <i class="fa fa-apple"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://play.google.com/store/apps/details?id=com.seclab.melon">
                                                    <i class="fa fa-android"></i>
                                                    <i class="fa fa-android"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                            </div>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-area bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-text">
                        <p>©2021 <a href="#" style="color: rgb(116, 106, 255);"> СЕКЛАБ </a> ХХК. Зохиогчийн эрхээр
                            хамгаалагдсан.
                        </p>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- Jquery scripts -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCn4uayw359fjMh4P9i2rKKZYHzXaqTRNs"></script>
    <script>
        var form = document.getElementById('sheetdb-form');
        form.addEventListener("submit", e => {
            e.preventDefault();
            fetch(form.action, {
                method: "POST",
                body: new FormData(document.getElementById("sheetdb-form")),
            }).then(
                response => response.json()
            ).then((html) => {
                // you can put any JS code here
                document.getElementById('alert').innerHTML = "Амжилттай илгээгдлээ.";
            });
        });
    </script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>

</html>