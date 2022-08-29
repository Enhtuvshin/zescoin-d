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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#team">About</a></li>
                                            <li><a href="#faq">assistance</a></li>
                                            <!-- <li><a href="#">Мэдээлэл</a></li> -->
                                            <li><a href="#contact">Contact</a></li>
                                            <li><a href="https://zescoin.mn/whitepaper.html">WHITEPAPER</a></li>
                                            <li><a href="#home">ZesCoin Burning</a></li>                                                                                        
                                        </ul>

                                        <div class="try-app-btn ml-60">
                                        
                                            <a href="#token"
                                                class="btn btn-sm btn-primary rounded-50 hvr-shutter-out-horizontal">ZesCoin Buy</a>
                                        </div>
                                        <div>
                                        <click><a onclick="location.href='index.php'" alt='Broken Link'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/img/logo/mn.png" height="25" width="20" /></a></click>
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
                                    <h1><p style="font-size:50px;">Online advertising</p><span class="typer" id="main"
                                            data-words="progress,new generation,evolution,new culture" data-colors="#1c8dff"
                                            data-delay="100" data-deleteDelay="3000"></span><span class="cursor"
                                            data-cursorDisplay="|" data-colors="#1c8dff" data-owner="main"></span>
                                    </h1>
                                </div>




                                <p>ZesCoin is a smart contract token that is used in online advertising. 
                                The project team is developing a social network platform, Melon, which will be the first application of ZesCoin. 
                                Our goal is to integrate ZesCoin into existing online systems and make online advertisement payments easier for the payers. 
                                Users of these systems can be rewarded by ZesCoin when they view advertisements.</p>
                                <div class="hero-btn d-flex flex-wrap mt-40" data-aos="fade-up" data-aos-delay="600">
                                    <a href="/cooperation.pdf"
                                        class="btn btn-lg gradient-btn rounded-50 mr-20 mb-10 hvr-shutter-out-horizkenontal">advertisement</a>
                                    <a href="#try_app"
                                        class="btn btn-lg btn-primary rounded-50 mb-10 hvr-shutter-out-horizontal">App download</a>
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
                        <p>Initial exchange offering(IEO)
                            <br> <span>2021.09.07 (12:00)</span></p>
                        <p><b>Second exchange offering</b>
                            <br> <span>2021.09.28 (12:00)</span></p>
                        <p>Traded exchanges
                            <br> <span>Trade.mn, Complex.mn, Capex.mn</span></p>
                        <p>Delivered to the market
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
                            <h3>Zes Ad Network</h3>
                            <p>Copper Advertising Network connects the people who use websites and phone to the advertisements that was uploaded. 
                            Zescoin is based on Blockchain crypto token which was created by Seclab team’s experts and consultants.
                            </p>
                            <p>People are able to collect coin by watching advertisements, 
                            and also able to expend their businesses by distributing advertisements to the organizations that they work with.
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
                    <h2>Plan</h2>
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
                    <h2>Our Team</h2>
                    <p>More than 10 years of experience in the field of information technology, create a start-up company in the field of e-commerce and information security, 
                        with successful business experience.</p>
                </div>
                <div class="board-slider owl-carousel owl-theme slider-nav slider-dots">
                    <!--single slider-->
                    <div class="single-board-slider">
                        <div class="single-board-member d-flex flex-column justify-content-center align-items-center">
                            <div class="board-avater mb-40">
                                <img src="assets/img/board/board-1.png" alt="cryptocoin image">
                            </div>
                            <div class="board-title board-title-2 text-center">
                                <h5 class="lh-1 mb-10"><a href="">D.ZAYABAATAR</a></h5>
                                <p>CEO</p>
                                <span>"SecLab" LLC</span>
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
                                <h5 class="lh-1 mb-10"><a href="">G.BATHUYAG</a></h5>
                                <p>CFO</p>
                                <span>"SecLab" LLC</span>
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
                                <h5 class="lh-1 mb-10"><a href="">U.BATTULGA</a></h5>
                                <p>Senior Developer</p>
                                <span>"SecLab" LLC</span>
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
                                <h5 class="lh-1 mb-10"><a href="">A.TUWSHINJARGAL</a></h5>
                                <p>Senior Developer</p>
                                <span>"SecLab" LLC</span>
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
                                <h5 class="lh-1 mb-10"><a href="">N.BATSUKH</a></h5>
                                <p>Designer</p>
                                <span>"SecLab" LLC</span>
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
                                <h5 class="lh-1 mb-10"><a href="">B.SOLONGO</a></h5>
                                <p>Manager</p>
                                <span>"SecLab" LLC</span>
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
                    <h2>ZesCoin wallet (Zesc Wallet App)</h2>

                </div>
                <div class="row align-items-center">

                    <div class="col-md-8">
                        <div class="app-details mb-sm-30 mb-md-0" data-aos="fade-up">

                            <p>We are introducing the ZesCoin Wallet app to spread the use of ZesCoin to the masses.
                            This application allows users to save and transfer ZesCoins earned after watching advertisements.</p>
                            <div class="app-feature mt-3">

                                <p><span class="icon_check"></span> Save Zescoin</p>
                                <p><span class="icon_check"></span> HODL </p>
                                <p><span class="icon_check"></span> Transfer of Zescoin</p>
                                <p><span class="icon_check"></span> Collect ZesCoins by watching ads</p>
                                <p><span class="icon_check"></span> Get ZesCoins by scanning the ZesQR code on the ad
                                </p>
                                <p><span class="icon_check"></span> View information on crypto exchange rates</p>

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
                    <h2>ZesCoin Burning</h2></div>

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
  background: transparent;
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
        <div class="text">First quantity</div>
      </div>
      <div class="box">
        <div class="icon"><i class="fas fa-fire"></i></div>
        <div class="counter-value"><?= $student['numbers2']; ?></div>
        <div class="text">Total Burning</div>
      </div>
      <div class="box">
        <div class="icon"><i class="fas fa-users"></i></div>
        <div class="counter-value"><?= $student['numbers3']; ?></div>
        <div class="text">Current quantity</div>
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

  

  <div class="container">
                <div class="section-title maxw-750 mx-auto text-center mb-50" data-aos="fade-up">
                </div>
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
<div id="flip"><i class="fa fa-angle-down">&nbsp;&nbsp;<i class="fa fa-angle-down">&nbsp;&nbsp;&nbsp;</i>burned details &nbsp;&nbsp;&nbsp;<i class="fa fa-angle-down">&nbsp;&nbsp;</i><i class="fa fa-angle-down"></i></div>
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
                                    
                                    <th>First quantity</th>
                                    <th>Burned Zescoin</th>
                                    <th>Current quantity</th>
                                    <th>Date</th>
                                    
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
  </div>     
