<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bs5/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/theme.css">
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../icon/css/all.min.css">

    <title>Web.Ku | Home</title>
</head>
<body>

    <!--============================================================================ BG ==============================================================-->
    <img src="../assets/header-bg.svg" class="position-absolute top-0 end-0 d-none d-lg-block">
    <img src="../assets/header.svg" width="55%" class="position-absolute mt-5 top-5 end-0 d-none d-lg-block">
    <img src="../assets/header.svg" width="100%" class="display-header">

    <!--============================================================================ NAVBAR ==========================================================-->
    <nav class="navbar navbar-expand-lg navbar-light mt-1 fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                 <img src="../assets/avatar/logo1.png" alt="Logo" class="brand-image img-circle elevation-3" style="width:60px;" height="60px">
                 <a class="navbar-brand" href="#"><b>AL.Ladzi</b></a>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="nav nav-pills navbar-position">
                  
                </ul>

                <ul class="nav nav-pills">
                      <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="#">Home</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="#porto">Portofolio</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="#about">About</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item me-2">
                        <a href="{{ route('register') }}" class="nav-link btn-custom rounded shadow" id="btn-sign">Come in Here</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--============================================================================1. Heading ==========================================================-->
    <div class="container position-relative">
        <div class="display-space">
            <br><br><br>
        </div>

        <div class="row my-5">

            <div class="col-lg-6">
                <div class="row">
                    <h1 class="bold-1 mt-5 mb-3 h2">Hello People, <br> Welcome to My Personal Website.</h1>
                    <p class="max-width-4x bold-0 text-justify">
                       Hi, My name is Muhammad Ladzi Safroni. This is my personal website. Here I will show something that has been achieved.<br>I hope this website can be useful for those of you who have looked at my website. 
                    </p>
                    <div class="d-flex my-3">
                        <a href="{{ route('register') }}" class="btn btn-blue p-3 ms-3 rounded shadow"><i
                                class="fas fa-layer-group text-white me-1"></i> Come in Here</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <hr class="w-20">
    </div>

    <!--============================================================================2. How it work ==========================================================-->
<br><br>
<section id="profile">
<div class="bg-form">
        <div class="container">
            <br><br>
            <hr class="w-20">
            <br>
            <div class="row justify-content-center" id="profile">
                 <h1 class="h1 text-center text-white bold-0">PROFILE</h1>
                 <h1 class="h3 text-center text-white bold-2 mt-2 mb-5">Content Creator</h1>

                 <div class="col-12 mt-2 mb-2 text-center">
                    <img src="../assets/avatar/profile.jpg" class="img-fluid rounded-circle shadow" alt="" width="150px"> 
                 </div>
                 <div class="col-3"></div>
                 <h3 class="col-6 text-center text-light mt-5">
                     Muhammad Ladzi Safroni
                 </h3>
                 <div class="col-3"></div>

                 <div class="col-4"></div>
                 <div class="col-4 text-center mt-1">
                     <div class="alert alert-dark bg-dark text-center text-light shadow" role="alert">
                         Web Developer | Fresh Graduate
                     </div>
                 </div>
                 <div class="col-4"></div>
                </div>
                <br>
                <hr class="w-20">
            <br><br>
        </div>
    </div>
    </section>
    <!--============================================================================ 3. Clients ==========================================================-->

    <!--============================================================================ 4. Portfolio ==========================================================-->
    <section id="porto">
    <div class="container">
        <br><br>
        <hr class="w-20">
        <br>
        <div class="row justify-content-center" id="porto">
            <h1 class="h1 text-center bold-0">PORTOFOLIO</h1>
            <h1 class="h3 text-center bold-2 mt-2 mb-5">Portfolio Collection</h1>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow rounded">
                    <div class="card-body p-0">
                        <img src="../assets/portfolio/porto1.png" width="100%" class="img">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow rounded">
                    <div class="card-body p-0">
                        <img src="../assets/portfolio/porto2.png" width="100%" class="img">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow rounded">
                    <div class="card-body p-0">
                        <img src="../assets/portfolio/porto3.png" width="100%" class="img">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow rounded">
                    <div class="card-body p-0">
                        <img src="../assets/portfolio/porto4.png" width="100%" class="img">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow rounded">
                    <div class="card-body p-0">
                        <img src="../assets/portfolio/porto5.png" width="100%" class="img">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow rounded">
                    <div class="card-body p-0">
                        <img src="../assets/portfolio/porto6.png" width="100%" class="img">
                    </div>
                </div>
            </div>
            <div class="col-lg-12"><br></div>
        </div>
        <hr class="w-20">
        <br><br>
    </div>
