                <section id="subscribe_section" class="subscribe_section">
                    <div class="row">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal">
                            <div class="form-group form-group-lg">
                                <label class="col-sm-5 control-label" for="formGroupInputLarge">
                                    <h1><span class="gold-color">Sign up</span> for updates</h1>
                                </label>
                                <div class="col-sm-3">
                                    <input type="text" id="subscribe" name="subscribe" class="form-control input-lg">
                                </div>
                                <div class="col-sm-3">
                                    <input type="submit" name="subscribe_btn" value="Sign Up" class="btn btn-large gold">
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                        </form>
                        <?php include(ROOT_PATH . '/templates/messages.php') ?>
                        <?php include(ROOT_PATH . '/templates/errors.php') ?>
                    </div>
                </section>
                <!-- Subscriber Section -->
                <section id="footer_section" class="footer_section">
                    <div class="container">
                        <hr class="footer-top">
                        <div class="col-md-2"></div>
                        <div class="row col-md-8">
                            <div class="col-md-6">
                                <div class="footer_widget_title">
                                    <h3 class="navy-color">About Us</h3>
                                </div>
                                <div class="logo footer-logo">
                                    <a title="fontanero" href="about.php">
                                        <img width="150px" src="assets/img/logo5.png" alt="BPR">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer_widget_title">
                                    <h3 class="navy-color">Directory</h3>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <ul class="list-unstyled left">
                                            <li><a href="united-states.php">U.S.</a></li>
                                            <li><a href="#">World</a></li>
                                            <li><a href="apply.php">Apply</a></li>
                                            <li><a href="about.php">About</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="footer_bottom_Section">
                        <div class="container">
                            <div class="row">
                                <div class="footer">
                                    <div class="col-sm-3">
                                        <div class="social">
                                            <a class="icons-sm fb-ic" href"https://www.facebook.com/thebruinpoliticalreview/"><i class="fa fa-facebook"></i></a>
                                            <!--Twitter-->
                                            <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                                            <!--Google +-->
                                            <a class="icons-sm inst-ic" href="https://www.instagram.com/bruinpoliticalreview/"><i class="fa fa-instagram"> </i></a>
                                            <!--Linkedin-->
                                            <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>&copy; Copyright 2020 - Bruin Political Review.</a> </p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>Bruin Political Review</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- #content-wrapper -->
        </div>
        <!-- .offcanvas-pusher -->
        <a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
        <div class="uc-mobile-menu uc-mobile-menu-effect">
            <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
                id="uc-mobile-menu-close-btn">&times;</button>
            <div>
                <div>
                    <ul id="menu">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="united-states.php">U.S.</a></li>
                        <li><a href="world.php">World</a></li>
                        <li><a href="apply.php">Apply</a></li>
                        <li><a href="about.php">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- .uc-mobile-menu -->
    </div>
    <!-- #main-wrapper -->
    <!-- jquery Core-->
    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Theme Menu -->
    <script src="assets/js/mobile-menu.js"></script>
    <!-- Owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Theme Script -->
    <script src="assets/js/script.js"></script>
</body>