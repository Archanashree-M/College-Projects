
<?php
include 'new-config.php';
ob_start();
session_start();
/*
$customer_id ='';

if(isset($_SESSION['ecom_website'])){

    $customer_id = $_SESSION['ecom_website']['id'];
}

*/

$_SESSION['ecom_website']['id'] = 2;
if(isset($_POST['submit_btn'])){
        try{
            $date = date('Y-m-d h:i:s a', time());
           
            $statement = $pdo->prepare("INSERT INTO registration(email,password) VALUES (?,?)");
            $result=$statement->execute(array($_POST['email'],$_POST['password']));
                    
                    if($result){
                        
                        $message = '';


                        echo $message;


                        unset($_POST);      
                    }else{
                        $warning="Something went wrong try again...";
                        echo $warning;
                    }  
                }catch(Exception $e){
                    $error=$e;

                          echo $error;


                }   
    }
?>

<!DOCTYPE html>
<html lang="en">
    

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        <!-- Title -->
        <title></title>

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
        <link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
        <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">
        <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
        <link rel="stylesheet" href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

        <!-- CSS Electro Template -->
        <link rel="stylesheet" href="assets/css/theme.css">
    </head>

    <body>

        <!-- ========== HEADER ========== -->
        <header id="header" class="u-header u-header-left-aligned-nav">
            <div class="u-header__section">
                <!-- Topbar -->
                <div class="u-header-topbar py-2 d-none d-xl-block">
                    <div class="container">
                        <div class="d-flex align-items-center">
                            <div class="topbar-left">
                                <a href="#" class="text-gray-110 font-size-13 hover-on-dark">Welcome to Worldwide Electronics Store</a>
                            </div>
                            <div class="topbar-right ml-auto">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                        <a href="contact-v2.html" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i> Store Location</a>
                                    
                </div>
                <!-- End Topbar -->
