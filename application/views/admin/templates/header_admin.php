<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="Subianto & Siane Architecture">
    <link rel="shortcut icon" href="/assets/admin/img/favicon.png">

    <title><?php echo $title;?></title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/assets/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/assets/admin/css/style.css" rel="stylesheet">
    <link href="/assets/admin/css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/assets/admin/assets/bootstrap-datepicker/css/datepicker.css" />
    <link href="/assets/admin/assets/dropzone/css/dropzone.css" rel="stylesheet"/>

    <link href="/assets/admin/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="/assets/admin/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/admin/assets/data-tables/DT_bootstrap.css" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo">Subianto<span>Siane</span></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
            </div>
            <div class="top-nav ">                
                <ul class="nav pull-right top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username"><?php echo ucwords($username);?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="/auth/logout"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->