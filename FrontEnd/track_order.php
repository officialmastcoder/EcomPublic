<!DOCTYPE html>
<html lang="en">
    

<head>
        <!-- Title -->
        <title>Track Your Order | Electro - Responsive Website Template</title>

        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.png">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="assets/vendor/font-awesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/font-electro.css">
        
        <link rel="stylesheet" href="assets/vendor/animate.css/animate.min.css">
        <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
        <link rel="stylesheet" href="assets/vendor/ion-rangeslider/css/ion.rangeSlider.css">
        <link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
        <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">
        <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
        <link rel="stylesheet" href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

        <!-- CSS Electro Template -->
        <link rel="stylesheet" href="assets/css/theme.css">
    </head>

    <body>

       
    <?php
            
            include('header.php');
            ?>

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            <!-- breadcrumb -->
            <div class="bg-gray-13 bg-md-transparent">
                <div class="container">
                    <!-- breadcrumb -->
                    <div class="my-md-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="https://transvelo.github.io/electro-html/2.0/html/home/index.php">Home</a></li>
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Track your Order</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- End breadcrumb -->
                </div>
            </div>
            <!-- End breadcrumb -->

            <div class="container">
                <div class="mx-xl-10">
                    <div class="mb-6 text-center">
                        <h1 class="mb-6">Track your Order</h1>
                        <p class="text-gray-90 px-xl-10">To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
                    </div>
                    <div class="my-4 my-xl-8">
                        <form class="js-validate" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <!-- Form Group -->
                                    <div class="js-form-message form-group">
                                        <label class="form-label" for="orderid">Order ID
                                        </label>
                                        <input type="text" class="form-control" name="text" id="orderid" placeholder="Found in your order confirmation email." aria-label="Found in your order confirmation email.">
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                                <div class="col-md-6 mb-3">
                                    <!-- Form Group -->
                                    <div class="js-form-message form-group">
                                        <label class="form-label" for="billingemail">Billing email
                                        </label>
                                        <input type="email" class="form-control" name="email" id="billingemail" placeholder="Email you used during checkout." aria-label="Email you used during checkout." required
                                        data-msg="Please enter a valid email address."
                                        data-error-class="u-has-error"
                                        data-success-class="u-has-success">
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                                <!-- Button -->
                                <div class="col mb-1">
                                    <button type="button" class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5 w-100 w-md-auto">Track</button>
                                </div>
                                <!-- End Button -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

        <?php
            include('footer.php');
        ?>

        <!-- ========== SECONDARY CONTENTS ========== -->
        <!-- Account Sidebar Navigation -->
        <aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler">
            <div class="u-sidebar__scroller">
                <div class="u-sidebar__container">
                    <div class="js-scrollbar u-header-sidebar__footer-offset pb-3">
                        <!-- Toggle Button -->
                        <div class="d-flex align-items-center pt-4 px-7">
                            <button type="button" class="close ml-auto"
                                aria-controls="sidebarContent"
                                aria-haspopup="true"
                                aria-expanded="false"
                                data-unfold-event="click"
                                data-unfold-hide-on-scroll="false"
                                data-unfold-target="#sidebarContent"
                                data-unfold-type="css-animation"
                                data-unfold-animation-in="fadeInRight"
                                data-unfold-animation-out="fadeOutRight"
                                data-unfold-duration="500">
                                <i class="ec ec-close-remove"></i>
                            </button>
                        </div>
                        <!-- End Toggle Button -->

                        <!-- Content -->
                        <div class="js-scrollbar u-sidebar__body">
                            <div class="u-sidebar__content u-header-sidebar__content">
                                <form class="js-validate">
                                    <!-- Login -->
                                    <div id="login" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                        <h2 class="h4 mb-0">Welcome Back!</h2>
                                        <p>Login to manage your account.</p>
                                        </header>
                                        <!-- End Title -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signinEmail">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signinEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email" aria-label="Email" aria-describedby="signinEmailLabel" required
                                                    data-msg="Please enter a valid email address."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                              <label class="sr-only" for="signinPassword">Password</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signinPasswordLabel">
                                                        <span class="fas fa-lock"></span>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="password" id="signinPassword" placeholder="Password" aria-label="Password" aria-describedby="signinPasswordLabel" required
                                                   data-msg="Your password is invalid. Please try again."
                                                   data-error-class="u-has-error"
                                                   data-success-class="u-has-success">
                                              </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <div class="d-flex justify-content-end mb-4">
                                            <a class="js-animation-link small link-muted" href="javascript:;"
                                               data-target="#forgotPassword"
                                               data-link-group="idForm"
                                               data-animation-in="slideInUp">Forgot Password?</a>
                                        </div>

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Login</button>
                                        </div>

                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Do not have an account?</span>
                                            <a class="js-animation-link small text-dark" href="javascript:;"
                                               data-target="#signup"
                                               data-link-group="idForm"
                                               data-animation-in="slideInUp">Signup
                                            </a>
                                        </div>

                                        <div class="text-center">
                                            <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                        </div>

                                        <!-- Login Buttons -->
                                        <div class="d-flex">
                                            <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                                              <span class="fab fa-facebook-square mr-1"></span>
                                              Facebook
                                            </a>
                                            <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                                              <span class="fab fa-google mr-1"></span>
                                              Google
                                            </a>
                                        </div>
                                        <!-- End Login Buttons -->
                                    </div>

                                    <!-- Signup -->
                                    <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                        <h2 class="h4 mb-0">Welcome to Electro.</h2>
                                        <p>Fill out the form to get started.</p>
                                        </header>
                                        <!-- End Title -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signupEmail">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signupEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" id="signupEmail" placeholder="Email" aria-label="Email" aria-describedby="signupEmailLabel" required
                                                    data-msg="Please enter a valid email address."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signupPassword">Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signupPasswordLabel">
                                                            <span class="fas fa-lock"></span>
                                                        </span>
                                                    </div>
                                                    <input type="password" class="form-control" name="password" id="signupPassword" placeholder="Password" aria-label="Password" aria-describedby="signupPasswordLabel" required
                                                    data-msg="Your password is invalid. Please try again."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                            <label class="sr-only" for="signupConfirmPassword">Confirm Password</label>
                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signupConfirmPasswordLabel">
                                                        <span class="fas fa-key"></span>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="confirmPassword" id="signupConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="signupConfirmPasswordLabel" required
                                                data-msg="Password does not match the confirm password."
                                                data-error-class="u-has-error"
                                                data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Get Started</button>
                                        </div>

                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Already have an account?</span>
                                            <a class="js-animation-link small text-dark" href="javascript:;"
                                                data-target="#login"
                                                data-link-group="idForm"
                                                data-animation-in="slideInUp">Login
                                            </a>
                                        </div>

                                        <div class="text-center">
                                            <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                        </div>

                                        <!-- Login Buttons -->
                                        <div class="d-flex">
                                            <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                                                <span class="fab fa-facebook-square mr-1"></span>
                                                Facebook
                                            </a>
                                            <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                                                <span class="fab fa-google mr-1"></span>
                                                Google
                                            </a>
                                        </div>
                                        <!-- End Login Buttons -->
                                    </div>
                                    <!-- End Signup -->

                                    <!-- Forgot Password -->
                                    <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                            <h2 class="h4 mb-0">Recover Password.</h2>
                                            <p>Enter your email address and an email with instructions will be sent to you.</p>
                                        </header>
                                        <!-- End Title -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="recoverEmail">Your email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="recoverEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Your email" aria-label="Your email" aria-describedby="recoverEmailLabel" required
                                                    data-msg="Please enter a valid email address."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Recover Password</button>
                                        </div>

                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Remember your password?</span>
                                            <a class="js-animation-link small" href="javascript:;"
                                               data-target="#login"
                                               data-link-group="idForm"
                                               data-animation-in="slideInUp">Login
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Forgot Password -->
                                </form>
                            </div>
                        </div>
                        <!-- End Content -->
                    </div>
                </div>
            </div>
        </aside>
        <!-- End Account Sidebar Navigation -->
        <!-- ========== END SECONDARY CONTENTS ========== -->
        <!-- Sidebar Navigation -->
        <aside id="sidebarContent1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarNavToggler1">
            <div class="u-sidebar__scroller">
                <div class="u-sidebar__container">
                    <div class="">
                        <!-- Toggle Button -->
                        <div class="d-flex align-items-center pt-3 px-4 bg-white">
                            <button type="button" class="close ml-auto"
                                aria-controls="sidebarContent1"
                                aria-haspopup="true"
                                aria-expanded="false"
                                data-unfold-event="click"
                                data-unfold-hide-on-scroll="false"
                                data-unfold-target="#sidebarContent1"
                                data-unfold-type="css-animation"
                                data-unfold-animation-in="fadeInLeft"
                                data-unfold-animation-out="fadeOutLeft"
                                data-unfold-duration="500">
                                <span aria-hidden="true"><i class="ec ec-close-remove"></i></span>
                            </button>
                        </div>
                        <!-- End Toggle Button -->

                        <!-- Content -->
                        <div class="js-scrollbar u-sidebar__body">
                            <div class="u-sidebar__content u-header-sidebar__content px-4">
                                <div class="mb-6 border border-width-2 border-color-3 borders-radius-6">
                                    <!-- List -->
                                    <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar view-all">
                                        <li><div class="dropdown-title">Browse Categories</div></li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav1Collapse" data-target="#sidebarNav1Collapse">
                                                Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav1Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav1" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Cameras & Photography<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Computer Components<span class="text-gray-25 font-size-12 font-weight-normal"> (22)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (5)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal"> (7)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Laptops & Computers<span class="text-gray-25 font-size-12 font-weight-normal"> (42)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Printers & Ink<span class="text-gray-25 font-size-12 font-weight-normal"> (63)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Smart Phones & Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">TV & Audio<span class="text-gray-25 font-size-12 font-weight-normal"> (66)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Video Games & Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (31)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav2Collapse" data-target="#sidebarNav2Collapse">
                                                Cameras & Photography<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav2Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav2" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Cameras<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav3Collapse" data-target="#sidebarNav3Collapse">
                                                Computer Components<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Computer Cases<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav4Collapse" data-target="#sidebarNav4Collapse">
                                                Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav4Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav4" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Smartwatches<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Wearables<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav5Collapse" data-target="#sidebarNav5Collapse">
                                                Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav5Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav5" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Tvs<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav6Collapse" data-target="#sidebarNav6Collapse">
                                                Laptops & Computers<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav6Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav6" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Cameras & Photography<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Computer Components<span class="text-gray-25 font-size-12 font-weight-normal"> (22)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (5)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal"> (7)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Laptops & Computers<span class="text-gray-25 font-size-12 font-weight-normal"> (42)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Printers & Ink<span class="text-gray-25 font-size-12 font-weight-normal"> (63)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Smart Phones & Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">TV & Audio<span class="text-gray-25 font-size-12 font-weight-normal"> (66)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Video Games & Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (31)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav7Collapse" data-target="#sidebarNav7Collapse">
                                                Printers & Ink<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav7Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav7" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Printers<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav8Collapse" data-target="#sidebarNav8Collapse">
                                                Smart Phones & Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav8Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav8" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Smartphones<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav9Collapse" data-target="#sidebarNav9Collapse">
                                                TV & Audio<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav9Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav9" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Audio Speakers<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav10Collapse" data-target="#sidebarNav10Collapse">
                                                Video Games & Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav10Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav10" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Game Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- End List -->
                                </div>
                                <div class="mb-6">
                                    <div class="border-bottom border-color-1 mb-5">
                                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Filters</h3>
                                    </div>
                                    <div class="border-bottom pb-4 mb-4">
                                        <h4 class="font-size-14 mb-3 font-weight-bold">Brands</h4>

                                        <!-- Checkboxes -->
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brandAdidas">
                                                <label class="custom-control-label" for="brandAdidas">Adidas
                                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brandNewBalance">
                                                <label class="custom-control-label" for="brandNewBalance">New Balance
                                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brandNike">
                                                <label class="custom-control-label" for="brandNike">Nike
                                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brandFredPerry">
                                                <label class="custom-control-label" for="brandFredPerry">Fred Perry
                                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brandTnf">
                                                <label class="custom-control-label" for="brandTnf">The North Face
                                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End Checkboxes -->

                                        <!-- View More - Collapse -->
                                        <div class="collapse" id="collapseBrand">
                                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="brandGucci">
                                                    <label class="custom-control-label" for="brandGucci">Gucci
                                                        <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="brandMango">
                                                    <label class="custom-control-label" for="brandMango">Mango
                                                        <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End View More - Collapse -->

                                        <!-- Link -->
                                        <a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseBrand" role="button" aria-expanded="false" aria-controls="collapseBrand">
                                            <span class="link__icon text-gray-27 bg-white">
                                                <span class="link__icon-inner">+</span>
                                            </span>
                                            <span class="link-collapse__default">Show more</span>
                                            <span class="link-collapse__active">Show less</span>
                                        </a>
                                        <!-- End Link -->
                                    </div>
                                    <div class="border-bottom pb-4 mb-4">
                                        <h4 class="font-size-14 mb-3 font-weight-bold">Color</h4>

                                        <!-- Checkboxes -->
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="categoryTshirt">
                                                <label class="custom-control-label" for="categoryTshirt">Black <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="categoryShoes">
                                                <label class="custom-control-label" for="categoryShoes">Black Leather <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="categoryAccessories">
                                                <label class="custom-control-label" for="categoryAccessories">Black with Red <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="categoryTops">
                                                <label class="custom-control-label" for="categoryTops">Gold <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="categoryBottom">
                                                <label class="custom-control-label" for="categoryBottom">Spacegrey <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                            </div>
                                        </div>
                                        <!-- End Checkboxes -->

                                        <!-- View More - Collapse -->
                                        <div class="collapse" id="collapseColor">
                                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryShorts">
                                                    <label class="custom-control-label" for="categoryShorts">Turquoise <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryHats">
                                                    <label class="custom-control-label" for="categoryHats">White <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categorySocks">
                                                    <label class="custom-control-label" for="categorySocks">White with Gold <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End View More - Collapse -->

                                        <!-- Link -->
                                        <a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseColor" role="button" aria-expanded="false" aria-controls="collapseColor">
                                            <span class="link__icon text-gray-27 bg-white">
                                                <span class="link__icon-inner">+</span>
                                            </span>
                                            <span class="link-collapse__default">Show more</span>
                                            <span class="link-collapse__active">Show less</span>
                                        </a>
                                        <!-- End Link -->
                                    </div>
                                    <div class="range-slider">
                                        <h4 class="font-size-14 mb-3 font-weight-bold">Price</h4>
                                        <!-- Range Slider -->
                                        <input class="js-range-slider" type="text"
                                        data-extra-classes="u-range-slider u-range-slider-indicator u-range-slider-grid"
                                        data-type="double"
                                        data-grid="false"
                                        data-hide-from-to="true"
                                        data-prefix="$"
                                        data-min="0"
                                        data-max="3456"
                                        data-from="0"
                                        data-to="3456"
                                        data-result-min="#rangeSliderExample3MinResult"
                                        data-result-max="#rangeSliderExample3MaxResult">
                                        <!-- End Range Slider -->
                                        <div class="mt-1 text-gray-111 d-flex mb-4">
                                            <span class="mr-0dot5">Price: </span>
                                            <span>$</span>
                                            <span id="rangeSliderExample3MinResult" class=""></span>
                                            <span class="mx-0dot5"> — </span>
                                            <span>$</span>
                                            <span id="rangeSliderExample3MaxResult" class=""></span>
                                        </div>
                                        <button type="submit" class="btn px-4 btn-primary-dark-w py-2 rounded-lg">Filter</button>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="border-bottom border-color-1 mb-5">
                                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Latest Products</h3>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li class="mb-4">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="single-product-fullwidth.php" class="d-block width-75">
                                                        <img class="img-fluid" src="assets/img/300X300/img1.jpg" alt="Image Description">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="single-product-fullwidth.php">Notebook Black Spire V Nitro VN7-591G</a></h3>
                                                    <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                    <div class="font-weight-bold">
                                                        <del class="font-size-11 text-gray-9 d-block">$2299.00</del>
                                                        <ins class="font-size-15 text-red text-decoration-none d-block">$1999.00</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-4">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="single-product-fullwidth.php" class="d-block width-75">
                                                        <img class="img-fluid" src="assets/img/300X300/img3.jpg" alt="Image Description">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="single-product-fullwidth.php">Notebook Black Spire V Nitro VN7-591G</a></h3>
                                                    <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                    <div class="font-weight-bold font-size-15">
                                                        $499.00
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-4">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="single-product-fullwidth.php" class="d-block width-75">
                                                        <img class="img-fluid" src="assets/img/300X300/img5.jpg" alt="Image Description">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="single-product-fullwidth.php">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                                                    <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                    <div class="font-weight-bold font-size-15">
                                                        $100.00
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-4">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="single-product-fullwidth.php" class="d-block width-75">
                                                        <img class="img-fluid" src="assets/img/300X300/img6.jpg" alt="Image Description">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="single-product-fullwidth.php">Notebook Purple G952VX-T7008T</a></h3>
                                                    <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                    <div class="font-weight-bold">
                                                        <del class="font-size-11 text-gray-9 d-block">$2299.00</del>
                                                        <ins class="font-size-15 text-red text-decoration-none d-block">$1999.00</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-4">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="single-product-fullwidth.php" class="d-block width-75">
                                                        <img class="img-fluid" src="assets/img/300X300/img10.png" alt="Image Description">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="single-product-fullwidth.php">Laptop Yoga 21 80JH0035GE W8.1</a></h3>
                                                    <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                    <div class="font-weight-bold font-size-15">
                                                        $1200.00
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Content -->
                    </div>
                </div>
            </div>
        </aside>
        <!-- End Sidebar Navigation -->

        <!-- Go to Top -->
        <a class="js-go-to u-go-to" href="#"
            data-position='{"bottom": 15, "right": 15 }'
            data-type="fixed"
            data-offset-top="400"
            data-compensation="#header"
            data-show-effect="slideInUp"
            data-hide-effect="slideOutDown">
            <span class="fas fa-arrow-up u-go-to__inner"></span>
        </a>
        <!-- End Go to Top -->

        <!-- JS Global Compulsory -->
        <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
        <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
        <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

        <!-- JS Implementing Plugins -->
        <script src="assets/vendor/appear.js"></script>
        <script src="assets/vendor/jquery.countdown.min.js"></script>
        <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
        <script src="assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
        <script src="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>
        <script src="assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="assets/vendor/typed.js/lib/typed.min.js"></script>
        <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
        <script src="assets/vendor/appear.js"></script>
        <script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

        <!-- JS Electro -->
        <script src="assets/js/hs.core.js"></script>
        <script src="assets/js/components/hs.countdown.js"></script>
        <script src="assets/js/components/hs.header.js"></script>
        <script src="assets/js/components/hs.hamburgers.js"></script>
        <script src="assets/js/components/hs.unfold.js"></script>
        <script src="assets/js/components/hs.focus-state.js"></script>
        <script src="assets/js/components/hs.malihu-scrollbar.js"></script>
        <script src="assets/js/components/hs.validation.js"></script>
        <script src="assets/js/components/hs.fancybox.js"></script>
        <script src="assets/js/components/hs.onscroll-animation.js"></script>
        <script src="assets/js/components/hs.slick-carousel.js"></script>
        <script src="assets/js/components/hs.quantity-counter.js"></script>
        <script src="assets/js/components/hs.range-slider.js"></script>
        <script src="assets/js/components/hs.show-animation.js"></script>
        <script src="assets/js/components/hs.svg-injector.js"></script>
        <script src="assets/js/components/hs.scroll-nav.js"></script>
        <script src="assets/js/components/hs.go-to.js"></script>
        <script src="assets/js/components/hs.selectpicker.js"></script>

        <!-- JS Plugins Init. -->
        <script>
            $(window).on('load', function () {
                // initialization of HSMegaMenu component
                $('.js-mega-menu').HSMegaMenu({
                    event: 'hover',
                    direction: 'horizontal',
                    pageContainer: $('.container'),
                    breakpoint: 767.98,
                    hideTimeOut: 0
                });
            });

            $(document).on('ready', function () {
                // initialization of header
                $.HSCore.components.HSHeader.init($('#header'));

                // initialization of animation
                $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                    afterOpen: function () {
                        $(this).find('input[type="search"]').focus();
                    }
                });

                // initialization of HSScrollNav component
                $.HSCore.components.HSScrollNav.init($('.js-scroll-nav'), {
                  duration: 700
                });

                // initialization of quantity counter
                $.HSCore.components.HSQantityCounter.init('.js-quantity');

                // initialization of popups
                $.HSCore.components.HSFancyBox.init('.js-fancybox');

                // initialization of countdowns
                var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                    yearsElSelector: '.js-cd-years',
                    monthsElSelector: '.js-cd-months',
                    daysElSelector: '.js-cd-days',
                    hoursElSelector: '.js-cd-hours',
                    minutesElSelector: '.js-cd-minutes',
                    secondsElSelector: '.js-cd-seconds'
                });

                // initialization of malihu scrollbar
                $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

                // initialization of forms
                $.HSCore.components.HSFocusState.init();

                // initialization of form validation
                $.HSCore.components.HSValidation.init('.js-validate', {
                    rules: {
                        confirmPassword: {
                            equalTo: '#signupPassword'
                        }
                    }
                });

                // initialization of forms
                $.HSCore.components.HSRangeSlider.init('.js-range-slider');

                // initialization of show animations
                $.HSCore.components.HSShowAnimation.init('.js-animation-link');

                // initialization of fancybox
                $.HSCore.components.HSFancyBox.init('.js-fancybox');

                // initialization of slick carousel
                $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

                // initialization of go to
                $.HSCore.components.HSGoTo.init('.js-go-to');

                // initialization of hamburgers
                $.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                    beforeClose: function () {
                        $('#hamburgerTrigger').removeClass('is-active');
                    },
                    afterClose: function() {
                        $('#headerSidebarList .collapse.show').collapse('hide');
                    }
                });

                $('#headerSidebarList [data-toggle="collapse"]').on('click', function (e) {
                    e.preventDefault();

                    var target = $(this).data('target');

                    if($(this).attr('aria-expanded') === "true") {
                        $(target).collapse('hide');
                    } else {
                        $(target).collapse('show');
                    }
                });

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

                // initialization of select picker
                $.HSCore.components.HSSelectPicker.init('.js-select');
            });
        </script>
    </body>

<!-- Mirrored from transvelo.github.io/electro-html/2.0/html/shop/track-your-order.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Oct 2022 20:45:32 GMT -->
</html>
