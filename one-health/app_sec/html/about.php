<?php
    require '../php/check-session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <title>INClinics - Website</title>
    <link rel="stylesheet" href="../assets/css/maicons.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-primary">IN</span>Clinics</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="about.php">Sobre nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="doctors.php">Médicos</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contactos</a>                        
                        </li>
                        <li class="nav-item">
                            <a href="login.php?submit=logout" class="btn btn-primary">LogOut</a>
                        </li>

                    </ul>
                </div>
                <!-- .navbar-collapse -->
            </div>
            <!-- .container -->
        </nav>
    </header>

    <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/img_index.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sobre</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">Sobre nós</h1>
            </div>
            <!-- .container -->
        </div>
        <!-- .banner-section -->
    </div>
    <!-- .page-banner -->

    </div>

    <div class="page-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp">
                    <h1 class="text-center mb-3">Bem vindo à nossa clinica</h1>
                    <div class="text-lg">
                        <p>Na nossa clínica poderá encontrar médicos que o poderão ajudar com os seus porblemas de saúde. Temos profissionais de saúde especializados nas mais diversas áreas, como a neurologia, a cadiologia, a medicina dentária, a ortopedia e até mesmo profissionais de clinica geral</p>
                        <p>Se quiser obter mais informações acerca dos nossos profissionais de saúde poderá preencher o nosso formulário disponibilizado na página de contactos e será contactado por nós com a maior brevidade possivel </p>
                    </div>
                </div>
                <div class="col-lg-10 mt-5">
                    <h1 class="text-center mb-5 wow fadeInUp">Os nossos médicos</h1>
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                            <div class="card-doctor">
                                <div class="header">
                                    <img src="../assets/img/doctors/doctor1.jpg" alt="">
                                </div>
                                <div class="body">
                                    <p class="text-xl mb-0">Dr. José Silva</p>
                                    <span class="text-sm text-grey">Cardiologista</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                            <div class="card-doctor">
                                <div class="header">
                                    <img src="../assets/img/doctors/doctor2.jpg" alt="">
                                </div>
                                <div class="body">
                                    <p class="text-xl mb-0">Dra. Teresa Domingues</p>
                                    <span class="text-sm text-grey">Medicina Dentária</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                            <div class="card-doctor">
                                <div class="header">
                                    <img src="../assets/img/doctors/doctor_1.jpg" alt="">

                                </div>
                                <div class="body">
                                    <p class="text-xl mb-0">Dra. Cristina Jorge</p>
                                    <span class="text-sm text-grey">Clínica geral</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                            <div class="card-doctor">
                                <div class="header">
                                    <img src="../assets/img/doctors/doctor_2.jpg" alt="">

                                </div>
                                <div class="body">
                                    <p class="text-xl mb-0">Dr. Rodrigo Teixeira</p>
                                    <span class="text-sm text-grey">Neurologia</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                            <div class="card-doctor">
                                <div class="header">
                                    <img src="../assets/img/doctors/doctor5.jpg" alt="">

                                </div>
                                <div class="body">
                                    <p class="text-xl mb-0">Dra. Sara Rito</p>
                                    <span class="text-sm text-grey">Ortopedia</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                            <div class="card-doctor">
                                <div class="header">
                                    <img src="../assets/img/doctors/doctor_3.jpg" alt="">

                                </div>
                                <div class="body">
                                    <p class="text-xl mb-0">Dra. Carolina Sampaio</p>
                                    <span class="text-sm text-grey">Clinica geral</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>