</li>
                                    
                                    
                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                        <!-- Account Sidebar Toggle Button -->
                                        <a id="sidebarNavToggler" href="javascript:;" role="button" class="u-header-topbar__nav-link"
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
                                            <i class="ec ec-user mr-1"></i> Register <span class="text-gray-50">or</span> Sign in
                                        </a>
                                        <!-- End Account Sidebar Toggle Button -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <!-- Logo-Search-header-icons -->
                <div class="py-2 py-xl-5 bg-primary-down-lg">
                    <div class="container my-0dot5 my-xl-0">
                        <div class="row align-items-center">
                            <!-- Logo-offcanvas-menu -->
                            <div class="col-auto">
                                <!-- Nav -->
                                <nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                                    <!-- Logo -->
                                    <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="index.html" aria-label="Electro">
                                        <svg version="1.1" x="0px" y="0px" width="175.748px" height="42.52px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52" style="margin-bottom: 0;">
                                            <ellipse class="ellipse-bg" fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"></ellipse>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                                C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                                c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                                c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                                c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                                c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                                c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                                c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                                c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                                M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                                c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                                c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                                c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                                c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                                M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                                c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                                c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                                C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                                C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                                c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                                c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                                c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                                C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                                c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                                c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                                c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                                c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                                c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                                c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                                C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                                c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                                c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                                c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                                c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                                c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z">
                                            </path>
                                        </svg>
                                    </a>
                                    <!-- End Logo -->

                                    <!-- Fullscreen Toggle Button -->
                                    <button id="sidebarHeaderInvokerMenu" type="button" class="navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0"
                                        aria-controls="sidebarHeader"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        data-unfold-event="click"
                                        data-unfold-hide-on-scroll="false"
                                        data-unfold-target="#sidebarHeader1"
                                        data-unfold-type="css-animation"
                                        data-unfold-animation-in="fadeInLeft"
                                        data-unfold-animation-out="fadeOutLeft"
                                        data-unfold-duration="500">
                                        <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                            <span class="u-hamburger__inner"></span>
                                        </span>
                                    </button>
                                    <!-- End Fullscreen Toggle Button -->
                                </nav>
                                <!-- End Nav -->

                                <!-- ========== HEADER SIDEBAR ========== -->
                                <aside id="sidebarHeader1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarHeaderInvoker">
                                    <div class="u-sidebar__scroller">
                                        <div class="u-sidebar__container">
                                            <div class="u-header-sidebar__footer-offset">
                                                <!-- Toggle Button -->
                                                <div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-4 bg-white">
                                                    <button type="button" class="close ml-auto"
                                                        aria-controls="sidebarHeader"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                        data-unfold-event="click"
                                                        data-unfold-hide-on-scroll="false"
                                                        data-unfold-target="#sidebarHeader1"
                                                        data-unfold-type="css-animation"
                                                        data-unfold-animation-in="fadeInLeft"
                                                        data-unfold-animation-out="fadeOutLeft"
                                                        data-unfold-duration="500">
                                                        <span aria-hidden="true"><i class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
                                                    </button>
                                                </div>
                                                <!-- End Toggle Button -->

                                                <!-- Content -->
                                                <div class="js-scrollbar u-sidebar__body">
                                                    <div id="headerSidebarContent" class="u-sidebar__content u-header-sidebar__content">
                                                        <!-- Logo -->
                                                        <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center mb-3" href="index.html" aria-label="Electro">
                                                            <svg version="1.1" x="0px" y="0px" width="175.748px" height="42.52px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52" style="margin-bottom: 0;">
                                                                <ellipse class="ellipse-bg" fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"></ellipse>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                                                    C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                                                    c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                                                    c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                                                    c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                                                    c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                                                    c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                                                    c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                                                    c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                                                    M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                                                    c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                                                    c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                                                    c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                                                    c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                                                    M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                                                    c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                                                    c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                                                    C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                                                    C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                                                    c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                                                    c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                                                    c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                                                    C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                                                    c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                                                    c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                                                    c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                                                    c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                                                    c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                                                    c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                                                    C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                                                    c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                                                    c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                                                    c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                                                    c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                                                    c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <!-- End Logo -->

                                                        <!-- List -->
                                                        <ul id="headerSidebarList" class="u-header-collapse__nav">
                                                            <!-- Value of the Day -->
                                                            

                                                            <!-- Computers & Accessories -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarComputersCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarComputersCollapse">
                                                                    Category
                                                                </a>
                                                                

                                                                <div id="headerSidebarComputersCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul class="u-header-collapse__nav-list">
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Computers &amp; Accessories</span></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">All Computers & Accessories</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Laptops, Desktops & Monitors</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Printers & Ink</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Networking & Internet Devices</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Computer Accessories</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Software</a></li>
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Office & Stationery</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Office & Stationery</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Electronics</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Computers & Accessories -->

                                                            <!-- Cameras, Audio & Video -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarCamerasCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarCamerasCollapse">
                                                                    Cameras, Audio & Video
                                                                </a>

                                                                <div id="headerSidebarCamerasCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul class="u-header-collapse__nav-list">
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Cameras & Photography</span></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Lenses</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Camera Accessories</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Security & Surveillance</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Binoculars & Telescopes</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Camcorders</a></li>
                                                                        <li class=""><a class="u-header-collapse__submenu-nav-link" href="#">Software</a></li>
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Audio & Video</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Audio & Video</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Headphones & Speakers</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Electronics</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Cameras, Audio & Video -->

                                                            <!-- Mobiles & Tablets -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarMobilesCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarMobilesCollapse">
                                                                    Mobiles & Tablets
                                                                </a>

                                                                <div id="headerSidebarMobilesCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul class="u-header-collapse__nav-list">
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Mobiles & Tablets</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Mobile Phones</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Smartphones</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Refurbished Mobiles</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Cases & Covers</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Mobile Accessories</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Cases & Covers</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Tablets</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Tablet Accessories</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Electronics</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Mobiles & Tablets -->

                                                            <!-- Movies, Music & Video -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarMoviesCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarMoviesCollapse">
                                                                    Movies, Music & Video
                                                                </a>

                                                                <div id="headerSidebarMoviesCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul class="u-header-collapse__nav-list">
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Movies & TV Shows</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Movies & TV Shows</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All English</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Hindi</a></li>
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Video Games</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">PC Games</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Consoles</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Accessories</a></li>
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Music</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Music</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Indian Classical</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Musical Instruments</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Movies, Music & Video -->

                                                            <!-- TV & Audio -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarTvCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarTvCollapse">
                                                                    TV & Audio
                                                                </a>

                                                                <div id="headerSidebarTvCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul class="u-header-collapse__nav-list">
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Audio & Video</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Audio & Video</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Televisions</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Headphones</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Speakers</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Audio & Video Accessories</a></li>
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Music</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Televisions</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Headphones</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Electro Home Appliances</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End TV & Audio -->

                                                            <!-- Watches & Eyewear -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarWatchesCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarWatchesCollapse">
                                                                    Watches & Eyewear
                                                                </a>

                                                                <div id="headerSidebarWatchesCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul class="u-header-collapse__nav-list">
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Watches</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Watches</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Men's Watches</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Women's Watches</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Premium Watches</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Deals on Watches</a></li>
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Eyewear</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Men's Sunglasses</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Watches & Eyewear -->

                                                            <!-- Car, Motorbike & Industrial -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarCarCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarCarCollapse">
                                                                    Car, Motorbike & Industrial
                                                                </a>

                                                                <div id="headerSidebarCarCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul class="u-header-collapse__nav-list">
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Car & Motorbike</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Cars & Bikes</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Car & Bike Care</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Lubricants</a></li>
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Shop for Bike</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Helmets & Gloves</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Bike Parts</a></li>
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Industrial Supplies</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Industrial Supplies</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Lab & Scientific</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Car, Motorbike & Industrial -->

                                                            <!-- Accessories -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarAccessoriesCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarAccessoriesCollapse">
                                                                    Accessories
                                                                </a>

                                                                <div id="headerSidebarAccessoriesCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul class="u-header-collapse__nav-list">
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Cases</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Chargers</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Headphone Accessories</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Headphone Cases</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Headphones</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">All Industrial Supplies</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="#">Lab & Scientific</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Accessories -->
                                                        </ul>
                                                        <!-- End List -->
                                                    </div>
                                                </div>
                                                <!-- End Content -->
                                            </div>
                                            <!-- Footer -->
                                            <footer id="SVGwaveWithDots" class="svg-preloader u-header-sidebar__footer">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item pr-3">
                                                        <a class="u-header-sidebar__footer-link text-gray-90" href="#">Privacy</a>
                                                    </li>
                                                    <li class="list-inline-item pr-3">
                                                        <a class="u-header-sidebar__footer-link text-gray-90" href="#">Terms</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="u-header-sidebar__footer-link text-gray-90" href="#">
                                                            <i class="fas fa-info-circle"></i>
                                                        </a>
                                                    </li>
                                                </ul>

                                                <!-- SVG Background Shape -->
                                                <div class="position-absolute right-0 bottom-0 left-0 z-index-n1">
                                                    <img class="js-svg-injector" src="https://transvelo.github.io/electro-html/2.0/assets/svg/components/wave-bottom-with-dots.svg" alt="Image Description"
                                                    data-parent="#SVGwaveWithDots">
                                                </div>
                                                <!-- End SVG Background Shape -->
                                            </footer>
                                            <!-- End Footer -->
                                        </div>
                                    </div>
                                </aside>
                                <!-- ========== END HEADER SIDEBAR ========== -->
                            </div>
                            <!-- End Logo-offcanvas-menu -->
                            <!-- Search Bar -->
                            <div class="col d-none d-xl-block">
                                <form class="js-focus-state">
                                    <label class="sr-only" for="searchproduct">Search</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary" name="email" id="searchproduct-item" placeholder="Search for Products" aria-label="Search for Products" aria-describedby="searchProduct1" required>
                                        <div class="input-group-append">
                                            <!-- Select -->
                                            
                                            
                                            <!-- End Select -->
                                            <button class="btn btn-primary height-40 py-2 px-3 rounded-right-pill" type="button" id="searchProduct1">
                                                <span class="ec ec-search font-size-24"></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Search Bar -->
                            <!-- Header Icons -->
                            <div class="col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                                <div class="d-inline-flex">
                                    <ul class="d-flex list-unstyled mb-0 align-items-center">
                                        <!-- Search -->
                                        <li class="col d-xl-none px-2 px-sm-3 position-static">
                                            <a id="searchClassicInvoker" class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary" href="javascript:;" role="button"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                title="Search"
                                                aria-controls="searchClassic"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                                data-unfold-target="#searchClassic"
                                                data-unfold-type="css-animation"
                                                data-unfold-duration="300"
                                                data-unfold-delay="300"
                                                data-unfold-hide-on-scroll="true"
                                                data-unfold-animation-in="slideInUp"
                                                data-unfold-animation-out="fadeOut">
                                                <span class="ec ec-search"></span>
                                            </a>

                                            <!-- Input -->
                                            <div id="searchClassic" class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2" aria-labelledby="searchClassicInvoker">
                                                <form class="js-focus-state input-group px-3">
                                                    <input class="form-control" type="search" placeholder="Search Product">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary px-3" type="button"><i class="font-size-18 ec ec-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- End Input -->
                                        </li>
                                        <!-- End Search -->
                                        <li class="col d-none d-xl-block"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Compare"><i class="font-size-22 ec ec-compare"></i></a></li>
                                        <li class="col d-none d-xl-block"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Favorites"><i class="font-size-22 ec ec-favorites"></i></a></li>
                                        <li class="col d-xl-none px-2 px-sm-3"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/my-account.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="My Account"><i class="font-size-22 ec ec-user"></i></a></li>
                                        <li class="col pr-xl-0 px-2 px-sm-3 d-xl-none">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/cart.html" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
                                                <i class="font-size-22 ec ec-shopping-bag"></i>
                                                
                                                <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3"></span>
                                            </a>
                                        </li>
                                        <li class="col pr-xl-0 px-2 px-sm-3 d-none d-xl-block">
                                            <div id="basicDropdownHoverInvoker" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart"
                                                aria-controls="basicDropdownHover"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                                data-unfold-event="click"
                                                data-unfold-target="#basicDropdownHover"
                                                data-unfold-type="css-animation"
                                                data-unfold-duration="300"
                                                data-unfold-delay="300"
                                                data-unfold-hide-on-scroll="true"
                                                data-unfold-animation-in="slideInUp"
                                                data-unfold-animation-out="fadeOut">
                                                <i class="font-size-22 ec ec-shopping-bag"></i>
                                                
                                                <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3"></span>
                                            </div>
                                            <div id="basicDropdownHover" class="cart-dropdown dropdown-menu dropdown-unfold border-top border-top-primary mt-3 border-width-2 border-left-0 border-right-0 border-bottom-0 left-auto right-0" aria-labelledby="basicDropdownHoverInvoker">
                                                <ul class="list-unstyled px-3 pt-3">
