<?php
    session_start();

    // require database handler page
    require '../php/db-handler.php';


    // if already in session then go to dashboard
    if(isset($_SESSION["userId"])){
        header("Location: index.php");
        exit();
    }   

	// check if there was a signup submition
	if (isset($_POST['signup-submit'])) {
		// fetch information from the signup form
		$username = trim($_POST['username']);
		$pwd = $_POST['password'];
		$pwdRepeat = $_POST['repeat_pass'];
        $email = $_POST['email'];
		// missmatch passwords handler
		if ($pwd !== $pwdRepeat) {
			header("Location: signup.php?submit=missmatchpwd&username=".$username."&email=".$email);
			exit();
        }
        else {
            // check if username exists
            $sql = "SELECT * FROM users WHERE username=?;";
            $stmt = mysqli_stmt_init($conn);
            // check if the query makes sense
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: signup.php?submit=error");
                exit();
            }
            // check for username taken in the database
            $sql = "SELECT username FROM users WHERE username='".$username."'";
            $query = mysqli_query($conn, $sql);
            if(!$query)
                echo "ERROR: Could not execute $sql.<br> " . mysqli_error($conn);
            else {
                if (mysqli_num_rows($query) !== 0) {
                    header("Location: signup.php?submit=usernametaken&email=".$email);
                    exit();
                }
                else {
                    // check for email taken in the database
                    $sql = "SELECT email FROM users WHERE email='".$email."'";
                    $query = mysqli_query($conn, $sql);
                    if(!$query)
                        echo "ERROR: Could not execute $sql.<br> " . mysqli_error($conn);
                    else {
                        if (mysqli_num_rows($query) !== 0) {
                            header("Location: signup.php?submit=emailtaken&username=".$username);
                            exit();
                        }
                        else {
                            // if not taken, then add it to database
                            $sql = "INSERT INTO users (username, email, pwd) VALUES ('".$username."', '".$email."', '".$pwd."');";
                            if(!mysqli_query($conn, $sql))
                                echo "ERROR: Could not execute $sql.<br> " . mysqli_error($conn);
                            else{
                                header("Location: login.php?username=".$username);
                                exit();
                            }
                        }
                    }
                }
            }
        }
    }

        // mysqli_stmt_close($stmt);
        // mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <?php
                        if (isset($_GET['submit'])) {
                            switch($_GET['submit']) {
                                case "error":
                                    echo "
                                        <div class=\"alert alert-danger alert-dismissible fade show\">
                                            <i class=\"fas fa-times-circle\"></i> <strong>ERRO:</strong> Ocorreu um problema ao tentar criar conta!
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">×</span>
                                            </button>
                                        </div>
                                    ";
                                    break;
                                case "emailtaken":
                                    echo "
                                        <div class=\"alert alert-danger alert-dismissible fade show\">
                                            <i class=\"fas fa-times-circle\"></i> <strong>ERRO:</strong> O email introduzido já está associado a outra conta!
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">×</span>
                                            </button>
                                        </div>
                                    ";
                                    break;
                                case "usernametaken":
                                    echo "
                                        <div class=\"alert alert-danger alert-dismissible fade show\">
                                            <i class=\"fas fa-times-circle\"></i> <strong>ERRO:</strong> O nome de utilizador escolhido já está em uso!
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">×</span>
                                            </button>
                                        </div>
                                    ";
                                    break;
                                case "missmatchpwd":
                                    echo "
                                        <div class=\"alert alert-danger alert-dismissible fade show\">
                                            <i class=\"fas fa-times-circle\"></i> <strong>ERRO:</strong> As palavras-passe introduzidas não são iguais!
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">×</span>
                                            </button>
                                        </div>
                                    ";
                                    break;
                                case "pwdnotvalid":
                                    echo "
                                        <div class=\"alert alert-danger alert-dismissible fade show\">
                                            <i class=\"fas fa-times-circle\"></i> <strong>ERRO:</strong> A palavra-passe introduzida não cumpre os requisitos mínimos (pelo menos 8 caracteres, uma letra maiúscula e um símbolo)!
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">×</span>
                                            </button>
                                        </div>
                                    ";
                                    break;
                            }
                        }
                        ?>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input name="username" id="name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input name="password" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input name="repeat_pass" id="re_pass" placeholder="Repeat your password" />
                            </div>
                            <div class="form-group form-button">
                                <input href="login.php" type="submit" name="signup-submit" id="signup" class="form-submit" value="Register" />
                                <?php
                                // fill in username from url query
                                if (isset($_GET['username'])) echo "<script>Array.from(document.getElementsByTagName('INPUT')).filter(tag => tag.name === 'username')[0].value = '".$_GET['username']."'; </script>";
                                if (isset($_GET['email'])) echo "<script>Array.from(document.getElementsByTagName('INPUT')).filter(tag => tag.name === 'email')[0].value = '".$_GET['email']."'; </script>";
                                ?>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/sigup.jpg" alt="sing up image"></figure>
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