</section>

        <!--=========================================================
                    FAQ-SECTION-AREA
   =========================================================== -->
        <section class="faq-section-area section-padding" id="faq">
            <div class="container">
                <div class="section-title maxw-700 mx-auto text-center mb-50" data-aos="fade-up">
                    <h2>frequently asked question</h2>
                    <!-- <p>Хэрэглэгчид сурталчилгаа үзэж койн цуглуулах болон хамтарч ажиллах байгууллагууд сурталчилгаагаа хийлгэн бизнесээ өргөжүүлэх боломжтой. </p> -->
                </div>
                <div class="row">
                    <!-- SINGLE TAB STYLE -->
                    <div class="col-md-12">
                        <div class="tab-section">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#vision">ZesCoin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#goal">ZesCoin wallet app</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#mission"> Crypto</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#general">Admonition</a>
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
                                                    <h6>Please do your due diligence on the project you are considering investing in. hereto: </h6>
                                                </div>
                                                <div class="faq-qus-ans">
                                                    <p><span class="icon_check"></span> Carefully read the Whitepaper of the project.</p>
                                                    <p><span class="icon_check"></span> Don't get with personal emotions.</p>
                                                    <p><span class="icon_check"></span> Don't make decisions based on other people's words.</p>
                                                    <p><span class="icon_check"></span> In a pump and dump scheme, fraudsters typically spread false or misleading information to create a buying frenzy that will “pump” up the price of a stock and then 
                                                     “dump” shares of the stock by selling their own shares at the inflated price.</p>
                                                    <p><span class="icon_check"></span> Get news from official channels</p>
                                                </div>
                                            </li>
                                            <li class="list-group-item" data-aos="fade-up">
                                                <div class="faq-qus-title">
                                                    <h6> Things to consider when making a transfer: </h6>
                                                </div>
                                                <div class="faq-qus-ans">
                                                    <p><span class="icon_check"></span> Try transferring a small amount before making a transfer</p>
                                                    <p><span class="icon_check"></span> Check your forwarding address and other information</p>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="mission">
                                    <ul class="list-group">
                                        <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6>What is cryptocurrency?</h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>A cryptocurrency is a digital currency, which is an alternative form of payment created using encryption algorithms. The use of encryption technologies means that cryptocurrencies 
                                                    function both as a currency and as a virtual accounting system. To use cryptocurrencies, you need a cryptocurrency wallet.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6>What are the risks of cryptocurrencies?
                                                </h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>Custody of keys. Your private keys function as a verification mechanism embedded in your crypto wallet, 
                                                    allowing you to sign and send transactions from your wallet balance. ...
                                                    Technical complexity and making mistakes. When sending cryptocurrencies, you need to input a receiving address. 
                                                    Scammers and hackers.
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
                                                <h6>What is ZesCoin ?</h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>ZesCoin is a smart contract token that is used in online advertising. The project team is developing a social network platform, Melon, which will be the first application of ZesCoin. Our goal is to integrate ZesCoin into existing online systems and make online advertisement payments easier for the payers.

                                                ZesCoin is a crypto token developed by Seclab to share users with online advertising revenue and speed up payments of promotion.
                                                Trading exchanges: Trade.mn, Complex.mn.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6>Purchase</h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>ZesCoin's WhitePaper rules, procedure  of conduct reflection and future  70% of advertising revenue ZesCoin will be used for purchases.</p>
                                            </div>
                                        </li>
                                        <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6>Cooperation </h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>Online distribution of advertisements by placing advertisements in the ZesCoin application, 
                                                    number of users in your organization, will create opportunities to improve access.</p>
                                                <p> BoosterZ service : </p>
                                                <p><span class="icon_check"></span>Premium batch- 500’000 tugrik, 50’000 user </p>
                                                <p><span class="icon_check"></span>Standart batch- 300’000 tugrik, 30’000 user </p>
                                                <p><span class="icon_check"></span>Basic batch- 100’000 tugrik, 10’000+1’000 user. </p>
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
                                                <h6>What kind of app is ZesCoinallet?</h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>Zescoin Wallet app is a wallet to store ZesCoin. The purpose of the application is to collect coins by watching videos, get information, and enter the collected coins to the exchange. It is an app that can be developed by adding 
                                                    the function of transactions on the Ethereum blockchain to domestic and international exchanges.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6>How to collect Zescoin?</h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p><span class="icon_check"></span>View Ads: You can collect coins by viewing ads posted by organizations on the ZesCoin wallet app.
                                                </p>
                                                <p><span class="icon_check"></span>Invite a friend: You can get a link from the invite a friend option in the profile section and send it to the friend you invite. Your invited friend can collect coins by installing the app and clicking on the friend's invite link before clicking sign up.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6>Application sign up instruction</h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>Download ZesCoin Wallet app from Play Store/App Store and register by clicking “Continue with Facebook” button.
                                                If you have an iOS operating system, you can register by clicking the "Continue with AppleID" button.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6>Verification</h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>Verification can be done by reference to identity card, foreign passport or identity card. Please note that the instructions must be sent.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="list-group-item" data-aos="fade-up">
                                            <div class="faq-qus-title">
                                                <h6>HODL function </h6>
                                            </div>
                                            <div class="faq-qus-ans">
                                                <p>HODL is a crypto slang term meaning to buy-and-hold indefinitely. It implies not selling when markets go down or become volatile. Sometimes it is said to mean "hold on for dear life". 

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
                    <h2>Contact</h2>
                    <p>Please contact us at the address below for cooperation with our company and the ZesCoin project, distribution of advertising and other matters.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!--CONTACT FORM AREA -->
                        <div class="form-wrapper" data-aos="fade-up">
                            <div class="form-title">
                                <h3>Message send</h3>
                            </div>
                            <form class="form" id="sheetdb-form" action="https://sheetdb.io/api/v1/oc338u0vmw0kt">

                                <div class="form-group">
                                    <label class="form-label" for="last">mail address <sup>*</sup></label>
                                    <input id="last" name="data[email]" class="form-input" type="text" />
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="sms">Message<sup>*</sup></label>
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
                                    <a href="">Melmii Center 4 floors,
                                        Zest BAG,
                                        Erdenet city, Mongolia</a>
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
                    <h2>Supported by</h2>
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
                                <p>Smart contract token to change online advertising industry fundamentally.</p>
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
                                        "Seclab" LLC
                                    </h6>
                                </a>
                                <ul>
                                    <li><a href="https://seclab.mn/">home page</a></li>
                                    <li><a href="https://seclab.mn/">About</a></li>
                                    <li><a href="https://seclab.mn/">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="footer-widget ">
                                <h6>ZesCoin</h6>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#road-map">Plan</a></li>
                                    <li><a href="#team">About</a></li>
                                    <li><a href="#faq">Contact</a></li>
                                    <li><a href="#home">Burning</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-8">
                            <div class="footer-widget ">
                                <h6>Application</h6>
                                <ul>
                                    <li><a href="#faq"> guide</a></li>
                                    <li><a href="tos.pdf">Application service condition</a></li>
                                    <li><a href="privacy.pdf">Application Secret</a></li>
                                    <li><a href="#try_app">Application Download</a></li>
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
                        <p>Copyright ©2021 <a href="#" style="color: rgb(116, 106, 255);"> Created by SecLab LLC </a>   , Privacy Policy
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