<?php
$customer_id='';

$customer_id = $_SESSION['ecom_website']['id'];

$statements = $pdo->prepare("SELECT tbl_cart.*,products.p_image as pro_image,products.product_name as pro_name,products.actual_price as act_price,products.selling_price as sel_price FROM `tbl_cart` INNER JOIN products ON tbl_cart.product_id=products.id WHERE tbl_cart.customer_id=2 order by tbl_cart.id desc limit 2");


     $results = $statements->execute();
     $query = $statements->fetchAll(PDO::FETCH_ASSOC);
     $totals = $statements->rowCount(); 
$i=1;

?>
<?php foreach($query as $data){
 ?>
                                                    <li class="border-bottom pb-3 mb-3">
                                                        <div class="">
                                                            <ul class="list-unstyled row mx-n2">
                                                                <li class="px-2 col-auto">
                                                                    <img class="img-fluid" src="<?=$data['pro_image']?>" style="width:70px; height:70px;" alt="Image Description">
                                                                </li>
                                                                <li class="px-2 col">
                                                                    <h5 class="text-blue font-size-14 font-weight-bold"><?=$data['pro_name']?></h5>
                                                                    <span class="font-size-14">1 x <?=$data['sel_price']?></span>
                                                                </li>
                                                                <li class="px-2 col-auto">
                                                                    <a href="#" class="text-gray-90"><i class="ec ec-close-remove"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <?php }   ?>

                                                    
                                                </ul>
                                                <div class="flex-center-between px-4 pt-2">
                                                    <a href="cart_page.php" class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5" style="background-color: #fed700; color:black"><center>View cart</center></a>
                                                    
                                                </div>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <!-- End Header Icons -->
                        </div>
                    </div>
                </div>
                <!-- End Logo-Search-header-icons -->

                <!-- Vertical-and-secondary-menu -->
                <div class="d-none d-xl-block container">
                    <div class="row">
                        <!-- Vertical Menu -->
                        <div class="col-md-auto d-none d-xl-block">
                            <div class="max-width-270 min-width-270">
                                <!-- Basics Accordion -->
                                <div id="basicsAccordion">
                                    <!-- Card -->
                                    <div class="card border-0">
                                        <div class="card-header card-collapse border-0" id="basicsHeadingOne">
                                            <button type="button" class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90"
                                                data-toggle="collapse"
                                                data-target="#basicsCollapseOne"
                                                aria-expanded="true"
                                                aria-controls="basicsCollapseOne">
                                                <span class="ml-0 text-gray-90 mr-2">
                                                    <span class="fa fa-list-ul"></span>
                                                </span>
                                                <span class="pl-1 text-gray-90">All Departments</span>
                                            </button>
                                        </div>
                                        <div id="basicsCollapseOne" class="collapse show vertical-menu"
                                            aria-labelledby="basicsHeadingOne"
                                            data-parent="#basicsAccordion">
                                            <div class="card-body p-0">
                                                <nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
                                                    <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                                        <ul class="navbar-nav u-header__navbar-nav">
