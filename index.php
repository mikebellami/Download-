<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Page Title -->
        <title>LEAP Hackathon - Learn Experience and Program</title>
        <!-- / -->

        <!---Font Icon-->
        <link href="static/plugin/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
        <link href="static/plugin/themify-icons/themify-icons.css" rel="stylesheet">
        <!-- / -->

        <!-- Plugin CSS -->
        <link href="static/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="static/plugin/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
        <link href="static/plugin/magnific/magnific-popup.css" rel="stylesheet">

        <!-- / -->

        <!-- Theme Style -->
        <link href="static/css/styles.css" rel="stylesheet">
        <link href="static/css/color/default.css" rel="stylesheet" id="color_theme">
        <link rel="stylesheet" href="static/css/leapwise.css">
        <link rel="stylesheet" href="static/css/animate.css">
        <link rel="stylesheet" href="static/css/swal.min.css">
        <link rel="stylesheet" href="static/css/izimodal.min.css">
        <!-- / -->

        <!-- jQuery -->
        <script src="static/js/jquery-3.2.1.min.js"></script>
        <script src="static/js/jquery-migrate-3.0.0.min.js"></script>

        <!-- custom -->
        <script src="static/js/custom.js"></script>
        <script src="static/js/swal.min.js"></script>

        <!-- Favicon -->
        <link rel="icon" href="favicon.ico" />
        <!-- / -->
    </head>

    <!-- Body Start -->

    <body>

        <!-- Loading -->
        <div id="loading">
            <div class="load"><img src="./static/img/loader.gif" alt=""></div>
        </div>
        <!-- / -->

        <!-- Header -->
        <header>
            <nav class="navbar header-nav fixed-top navbar-expand-lg header-nav-light">
                <div class="container">
                    <!-- Brand -->
                    <h1 class="font-alt animated fadeInUp" style="font-family: 'Rezland', sans-serif;">LEAP</h1>

                    <!-- / -->
                </div>
                <!-- Container -->
            </nav>
            <!-- Navbar -->
        </header>
        <!-- Header End -->

        <!-- Main Start -->
        <main>
            <!-- Modal structure -->
            <div id="modal" data-iziModal-title="LEAP Hackathon" data-iziModal-subtitle="Join the contest" data-iziModal-icon="icon-home"></div>

            <!-- <div id="response" class="iziModal" data-izimodal-group="alerts"></div> -->
            <div id="res" data-iziModal-title="LEAP Hackathon" data-iziModal-subtitle="Join the contest" data-iziModal-icon="icon-home">

                <!-- Home Banner Start -->
                <section id="home" class="home-banner-01 gray-bg-g border-bottom">
                    <div class="bg-effect"></div>
                    <div id="particles-box"></div>
                    <div class="container">
                        <div class="row full-screen align-items-center">
                            <div class="col col-md-12 col-lg-12 col-xl-12 p-70px-tb md-p-30px-b sm-p-60px-t m-10px-t">
                                <div class="home-text-center p-30px-r md-p-0px-r">
                                    <h3 class="font-alt animated fadeInUp">Download </h3>
                                    <h6 style="margin-bottom: 3%; color: #DB3726; opacity: 0.8;">Are you up for the challenge?</h6>
                                    <div class="form">
                                        <div class="form-panel one">
                                            <div class="form-content">
                                                <form id="reg-form">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Search your document" id="username" name="username" required="required" />
                                                        <button type="submit">Search</button>
                                                    </div>
                                                </form>
                                                <div class="result_sreach m-10px-t">
                                                    <p align="justify">Search Result: <span style="color:red">0</span> record(s) found</p>
                                                </div>
                                                <div>
                                                    <table class="table table-striped" style="text-align: center;">
                                                        <thead style="background-color:#54E0C7; color:white; ">
                                                            <tr>
                                                                <th>Filename</th>
                                                                <th>Size</th>
                                                                <th>Description</th>
                                                                <th>Download</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr style="background-color:white; ">
                                                                <th>Kali linux</th>
                                                                <td> 4.2gb</td>
                                                                <td style="width:40%;text-align: justify; "> ipsum dolor sit amet, consectetur adipisicing elit,tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</td>
                                                                <td>
                                                                    <button type="submit" class="Search-btn">Download</button>
                                                                </td>
                                                            </tr>
                                                            <tr style="background-color:white; ">
                                                                <th>Kali linux</th>
                                                                <td> 4.2gb</td>
                                                                <td style="width:40%;text-align: justify; "> ipsum dolor sit amet, consectetur adipisicing elit,tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</td>
                                                                <td>
                                                                    <button type="submit" class="Search-btn">Download</button>
                                                                </td>
                                                            </tr>
                                                            <tr style="background-color:white; ">
                                                                <th>Kali linux</th>
                                                                <td> 4.2gb</td>
                                                                <td style="width:40%;text-align: justify; "> ipsum dolor sit amet, consectetur adipisicing elit,tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</td>
                                                                <td>
                                                                    <button type="submit" class="Search-btn">Download</button>
                                                                </td>
                                                            </tr>
                                                            <tr style="background-color:white; ">
                                                                <th>Kali linux</th>
                                                                <td> 4.2gb</td>
                                                                <td style="width:40%;text-align: justify; "> ipsum dolor sit amet, consectetur adipisicing elit,tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</td>
                                                                <td>
                                                                    <button type="submit" class="Search-btn">Download</button>
                                                                </td>
                                                            </tr>
                                                            <tr style="background-color:white; ">
                                                                <th>Kali linux</th>
                                                                <td> 4.2gb</td>
                                                                <td style="width:40%;text-align: justify; "> ipsum dolor sit amet, consectetur adipisicing elit,tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</td>
                                                                <td>
                                                                    <button type="submit" class="Search-btn">Download</button>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- col -->
                            <div class="col-md-12 " style="text-align: center; padding-bottom: 10%; ">
                                Organized with <i class="fa fa-heart text-red "></i> by <a href="https://fstackdev.net " target="_blank " style="color: #2BC9B4; border-bottom: 1px dotted #2BC9B4; text-decoration: none; ">FStackDev</a> • GDSC Landmark University • NACOSS, LMU
                            </div>
                        </div>
                    </div>
                    <!-- container -->
                </section>
                <!-- / -->

                <!-- Plugins -->
                <script src="static/plugin/bootstrap/js/popper.min.js "></script>
                <script src="static/plugin/bootstrap/js/bootstrap.min.js "></script>
                <script src="static/plugin/owl-carousel/js/owl.carousel.min.js "></script>
                <script src="static/plugin/magnific/jquery.magnific-popup.min.js "></script>
                <script src="static/js/izimodal.min.js "></script>

                <script type="text/javascript ">
                    $("#modal ").iziModal();
                </script>
    </body>
    <!-- Body End -->

    </html>