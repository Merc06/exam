<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Exam</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('styles')

</head>

<body>
    <div id="app">
        <!-- ======= Top Bar ======= -->
        <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top bg-light">
            <div class="container d-flex text-dark">
                <div class="contact-info mr-auto">
                    <i class="icofont-home"></i> 57 Ubi Avenue 1, #07-10 Ubi Centre Singapore 408936
                    <i class="icofont-phone"></i> +65 6601 9898
                    <i class="icofont-telephone"></i> +65 6601 9897
                </div>
                <div class="social-links ml-auto">
                    <a href="#">Home</a>
                    <a href="#">News & Events</a>
                    <button class="btn btn-sm btn-warning">ENQUIRE</button>
                </div>
            </div>
        </div>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">

                <h1 class="logo mr-auto">
                    <router-link to="/">EmiNET</router-link>
                </h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li>
                            <router-link to="/services">SERVICES</router-link>
                        </li>
                        <li>
                            <router-link to="/aboutus">PRODUCTS</router-link>
                        </li>
                        <li>
                            <router-link to="/customers">CUSTOMERS</router-link>
                        </li>
                        <li>
                            <router-link to="/partners">PARTNERS</router-link>
                        </li>
                        <li>
                            <router-link to="/aboutus">ABOUT US</router-link>
                        </li>
                        <li>
                            <router-link to="#"><i class="icofont-search"></i></router-link>
                        </li>
                    </ul>
                </nav><!-- .nav-menu -->

            </div>
        </header><!-- End Header -->

        <!-- <mainapp></mainapp> -->
        <router-view></router-view>
    </div>

    <script src="{{mix('js/app.js')}}"></script>

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

   @include('scripts')


</body>

</html>
