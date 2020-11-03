<!doctype html>
<html lang="en">
    <head>
        <title>The Ghost Pacer</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="icon" href="assets/logoCircle2.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="https://use.typekit.net/zmo0egj.css">

        <!-- Bootstrap CSS -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <link rel = "stylesheet" type = "text/css" href = "assets/newStyle.css?ts=<?=time()?>" />

        <!--<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/3d05e82bc332f4d602584cbfa/c0ff9e40f9fcf2fa8bf0fe050.js");</script>-->
        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ouibounce/0.0.11/ouibounce.min.js"></script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WZHZC5V');</script>
        <!-- End Google Tag Manager -->
    </head>

    <body>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZHZC5V"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="signUpContentModal">
                        <h2 class="text-center">
                            Don't miss out
                        </h2><br>
                        <p class="medium text-center justifyMobile">
                            For a limitted time, the Ghost Pacer is available on Kickstarter at a <strong class="blue">
                                43% discount</strong> from its MSRP. Don't miss out. Buy it now.
                        </p>
                        <!--
                        <h1 class="text-center spec" id="countdown">
                            20d 0h 0m 0s
                        </h1>
                        <p class="medium text-center justifyMobile">
                            Until this offer expires</p>-->
                            <br><br>
                        <a class="bannerButton blackBG backNow" href="https://www.kickstarter.com/projects/711258243/ghost-pacer-your-personal-holographic-workout-partner"> <strong class="blue italic"> Buy</strong> on Kickstarter</a>
                    </div>
                </div>
                <div class="col-lg-1"></div>

            </div>

        </div>

        <script>
            var triggered = false;
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
            modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            }
            document.addEventListener("mouseleave", function(e){
                if( e.clientY < 0 )
                {
                    if (triggered == false){
                        modal.style.display = "block";
                        triggered = true;
                    }
                }
            }, false);
        </script>

        <nav class="navbar transparent navbar-default fixed">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle ml-auto collapsed" data-toggle="collapse" 
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only nopadding">Toggle navigation</span>
                    <span class="icon-bar nopadding"></span>
                    <span class="icon-bar nopadding"></span>
                    <span class="icon-bar nopadding"></span>
                </button>
                <a class="navbar-brand" href="#">GHOST PACER</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link home active navbar" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link features navbar scrolly" href="#featuresSummary">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link specs navbar scrolly" href="#specs">Specifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar" href="about/#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link contact navbar" href="blogs">Blog</a>
                    </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        </script>

        <section id="opening">
            <div class="banner">
                <div class="darkenOpening">
                    <div class="col-md-6">
                        <div class="bannerText">
                            <h1 class="text-center opening">
                                THE<br><strong class="blue">GHOST</strong><br>PACER
                            </h1>

                            <a class="bannerButton backNow" href="https://www.kickstarter.com/projects/711258243/ghost-pacer-your-personal-holographic-workout-partner"> <strong class="blue italic"> Buy</strong> on Kickstarter</a>
                            <p class="opening text-center"> Supercharge your workout with a <br>holographic training partner </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </section>

        <section id="emailSignup">
            <div class="signupBG">
                <div class="darken">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="signUpContent">
                            <h2 class="white text-center">
                                Don't miss out
                            </h2><br>
                            <p class="white medium text-center justifyMobile">
                                For a limitted time, the Ghost Pacer is available on Kickstarter at a <strong class="blue">
                                 43% discount</strong> from its MSRP. Don't miss out. Buy it now.
                            </p>
                            <br><br>
                            <a class="bannerButton backNow" href="https://www.kickstarter.com/projects/711258243/ghost-pacer-your-personal-holographic-workout-partner"> <strong class="blue italic"> Buy</strong> on Kickstarter</a>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </section>

        <section id="openingContent" class="hiddenX">
            <div class="topSection">
            <div class="row contentBlock hiddenX">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-5 hiddenX nopadding">
                    <div class="sectionHeader">
                        <h2 class="text-left scrollReveal">
                            You've never seen anything like <strong class="blue">this.</strong>
                        </h2>
                        <br>
                        <div class="noMobile scrollReveal">
                            <p class="medium"><a href="https://www.kickstarter.com/projects/711258243/ghost-pacer-your-personal-holographic-workout-partner" class="medium backNow">Watch the video > </a></p><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-5"></div>
            </div>
            <div class="row center justifyMobile noMobile">
                <img src="assets/2glasses.jpg" class="image">
            </div>
            <div class="bottomSection hiddenX">
                <div class="racerBG2 hiddenX">
                    <div class="darken hiddenX">
                        <div class="row justifyMobile hiddenX">
                            <div class="col-md-7"></div>
                            <div class="col-md-4">
                                <div class="rbg2Content">
                                    <h2 class="secondary white scrollReveal">
                                        Welcome to the <strong class="blue">future</strong><br> of running.
                                    </h2><br>
                                    <div class="noMobile">
                                        <p class="white medium scrollReveal">
                                            The Ghost Pacer augmented reality glasses project a live holographic 
                                            opponent into your field of view that paces you and pushes you to perform at your best.
                                        </p><br>
                                        <p><a href="https://www.kickstarter.com/projects/711258243/ghost-pacer-your-personal-holographic-workout-partner" class="bold scrollReveal backNow"> Buy on Kickstarter > </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="justifyMobile onlyMobile">
                <p class="medium scrollReveal">
                    The Ghost Pacer augmented reality glasses project a live holographic 
                    opponent into your field of view that paces you and pushes you to perform at your best.
                </p>
                <p><a href="https://www.kickstarter.com/projects/711258243/ghost-pacer-your-personal-holographic-workout-partner" class="bold scrollReveal backNow"> Buy on Kickstarter > </a>
            </div>
        </section>

        <section id="kipchoge">
            <div class="row contentBlock">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-6">
                        <div class="sectionHeader">
                            <h2 class="text-left scrollReveal">
                                The <strong class="blue">ultimate</strong><br> training partner
                            </h2><br>
                            <p class="medium scrollReveal">
                                Having a running partner has been proven to lead to more effective and higher-quality training. 
                                Ghost Pacer allows you to train with a virtual partner anywhere at any time that will always push 
                                you towards your target pace.
                            </p>
                        </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
            <div class="kipchogeBG hiddenX">
                <div class="darken hiddenX">
                    <div class="row kipchogeContent hiddenX">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5">
                            <div class="scrollReveal allSides hiddenX">
                                <div class="row padded hiddenX totalPadding">
                                    <h2 class="white">“You cannot train alone and expect to run a fast time.”</h2> <br>
                                    <h3 class="white opening">- Eliud Kipchoge, marathon world-record holder</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                </div>
            </div>

        </section>

        <section id="featuresSummary">

            <div class="center-block text-center gridPadding greybox contentBlock">
                <h2 class="text-center">
                    Key <strong class="blue">features</strong>
                </h2><br>

                <ul class="list-inline row"> 
                    <li class="col-xl-6 ">
                        <ul class="list-inline "> 
                            <li class="col-sm-6 gridRowPadding">
                                <div class="col-xs-6 scrollReveal">
                                    <a href="#optics" class="scrolly">
                                    <img src="assets/mixedReality.png" class="img-responsive cardIcon center-block">
                                    <p class="text-center feature">Mixed Reality</p></a>
                                </div>
                                <div class="col-xs-6 scrollReveal">
                                    <a href="#formFactor" class="scrolly">
                                    <img src="assets/feather.png" class="img-responsive cardIcon center-block">
                                    <p class="text-center feature">Ultra Lightweight</p></a>
                                </div>
                            </li>
                            <li class="col-sm-6 gridRowPadding scrollReveal">
                                <div class="col-xs-6">
                                    <a href="#formFactor" class="scrolly">
                                    <img src="assets/waterproof.png" class="img-responsive cardIcon center-block">
                                    <p class="text-center feature">Dust and Splash Resistant</p></a>
                                </div>
                                <div class="col-xs-6 scrollReveal">
                                    <a href="#perfectPacing" class="scrolly">
                                    <img src="assets/customizedBlack.png" class="img-responsive cardIcon center-block">
                                    <p class="text-center feature">Perfect Pacing</p></a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="col-xl-6 ">
                        <ul class="list-inline row">
                            <li class="col-sm-6 gridRowPadding">
                                <div class="col-xs-6 scrollReveal">
                                    <a href="#thousands" class="scrolly">
                                    <img src="assets/stravaLogo.png" class="img-responsive cardIcon center-block">
                                    <p class="text-center feature">Integrated with Strava</p></a>
                                </div>
                                <div class="col-xs-6 scrollReveal">
                                    <a href="#friends" class="scrolly">
                                    <img src="assets/raceWFriends.png" class="img-responsive cardIcon center-block">
                                    <p class="text-center feature">Race Your Friends</p></a>
                                </div>
                            </li>
                            <li class="col-sm-6 gridRowPadding">
                                <div class="col-xs-6 scrollReveal">
                                    <a href="#pro" class="scrolly">
                                    <img src="assets/personalized.png" class="img-responsive cardIcon center-block">
                                    <p class="text-center feature">Customized Workouts</p></a>
                                </div>
                                <div class="col-xs-6 scrollReveal">
                                    <a href="#pro" class="scrolly">
                                    <img src="assets/heartRate.png" class="img-responsive cardIcon center-block">
                                    <p class="text-center feature">Heart rate Integration</p></a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>  
            </div>
        </section>

        <section id="formFactor">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-10">
                    <div class="sectionHeader contentBlock">
                        <h2 class="text-left scrollReveal">
                            An <strong class="blue">unparalleled</strong><br> form factor
                        </h2>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row hiddenX">
                <div class="col-md-1"></div>
                <div class="col-md-10 hiddenX nopadding">
                    <div class="techBox hiddenX nopadding scrollReveal">
                        <div class="box-content justifyAlways nopadding hiddenX">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="assets/sideView01.jpg" class="align-right scrollReveal">
                                </div>
                                <div class="col-md-6">
                                    <img src="assets/blueFront.jpg" class="align-left scrollReveal">
                                </div>
                            </div>
                            <div class="row hiddenX">
                                <div class="col-md-6 hiddenX">
                                    <div class="hrDivider"></div><br>
                                    <div class="col-xs-4">
                                        <img src="assets/feather.png" class="align-right feather scrollReveal">
                                    </div>
                                    <div class="col-xs-8">
                                        <h2 class="spec scrollReveal"> <strong>90 grams</strong> <br> total weight </h2>
                                    </div>
                                </div>
                                <div class="col-md-6 hiddenX">
                                    <div class="hrDivider"></div><br>
                                    <div class="col-xs-4">
                                        <img src="assets/waterproof.png" class="align-right waterproof scrollReveal">
                                    </div>
                                    <div class="col-xs-8">
                                        <h2 class="spec scrollReveal"> <strong>Water and Dust</strong> resistant </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row contentBlock hiddenX">
                                <div class="col-lg-7">
                                    <p class="medium scrollReveal"><strong>The Ghost pacer was built by runners, for runners. </strong>
                                        It’s water and dust resistant, and it’s the only mixed reality headset in the world 
                                        that's light enough to wear comfortably while running.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            <div class="row"></div>
        </section>

        <br><br>

        <h2 class="text-center secondary justifyMobile scrollReveal"> It's the lightest mixed reality headset. <strong class="blue">Ever.</strong></h2><br>


        <section id="perfectPacing">
            <div class="contentBlock">
                <div class="pacerBG hiddenX">
                    <div class="darken hiddenX">
                        <div class="row justifyMobile hiddenX">
                            <div class="col-md-4"></div>
                            <div class="col-md-5">
                                <div class="rbg2Content">
                                    <h2 class="white semiSecondary scrollReveal">
                                        <strong class="blue">Perfect</strong> pacing
                                    </h2><br>
                                    <div class="noMobile">
                                        <p class="white medium scrollReveal">
                                            With the Ghost Pacer, you can set the avatar to run 
                                            at your target pace, at your pace from a previous workout, 
                                            or even have the avatar improve its pace on each run to help 
                                            you reach that goal or crush that next race, one step at a time.
                                        </p><br>
                                        <p><a href="https://www.kickstarter.com/projects/711258243/ghost-pacer-your-personal-holographic-workout-partner" class="bold scrollReveal backNow"> Buy on Kickstarter > </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="onlyMobile justifyMobile">
                <br>
                <p class="medium scrollReveal">
                    With the Ghost Pacer, you can set the avatar to run 
                    at your target pace, at your pace from a previous workout, 
                    or even have the avatar improve its pace on each run to help 
                    you reach that goal or crush that next race, one step at a time.
                </p><br>
                <p><a href="https://www.kickstarter.com/projects/711258243/ghost-pacer-your-personal-holographic-workout-partner" class="bold backNow"> Buy on Kickstarter > </a>
            </div>
        </section>

        <section id="thousands">
            <div class="row contentBlock">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-6">
                    <div class="sectionHeader">
                        <h2 class="text-left scrollReveal">
                            <strong class="blue">Thousands</strong> of runs<br>
                            at your fingertips
                        </h2><br>
                        <p class="medium scrollReveal">
                            The Ghost Pacer companion app allows you to find routes 
                            and race them on the Ghost Pacer glasses. We use the power 
                            of <a href="https://www.strava.com/" class="bold strava">Strava</a> to give you access to thousands of routes from 
                            across the country. Race routes run by Strava users, and 
                            access runs from your own Strava account.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
            <div class="container-fluid">
                <div class="row wmargin">
                    <div class="col-xs-4">
                        <img src="assets/homePage2.png" class="phone scrollRevealRight">
                    </div>
                    <div class="col-xs-4">
                        <img src="assets/explorePage.png" class="phone scrollReveal">
                    </div>
                    <div class="col-xs-4">
                        <img src="assets/yourRuns.png" class="phone scrollRevealLeft">
                    </div>
                </div>
            </div>
        </section>

        <section id="friends" class="">
            <div class="contentBlock">
                <div class="container-fluid racerBG3">
                    <div class="darken">
                        <div class="center-block totalPadding">
                            <h2 class="white text-center middle scrollReveal semiSecondary"> Race against <strong class="blue">friends</strong></h2>
                            <h3 class="white text-center scrollReveal allSides"> even if you can't train at the same time </h3>
                        </div>
                        <br>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <p class="adaptiveText medium scrollRevealRight justifyMobile">The Ghost Pacer companion app allows you race
                    against your friends, even if you can't train at the same time. 
                    Even if they don't have a Ghost Pacer, if they use <a class="bold strava" href="https://www.strava.com/">Strava</a>,
                    you can race against an avatar that mimics their pace on a route.
                    </p> 
                </div>
                <div class="col-lg-3"></div>
            </div>
        </section>

        <section id="pro">
            <div class="row contentBlock">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-6">
                    <div class="sectionHeader">
                        <h2 class="text-left scrollReveal">
                            <strong class="blue">Personalized</strong> workouts
                        </h2><br>
                        <p class="medium scrollReveal">
                            Get the most out of every workout. The Ghost Pacer companion app analyzes your workout history 
                            to build customized workouts for you. The glasses can integrate with your Apple Watch or Garmin 
                            device to keep you in the optimal exertion zone when you run, helping you get stronger with every mile. 
                        </p>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div><br>
            <div class="racerBG4">
                <div class="darken">
                    <div class="rbg4Content">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <h2 class="secondary white text-center bannerSubtitle scrollReveal">
                                A <strong class="blue">world class</strong> running coach <br>inside a pair of glasses
                            </h2>
                            <div class="row hiddenY">
                                <div class="col-sm-2"></div>
                                <div class ="col-sm-8">
                                    <div class="col-xs-6">
                                        <img src="assets/customizedWhite.png" class="personalizedIcon center-block scrollRevealRight">
                                    </div>
                                    <div class="col-xs-6">
                                        <img src="assets/heartRateWhite.png" class="personalizedIcon center-block scrollRevealLeft">
                                    </div>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="optics">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-10">
                    <div class="sectionHeader contentBlock">
                        <h2 class="text-left scrollReveal">
                            A <strong class="blue scrollReveal">revolutionary</strong><br>optical system
                        </h2>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row hiddenX">
                <div class="col-md-1"></div>
                <div class="col-md-10 hiddenX nopadding">
                    <div class="techBox hiddenX nopadding scrollReveal">
                        <div class="box-content justifyAlways nopadding hiddenX">
                            <div class="row">
                                <img src="assets/precisionengineered.jpg" class="fullScreen scrollReveal">
                            </div>
                            <div class="row hiddenX">
                                <div class="col-md-6 hiddenX">
                                    <div class="hrDivider"></div><br>
                                    <h1 class="spec scrollReveal"> 30°</h1>
                                    <h2 class="spec scrollReveal"> AR field of view </h2>
                                </div>
                                <div class="col-md-6 hiddenX">
                                    <div class="hrDivider"></div><br>
                                    <h1 class="spec scrollReveal"> 3965</h1>
                                    <h2 class="spec scrollReveal"> Pixels per inch </h2>
                                </div>
                            </div>
                            <div class="row contentBlock hiddenX">
                                <div class="col-lg-7">
                                    <p class="medium scrollReveal">The Ghost pacer features <strong>precision engineered optics and
                                        breakthrough custom-built circuitry. </strong> Our engineers have fit a supercomputer, 
                                        an ultra-bright led, and a high-resolution augmented reality display into a package
                                        that's 3 times lighter than a pair of Beats headphones.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            <div class="row"></div>
        </section>

        <section id="specs">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-10">
                    <div class="sectionHeader contentBlock">
                        <h2 class="text-left scrollReveal">
                            The <strong class="blue">numbers</strong> don't lie.
                        </h2>
                        <br>
                    </div>
                </div>
            </div>
            <div class="specBox hiddenX">
                <div class="row">
                    <div class="col-xl-1"></div>
                    <div class="col-xl-10 hiddenX">
                        <div class="row justifyAlways justifySpecs">
                            <h2 class="secondary scrollRevealLeft"> Product Specifications </h2><br>
                        </div>
                        <div class="row hiddenX">
                            <div class="justifyAlways justifySpecs hiddenX">
                                <div class="row justifyMobile">
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <h2 class="mText text-left blue scrollReveal">90<strong class="small">g</strong></h2>
                                                <p class="text-left spec scrollReveal">WEIGHT</p>
                                            </div>
                                            <div class="col-xs-6">
                                                <h2 class="mText text-left blue scrollReveal">10<strong class="small">mm</strong></h2>
                                                <p class="text-left spec scrollReveal">MAX THICKNESS</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <h2 class="mText text-left blue scrollReveal">30 <strong class="small">deg</strong></h2>
                                                <p class="text-left spec scrollReveal">AR FIELD OF VIEW</p>
                                            </div>
                                            <div class="col-xs-6">
                                                <h2 class="mText text-left blue scrollReveal">6 <strong class="small">hrs</strong></h2>
                                                <p class="text-left spec scrollReveal">BATTERY LIFE</p>
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <h2 class="mText text-left blue scrollReveal">1 <strong class="small">hr</strong></h2>
                                                <p class="text-left spec scrollReveal">RECHARGE TIME</p></div>
                                            <div class="col-xs-6">
                                                <h2 class="mText text-left blue scrollReveal">800 <strong class="small">mAh</strong></h2>
                                                <p class="text-left spec scrollReveal">BATTERY CAPACITY</p>
                                            </div>
                                        </div>      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1"></div>
                </div>
            </div>
            <div class="contentBlock">
                <img src="assets/fusionRender.jpg" class="specImage scrollReveal">
            </div>
        </section>

        <section id="finale">
            <div class="contentBlock">
                <div class="signupBG2">
                    <div class="darken">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div class="signUpContent">
                                <h2 class="white text-center">
                                    Don't miss out
                                </h2><br>
                                <p class="white medium text-center justifyMobile">
                                    For a limitted time, the Ghost Pacer is available on Kickstarter at a <strong class="blue">
                                    43% discount</strong> from its MSRP. Don't miss out. Buy it now.
                                </p>
                                <br><br>
                                <a class="bannerButton backNow" href="https://www.kickstarter.com/projects/711258243/ghost-pacer-your-personal-holographic-workout-partner"> <strong class="blue italic"> Buy</strong> on Kickstarter</a>
                            </div>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="footer">
            <div class="container-fluid black">

                <br><br><br><br>
                <p class="text-center white light">Copyright © 2020 Ghost Pacer. All Rights Reserved.</p>
                <br><br>
            </div>
        </section>

        <script src="https://unpkg.com/scrollreveal"></script>
        <script>
            ScrollReveal().reveal('.scrollReveal', { delay: 200, duration: 1200, cleanup: false, distance: '50px', origin: 'bottom'});
            ScrollReveal().reveal('.scrollRevealLeft', { delay: 200, duration: 1200, cleanup: false, distance: '100px', origin: 'left'});
            ScrollReveal().reveal('.scrollRevealRight', { delay: 200, duration: 1200, cleanup: false, distance: '100px', origin: 'right'});
        </script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script> 
        
        
        var open = false;

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("navbar-toggle")[0];

        span.onclick = function() {
            if (!open){
                $('.navbar').removeClass('transparent');
                open = true;
            }
            else {
                //$('.navbar').addClass('transparent');
                open = !open;
            }
        }


        $(document).ready(function() {
            // Transition effect for navbar 
            $(window).scroll(function() {
            // checks if window is scrolled more than 500px, adds/removes solid class
            if($(this).scrollTop() > 1000) { 
                $('.navbar').removeClass('transparent');
            } else {
                if (!open){
                    $('.navbar').addClass('transparent');
                }
            }
            });
        });
        
        $(document).ready(function() {
            // Transition effect for navbar 
            $(window).scroll(function() {
            // checks if window is scrolled more than 500px, adds/removes solid class
            if($(this).scrollTop() > 4800) { 
                $('.home').removeClass('active');
                $('.features').addClass('active');
            } else {
                $('.features').removeClass('active');
                $('.home').addClass('active');
            }
            });
        });

        $(document).ready(function() {
            // Transition effect for navbar 
            $(window).scroll(function() {
            // checks if window is scrolled more than 500px, adds/removes solid class
            if($(this).scrollTop() > 10000) { 
                $('.home').removeClass('active');
                $('.features').removeClass('active');
                $('.specs').addClass('active');
            } else {
                $('.specs').removeClass('active');
            }
            });
        });
        
        </script>
    </body>
</html>