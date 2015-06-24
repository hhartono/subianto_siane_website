<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title><?php echo $title;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content="Subianto Siane Architecture"/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="/assets/public/css/reset.css">
        <link type="text/css" rel="stylesheet" href="/assets/public/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="/assets/public/css/style.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="/assets/public/images/favicon.ico">
        <!--link rel="stylesheet" href="/assets/public/css/turnjs/basic.css"-->
        <link rel="stylesheet" href="/assets/public/css/fotorama.css">
        <style>
            .flipbook-viewport{
                display: table;
                width: 100%;
                height: 100%;
                z-index:4;
            }
            .book-container{
                display: table-cell;
                vertical-align: middle;
                text-align: center;
                overflow: hidden;
            }
            .rel{
                position:relative;
            }
            .flipbook {
                margin: 0 auto 0;
                width: 90%;
                height: 90%;
                -webkit-touch-callout: none;
                -webkit-user-select: none;
                -khtml-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            .flipbook .page {
                width: 100%;
            }

            .flipbook .page img {
                width: 100%;
                height: 100%;
            }
            #flipbook .page-wrapper{
               -webkit-perspective:2000px;
               -moz-perspective: 2000px;
               -ms-perspective: 2000px;
               perspective: 2000px;
            }
             .flipbook .shadow, .flipbook.shadow{
                -webkit-transition: -webkit-box-shadow 0.5s;
                -moz-transition: -moz-box-shadow 0.5s;
                -o-transition: -webkit-box-shadow 0.5s;
                -ms-transition: -ms-box-shadow 0.5s;
            
                -webkit-box-shadow:0 0 2px #000;
                -moz-box-shadow:0 0 2px #000;
                -o-box-shadow:0 0 2px #000;
                -ms-box-shadow:0 0 2px #000;
                box-shadow:0 0 2px #000;
            } 
            .flipbook .depth{
                background-image:url(assets/public/images/pages-depth.png);
                position:absolute;
                top:7px;
                width:16px;
                height:590px;
            }
            .flipbook .turn-page{
                -moz-box-shadow: inset 0 0 1px red;
                -webkit-box-shadow: inset 0 0 1px red;
                box-shadow: inset 0 0 1px red;  
            }
            a#explore, a#gotocontact{
                color: #fff !important;
                opacity: 0.5;
            }
            a#explore:hover, a#gotocontact:hover{
                opacity: 0.9;
            }
            /*
            .category-intro-items{

            }*/
            .category-intro-item{
                width:20%;
                float:left;
            }
            .category-item-holder{
                /*overflow: hidden;*/
                float: left;
                width:100%;
                height: auto;
                position: relative;
            }
            .hid-port-info .category-item-holder{
                overflow: hidden;
            }
            .category-item-holder:before {
                content:'';
                position:absolute;
                right:20px;
                bottom:10px;
                background:#000;
            }
            .category-item-holder:before {
                width:0;
                height:6px;
            }
            .category-item-holder:hover:before   {
                width:50px;
            }  
            .category-item-holder a img, .category-item-holder:before  {
                -webkit-transition: all 300ms linear;
                -moz-transition: all 300ms linear;
                -o-transition: all 300ms linear;
                -ms-transition: all 300ms linear;
                transition: all 300ms linear;
            }
            .category-box-item{
                float:left;
                width:100%;
            }
            .category-box-item a{
                float:left;
                width:100%;
                height:100%;
                position:relative;
                overflow: hidden;
            }

            .category-box-item a .overlay{
                opacity: 0;
                z-index: 2;
                -webkit-transition: all 200ms linear;
                -moz-transition: all 200ms linear;
                -o-transition: all 200ms linear;
                -ms-transition: all 200ms linear;
                transition: all 200ms linear;
            }
            .category-box-item a:hover .overlay {
                opacity:0.3;
            }
            .category-intro-item .overlay{
                background: #fff;
            }
            .category-box-item a img{
                position: relative;
                z-index: 1;
                width:135%;
                height: auto;
                margin:0 auto;
            }
            .category-item{
                position: relative;
                float: left;
                width:100%;
                z-index: 3;
                margin-top:10px;
                padding-bottom: 10px;
            }
            .hid-port-info .category-item{
                position: absolute;
                bottom:-100%;
                left:0px;
                margin:0px;
                padding:10px 20px;
                background: #fff;
                -webkit-transition: all 500ms linear;
                -moz-transition: all 500ms linear;
                -o-transition: all 500ms linear;
                -ms-transition: all 500ms linear;
                transition: all 500ms linear;
            }
            .category-item h3{
                font-size:12px;
                text-transform: uppercase;
                font-weight: 700;
                position:relative;
                float: left;
                font-family:'futurastd-bold';
            }
            .longbox{
                float:left;
                width:20%;
                height: 60%;
                background: #ccc;
                overflow: hidden;
            }
            .box-right{
                margin-right: 15%;
            }
            .box-left{
                margin-left:15%;
            }
            .box-center{
                margin-right:5%;
                margin-left:5%;
            }

        </style>
    </head>
    <body>
        <div class="loader"><i class="fa fa-refresh fa-spin"></i></div>
        <!--================= main start ================-->
        <div id="main">
            <?php 
            if(isset($hometoplayer)){
            ?>
                <div id="masklayer" style="background:#4b4842;position:fixed;z-index:90;"></div>
                <div id="hometoplayer" style="position:relative;z-index:100;">
                    <div class="introword" style="width:460px;">
                        <img style="" src="/assets/public/images/intro_subianto_white.png" alt="">
                    </div>
                    <div class="introword" style="width:460px;">
                        <img style="" src="/assets/public/images/intro_siane_white.png" alt="">
                    </div>
                    <div class="introword" style="width:460px;">
                        <img style="" src="/assets/public/images/intro_architect_white.png" alt="">
                    </div>
                    <div class="introword" style="width:460px; margin-top:165px;">
                        <div style="float:left;width:230px;">
                            <a href="#" id="explore">
                                EXPLORE OUR PROJECTS
                            </a>
                        </div>
                        <div style="float:left;width:230px;">
                            <a href="/contact" id="gotocontact">
                                CONTACT US
                            </a>
                        </div>
                        
                    </div>
                </div>
            <?php
            }else{
                // echo nothing
            }
            ?>
            
            <!--=============== header ===============-->   
            <header>
                <div class="header-inner">
                    <div class="logo-holder">
                        <a href="/home" class="ajax"><img class="ss-logo" src="/assets/public/images/ss_logo.png" alt=""></a>
                    </div>
                    <div class="nav-button-holder">
                        <div class="nav-button vis-m"><span></span><span></span><span></span></div>
                    </div>
                    <div class="nav-holder">
                        <nav>
                            <ul>
                                <li><a id="navhome" href="/home" class="ajax <?php echo (isset($homeactlink))? $homeactlink : '';?>">Home</a></li>
                                <li><a href="/project" class="ajax <?php echo (isset($projectactlink))? $projectactlink: '' ;?>">Projects</a></li>
                                <li>
                                    <a href="/about" class="ajax <?php echo (isset($aboutactlink))? $aboutactlink: '' ;?>">About us </a>
                                    <!-- Scroll navigation  -->
                                    <!-- <ul>
                                        <li><a href="about.html#sec1" class="ajax custom-scroll-link">About us </a></li>
                                        <li><a href="about.html#sec2" class="ajax custom-scroll-link">Team</a></li>
                                        <li><a href="about.html#sec3" class="ajax custom-scroll-link">Story </a></li>
                                        <li><a href="about.html#sec4" class="ajax custom-scroll-link">Services</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="/contact" class="ajax <?php echo (isset($contactactlink))? $contactactlink: '' ;?>">Contact</a></li>
                                <li><a href="/portfolio" class="ajax <?php echo (isset($portfolioactlink))? $portfolioactlink: '' ;?>">Portfolio</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="share-container isShare"></div>
                <a class="selectMe shareSelector transition">Share</a>                      
            </header>