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
         
    </head>
    <body>
        <div class="loader"><i class="fa fa-refresh fa-spin"></i></div>
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header ===============-->   
            <header>
                <div class="header-inner">
                    <div class="logo-holder">
                        <a href="/" class="ajax"><img src="/assets/public/images/logo37x30.png" alt=""></a>
                    </div>
                    <div class="nav-button-holder">
                        <div class="nav-button vis-m"><span></span><span></span><span></span></div>
                    </div>
                    <div class="nav-holder">
                        <nav>
                            <ul>
                                <li><a href="/" class="ajax <?php echo (isset($homeactlink))? $homeactlink : '';?>">Home</a></li>
                                <li><a href="/project" class="ajax pp <?php echo (isset($projectactlink))? $projectactlink: '' ;?>">Projects</a></li>
                                <li>
                                    <a href="/about" class="ajax pa <?php echo (isset($aboutactlink))? $aboutactlink: '' ;?>">About us </a>
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