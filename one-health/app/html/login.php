<?php
    session_start();

    // set timezone to Lisbon (Portugal)
    date_default_timezone_set("Europe/Lisbon");

    // require database handler page
    require '../php/db-handler.php';

    
    // destroy session if logout
    if (isset($_GET['submit']) && $_GET['submit'] == "logout")
        session_destroy();
    // if already in session then go to dashboard
    else if(isset($_SESSION["userId"])){
        header("Location: index.php");
        exit();
    }   

	if (isset($_POST['login-submit'])) {
		// fetch information from the login form
		$username = trim($_POST['username']);
		$pwd = $_POST['password'];

        // check if username exists
        $sql = "SELECT username FROM users WHERE username='".$username."'";
        $query = mysqli_query($conn, $sql);
        if(!$query) {
            echo "ERROR: Could not execute $sql.<br> " . mysqli_error($conn);
            exit();
        }
        else {
            if (mysqli_num_rows($query) !== 0) {
                $row = mysqli_fetch_assoc($query);
            
                // check if password matches
                $sql = "SELECT username, id, pwd FROM users WHERE username='".$username."' AND pwd='".$pwd."'";
                $query = mysqli_query($conn, $sql);
                if(!$query) {
                    echo "ERROR: Could not execute $sql.<br> " . mysqli_error($conn);
                    exit();
                }
                else {
                    $row = mysqli_fetch_assoc($query);
                    if ($row) {
                        session_start();
        
                        $_SESSION['userId'] = $row['id'];
                        $_SESSION['userUsername'] = $row['username'];
            
                        header("Location: login.php?submit=login");
                        exit();
                    }
                    else {
                        // Password is incorrect
                        header("Location: login.php?submit=pwdinvalid&username=".$username);
                        exit();
                    }
                }
            }
            else {
                // Username not found
                header("Location: login.php?submit=usernameinvalid");
                exit();
            }
        }    
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <!-- Sign up form -->

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/login.jpg" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <?php
                            if (isset($_GET['submit'])) {
                                switch($_GET['submit']) {
                                    case "invalid":
                                        echo "
                                            <div class=\"alert alert-danger alert-dismissible fade show\">
                                                <i class=\"fas fa-times-circle\"></i> <strong>ERRO:</strong> As credenciais introduzidas são inválidas! Por favor tente novamente.
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">×</span>
                                                </button>
                                            </div>
                                        ";
                                        break;
                                    case "lockout":
                                        echo "
                                            <div class=\"alert alert-danger alert-dismissible fade show\">
                                                <i class=\"fas fa-times-circle\"></i> <strong>ERRO:</strong> O limite de tentativas foi atingido! Por favor aguarde 10 minutos até tentar novamente.
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">×</span>
                                                </button>
                                            </div>
                                        ";
                                        break;
                                    case "error":
                                        echo "
                                            <div class=\"alert alert-danger alert-dismissible fade show\">
                                                <i class=\"fas fa-times-circle\"></i> <strong>ERRO:</strong> Ocorreu um problema ao tentar iniciar sessão!
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">×</span>
                                                </button>
                                            </div>
                                        ";
                                        break;
                                    case "logout":
                                        echo "
                                            <div class=\"alert alert-success alert-dismissible fade show\">
                                                <i class=\"fas fa-check-circle\"></i> <strong>SUCESSO:</strong> Sessão terminada com sucesso!
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">×</span>
                                                </button>
                                            </div>
                                        ";
                                        break;
                                    case "login":
                                        echo "
                                            <div class=\"alert alert-success alert-dismissible fade show\">
                                                <i class=\"fas fa-check-circle\"></i> <strong>SUCESSO:</strong> Sessão iniciada com sucesso!
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">×</span>
                                                </button>
                                            </div>
                                        ";
                                        break;
                                }
                            }
                        ?>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input name="username" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input name="password" placeholder="Password" />
                            </div>
                            <script>
                                // add event listener to all show pwd
                                Array.from(document.getElementsByClassName("show-pwd"))
                                    .forEach(eye => {
                                        const input = Array.from(eye.parentElement.children).filter(child => child.tagName=='INPUT')[0];
                                        eye.addEventListener("click", () => {
                                            if (eye.classList.contains("fa-eye")) {
                                                input.type = 'text';
                                                eye.classList.remove("fa-eye");
                                                eye.classList.add("fa-eye-slash");
                                            }
                                            else {
                                                input.type = 'password';
                                                eye.classList.remove("fa-eye-slash");
                                                eye.classList.add("fa-eye");
                                            }
                                        });
                                    });
                            </script>
                            <div class="form-group form-button">
                                <input type="submit" name="login-submit" id="signin" class="form-submit" value="Log in" />
                            <?php
                                // fill in username from url query
                                if (isset($_GET['username'])) echo "<script>Array.from(document.getElementsByTagName('INPUT')).filter(tag => tag.name === 'username')[0].value = '".$_GET['username']."'; </script>";
                            ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
 
</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>