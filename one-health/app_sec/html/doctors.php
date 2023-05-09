<?php
    require '../php/check-session.php';
    require '../php/db-handler.php';
    
    if (isset($_POST['publish-submit'])) {

        // Fetch information from the publish form
		$fullname = htmlspecialchars($_POST['fullname'], ENT_QUOTES);
		$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
		$date = htmlspecialchars($_POST['date'], ENT_QUOTES);
        $departement = htmlspecialchars($_POST['departement'], ENT_QUOTES);
		$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
		$message = htmlspecialchars($_POST['message'], ENT_QUOTES);

        $sql = "INSERT INTO marcacoes (fullname, email, date, departement, number, message) VALUES ('".$fullname."', '".$email."', '".$date."', '".$departement."', '".$number."', '".$message."');";
        if(!mysqli_query($conn, $sql)){
            header("Location: index.php?submit=error");
            exit();
        }else{
            header("Location: index.php?submit=success");
            exit();
        }
    }
    
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
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Sobre nós</a>
                        </li>
                        <li class="nav-item active">
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
                        <li class="breadcrumb-item active" aria-current="page">Médicos</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">Os nossos médicos</h1>
            </div>
            <!-- .container -->
        </div>
        <!-- .banner-section -->
    </div>
    <!-- .page-banner -->

    <div class="page-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <div class="row">

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
        <!-- .container -->
    </div>
    <!-- .page-section -->

    <div class="page-section">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Marque a sua consulta</h1>
            <?php
                                // put error messages
                                if (isset($_GET['submit'])) {
                                    switch ($_GET['submit']) {
                                        case 'success':
                                            echo "
                                                <div class=\"alert alert-success alert-dismissible fade show\">
                                                    <i class=\"fas fa-check-circle\"></i> <strong>SUCESSO:</strong> A sua consulta foi marcada com sucesso!
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\">×</span>
                                                    </button>
                                                </div>
                                            ";
                                            break;

                                        case 'error':
                                            echo "
                                                <div class=\"alert alert-danger alert-dismissible fade show\">
                                                    <i class=\"fas fa-times-circle\"></i> <strong>ERRO:</strong> Ocorreu um problema ao tentar marcar a sua consulta!
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\">×</span>
                                                    </button>
                                                </div>
                                            ";
                                            break;
                                    }
                                }
            ?>

            <form method="post" class="main-form">
                <div class="row mt-5 ">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Nome completo">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Endereço de email..">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <input type="date" name="date" id="date" class="form-control">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <select name="departement" id="departement" class="custom-select">
              <option value="general">Clinica geral</option>
              <option value="cardiology">Cardiologia</option>
              <option value="dental">Medicina Dentária</option>
              <option value="neurology">Neurologia</option>
              <option value="orthopaedics">Ortopedia</option>
            </select>
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <input type="text" name="number" id="number" class="form-control" placeholder="Número de telemóvel">
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Insira mensagem.."></textarea>
                    </div>
                </div>

                <button name="publish-submit" type="submit" class="btn btn-primary mt-3 wow zoomIn">Submeta o seu pedido</button>
            </form>
        </div>
    </div>>




    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>