<?php


$statements = $pdo->prepare("SELECT *  from category where status=1");


     $results = $statements->execute();
     $query = $statements->fetchAll(PDO::FETCH_ASSOC);
     $totals = $statements->rowCount(); 
$i=1;

?>
<?php foreach($query as $data){
 ?>
        
    
                                                            
                                                            <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                                data-event="hover"
                                                                data-animation-in="slideInUp"
                                                                data-animation-out="fadeOut"
                                                                data-position="left">
                                                                <a id="basicMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="shop.php" aria-haspopup="true" aria-expanded="false"><?=$data['category_name']?></a>

                                                             
                                                            </li>
                                                            <?php }   ?>
                                                            
                                                            <!-- End Nav Item MegaMenu-->
                                                            <!-- Nav Item MegaMenu -->
                                                            
                                                            <!-- End Nav Item -->
                                                        </ul>
                                                    </div>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>
                                <!-- End Basics Accordion -->
                            </div>
                        </div>
                        <!-- End Vertical Menu -->
                        <!-- Secondary Menu -->
                        <div class="col">
                            <!-- Nav -->
                            <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
                                <!-- Navigation -->
                                <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                    <ul class="navbar-nav u-header__navbar-nav">
                                        <!-- Home -->
                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                            data-event="click"
                                            data-animation-in="slideInUp"
                                            data-animation-out="fadeOut"
                                            data-position="left">
                                            <a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle text-sale" href="shop.php" aria-haspopup="true" aria-expanded="false">SHOP NOW</a>

                                            
                                        <!-- End Home -->

                                        

                                        <!-- Button -->
                                        <li class="nav-item u-header__nav-last-item">
                                            <p1 class="text-gray-90"  target="_blank">
                                                Free Shipping on Orders above RS.1000/-
                                            </p1>
                                        </li>
                                        <!-- End Button -->
                                    </ul>
                                </div>
                                <!-- End Navigation -->
                            </nav>
                            <!-- End Nav -->
                        </div>
                        <!-- End Secondary Menu -->
                    </div>
                </div>
                <!-- End Vertical-and-secondary-menu -->
            </div>
        </header>
        <!-- ========== END HEADER ========== -->
