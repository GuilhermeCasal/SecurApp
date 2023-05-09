<?php
    require '../php/check-session.php';
    require '../php/db-handler.php';

    // Check if there was a news comment
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
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Sobre nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="doctors.php">Médicos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contactos</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="login.php?submit=logout">LogOut</a>
                        </li>

                    </ul>
                </div>
                <!-- .navbar-collapse -->
            </div>
            <!-- .container -->
        </nav>
    </header>

    <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/img_index.jpg);">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead"></span>
                <h1 class="display-4">Tudo por si, Tudo pela sua saúde</h1>
                <a href="doctors.php" class="btn btn-primary">Marcar consulta</a>
            </div>
        </div>
    </div>



    <!-- .page-section -->

    <div class="page-section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <h1>Bem vind@ à nossa  <br> clinica</h1>
                    <p class="text-grey mb-4">O principal objetivo da nossa clínica é que saia sempre de cá com os seus problemas resolvidos. Para que este objetivo seja cumprido temos a trabalhar connosco médicos de excelência nas mais diversas áreas</p>
                    <a href="about.php" class="btn btn-primary">Learn More</a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="img-place custom-img-1">
                        <img src="../assets/img/bg-doctor.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .bg-light -->
    </div>
    <!-- .bg-light -->

    <div class="page-section">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp">Os nossos médicos</h1>

            <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
                <div class="item">
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
                <div class="item">
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
                <div class="item">
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
                <div class="item">
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
                <div class="item">
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
            </div>
        </div>
    </div>

    <div class="page-section bg-light">
     
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
    </div>
    <!-- .page-section -->



    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>
    

</body>

</html>