</section>
    <!--============================================================================ 4.1 Modal Popoup Image ==========================================================-->
    <div class="modal fade" role="dialog" id="imgmodal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"></div>
            <img class="img-responsive" src="" id="show-img" width="100%">
        </div>
    </div>

    <!--============================================================================ 5. Email ==========================================================-->
    <section id="about">
    <div class="bg-clients my-2">
        <div class="container">
        <br><br>
        <hr class="w-20">
        <br>
        <div class="row justify-content-center my-4" id="about">
            <h1 class="h1 text-center text-white bold-0">About</h1>
            <h1 class="h3 text-center text-white bold-2 mt-2 mb-5">Website Making</h1>
            <div class="col-lg-4 col-md-4 my-3">
                <h1 class="h4 text-center text-white bold-1">Purpose of Making</h1>
                <br>
                <center>
                    <p class="text-justify text-white max-width-2x">This website was created as a form of collecting midterm exam assignments for framework programming courses. This website was also created as a place for learning and enthusiasm that we must continue to study hard and not stop here.</p>
                </center>
            </div>
            <div class="col-lg-4 col-md-4 my-3">
                <h1 class="h4 text-center text-white bold-1">Targeting</h1>
                <br>
                <center>
                    <p class="text-justify text-white max-width-2x">The next target, I will improve this website as well as possible and according to existing needs.</p>
                </center>
            </div>
            <div class="col-lg-4 col-md-4 my-3">
                <h1 class="h4 text-center text-white bold-1">Result</h1>
                <br>
                <center>
                    <p class="text-justify text-white max-width-2x">The results of making this website, as a learning material and can be a reference that I should study more enthusiastically.</p>
                </center>
            </div>
                <div class="col-lg-12 mt-1s my-5 d-lg-flex d-md-flex justify-content-between">
                    <img src="../assets/sponsor/logo-2.svg" class="mx-2 mb-3">
                    <img src="../assets/sponsor/logo-5.svg" class="mx-2 mb-3">
                    <img src="../assets/sponsor/logo-1.svg" class="mx-2 mb-3">
                    <img src="../assets/sponsor/logo-3.svg" class="mx-2 mb-3">
                    <img src="../assets/sponsor/logo-4.svg" class="mx-2 mb-3">
                </div>
            </div>
            <hr class="w-20">
        <br><br>
        </div>
    </div>
</section>
    <!--============================================================================ 6. Footer ==========================================================-->
<section id="contact">
    <div class="container">
        <br><br>
        <hr class="w-20">
        <br><br>
        <div class="row justify-content-start" id="contact">
            <div class="col-lg-4">
                <div class="row">
                    <h1 class="h4 bold-2"><img src="../assets/avatar/logo1.png" alt="Logo" class="brand-image img-circle elevation-4" style="width:50px;" height="50px"> AL.Ladzi</h1>
                    <p class="max-width-2x my-3">That's a simple website that I made. Hopefully it can be your motivation. There is a proverb "science is not looking for us, we are the ones looking for that knowledge".</p>
                </div>
                <br>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    <h1 class="h6 mb-4">Userful Links</h1>
                    <a href="#" class="link mb-2">Home</a><br>
                    <a href="#" class="link mb-2">Services</a><br>
                    <br>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    <h1 class="h6 mb-4">Need Help?</h1>
                    <a href="#" class="link mb-2">Privacy</a><br>
                    <a href="#" class="link mb-2">Policy</a><br>
                    <a href="#" class="link mb-2">Support</a><br>
                    <a href="#" class="link mb-2">Terms</a><br>
                    <br>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="row">
                    <h1 class="h6 mb-4">Personal</h1>
                    <a href="#" class="link mb-2">Official Blog</a><br>
                    <a href="#about" class="link mb-2">About Us</a><br>
                    <a href="#contact" class="link mb-2">Contact</a><br>
                    <br>
                </div>
            </div>
        </div>
        <br>
        <div class="col-lg-3">
                    <h1 class="h6">Social</h1>
                    <br>
                    <div class="d-flex justify-content-start">
                        <a href="https://www.facebook.com/alladzi.muhammad" class="link"><i class="fab fa-facebook-f color-theme"></i></a>
                        <a href="https://www.twitter.com/ms_alladzi" class="link"><i class="fab fa-twitter ms-5 color-theme"></i></a>
                        <a href="https://www.instagram.com/ms.alladzi/" class="link"><i class="fab fa-instagram ms-5 color-theme"></i></a>
                        <a href="https://www.linkedin.com/in/muhammad-safroni-650a731a5/" class="link"><i class="fab fa-linkedin-in ms-5 color-theme"></i></a>
                    </div>
                </div>
        <br><br><br><br>
    </div>
</section>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center mb-3">
                <span><strong>Copyright &copy; 2021 <a href="#">Sistem Informasi Profile-Ku</a>.</strong> | AL-Ladzi Website All rights reserved</span>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../bs5/dist/js/bootstrap.bundle.js"></script>
    <script src="../jquery/dist/jquery.min.js"></script>
    <script src="../js/onscroll.js"></script>
    <script src="../js/popupimage.js"></script>
</body>
</html>