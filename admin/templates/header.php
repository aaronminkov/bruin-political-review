    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="UCLA’s first non-partisan political review journal.">
    <!-- favicon -->
    <link href="../assets/img/favicon.png" rel=icon>
    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="../assets/fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <!-- Mobile Menu Style -->
    <link href="../assets/css/mobile-menu.css" rel="stylesheet">
    <!-- Owl carousel -->
    <link href="../assets/css/owl.carousel.css" rel="stylesheet">
    <link href="../assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Theme Style -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/admin_style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">
    <div id="main-wrapper">
        <!-- Page Preloader -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- preloader -->
        <div class="uc-mobile-menu-pusher">
            <div class="content-wrapper">
                <section id="header_section_wrapper" class="header_section_wrapper">
                    <div class="container">
                        <div class="header-section">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="left_section">
                                        <span id="day" class="date"></span>
                                        <!-- Date -->
                                        <span id="full-date" class="time"></span>
                                        <!-- Time -->
                                        <div class="social">
                                            <a class="icons-sm fb-ic" href="https://www.facebook.com/thebruinpoliticalreview/"><i class="fa fa-facebook"></i></a>
                                            <!--Twitter-->
                                            <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                                            <!--Google +-->
                                            <a class="icons-sm inst-ic" href="https://www.instagram.com/bruinpoliticalreview/"><i class="fa fa-instagram"> </i></a>
                                            <!--Pinterest-->
                                            <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                                        </div>
                                        <!-- Top Social Section -->
                                    </div>
                                    <!-- Left Header Section -->
                                </div>
                                <div class="col-md-4">
                                    <div class="logo">
                                        <a href="../index.php"><img width="185px" src="../assets/img/logo5.png"
                                                alt="BPR Logo"></a>
                                    </div>
                                    <!-- Logo Section -->
                                </div>
                                <div class="col-md-4">
                                    <div class="right_section">
                                        <ul class="nav navbar-nav">
                                        <?php if (isset($_SESSION['user']['username'])) { ?>
                                            <li><a href="dashboard.php">Dashboard</a></li>
                                            <li><a href="../logout.php">Logout</a></li>
                                        <?php } else { ?>
                                            <li><a href="../login.php">Login</a></li>
                                            <li><a href="#">Register</a></li>
                                        <?php } ?>
                                        </ul>
                                        <!-- Language Section -->
                                    </div>
                                    <!-- Right Header Section -->
                                </div>
                            </div>
                        </div>
                        <!-- Header Section -->
                        <div class="navigation-section">
                            <nav class="navbar m-menu navbar-default">
                                <div class="container">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#navbar-collapse-1"><span class="sr-only">Toggle
                                                navigation</span> <span class="icon-bar"></span> <span
                                                class="icon-bar"></span> <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse navbar-centered" id="#navbar-collapse-1"
                                        role="navigation">
                                        <ul class="nav navbar-nav main-nav">
                                            <li class="<?php if($_SERVER['REQUEST_URI']=="/") { echo "active"; } ?>"><a href="../index.php">Home</a></li>
                                            <li class="<?php if($_SERVER['REQUEST_URI']=="/united-states") { echo "active"; } ?>"><a href="../united-states.php">U.S.</a></li>
                                            <li class="<?php if($_SERVER['REQUEST_URI']=="/world") { echo "active"; } ?>"><a href="../world.php">World</a></li>
                                            <li class="<?php if($_SERVER['REQUEST_URI']=="/apply") { echo "active"; } ?>"><a href="../apply.php">Apply</a></li>
                                            <li class="<?php if($_SERVER['REQUEST_URI']=="/about") { echo "active"; } ?>"><a href="../about.php">About</a></li>
                                            <!-- <li class="dropdown m-menu-fw">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">More
                                                    <span><i class="fa fa-angle-down"></i></span></a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <div class="m-menu-content">
                                                            <ul class="col-sm-3">
                                                                <li><a href="#">Apply</a></li>
                                                                <li><a href="#">About</a></li>
                                                                <li><a href="#">Contact Us</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <!-- .navbar-collapse -->
                                </div>
                                <!-- .container -->
                            </nav>
                            <!-- .nav -->
                        </div>
                        <!-- .navigation-section -->
                    </div>
                    <!-- .container -->
                </section>
                <!-- header_section_wrapper -->