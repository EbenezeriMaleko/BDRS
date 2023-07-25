<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conn=mysqli_connect('localhost','root','','reality');
    $query="SELECT * FROM information WHERE email = '$email' AND password = '$password'";
    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)==1){
        $_SESSION['email'] = $email;
        header('location:./UsersAccount.php');
        exit();
    }else{
        $error = "Invalid email or password";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Fregg</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />


    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <script>
    function validationForm() {
        var email = document.forms["myForm"]["email"].value;
        var password = document.forms["myForm"]["password"].value;
        var confirmPassword = document.forms["myForm"]["ConfirmPassword"].value;

        if (email == "" || password == "" || phoneNumber == "") {
            alert("please fill in all fields");
            return false;
        }
        var emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailFormat.test(email)) {
            alert("please enter valid email");
            return false;
        }
        if (password.length < 8) {
            alert("please enter strong password");
            return false;
        }
    </script>

</head>

<body class="sub_page">
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                    <a class="navbar-brand mr-5" href="index.html">
                        <img src="images/logo.png" alt="">
                        <span>
                            BDRS
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item ">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php"> About </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="service.php"> Service </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="contact.php">Contact us</a>
                                </li>
                            </ul>
                            <form class="form-inline">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->

    </div>


    <div class="body_bg layout_padding">


        <!-- contact section -->

        <section class="contact_section">
            <div class="container">
                <div class="heading_container">
                    <h2>
                        LOGIN
                    </h2>
                </div>
            </div>
            <div class="container contact_bg layout_padding2-top">
                <?php if(isset($error)){ ;?>
                <p><?php echo $error; ?></p>
                <?php } ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact_form ">
                            <form action="" name="myForm" method="post" onsubmit="return validationForm()">
                                <input type="email" name="email" placeholder="Email">
                                <input type="password" name="password" placeholder="password" id="">
                                <button type="submit">LOGIN</button>
                                <p>Dont have an account?</p>
                                <button><a href="./Signup.php">REGISTER</a></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-box">
                            <img src="images/login.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="container-fluid footer_section">
        <p>
            Copyright &copy; 2023 All Rights Reserved By
            <a href="https://html.design/">BDRS management</a>
        </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>