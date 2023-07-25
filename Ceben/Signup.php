<?php
$conn=mysqli_connect('localhost','root','','reality');
if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $sql="INSERT INTO information (email, password) VALUES('$email','$password')";
    mysqli_query($conn,$sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up page</title>
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
    <!-- <link rel="stylesheet" href="./Admin/Boostrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./css/form.css">
</head>

<body>
    <div class="">
        <!-- header section strats -->
        <header class="header_section heading">
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
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center ">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php"> About </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="service.php"> Service </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./AdminLogin.php">Admin</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <div class="container">
            </header>
            <br /><br />
            <div class="mainbody">
                <main>
                    <div class="form">

                        <center>
                            <br /><br />
                            <form action="#" method="post" name="myForm" id="form">
                                <input type="text" name="FirstName" id="FirstName" placeholder="Firstname"><br />
                                <span id="fnameError" style="color:red"></span><br />
                                <input type="text" name="SecondName" id="SecondName" placeholder="Last name"><br />
                                <span id="lnameError" style="color:red"></span><br />
                                <input type="email" name="email" id="Email id" placeholder="Email address"><br />
                                <span id="emailError" style="color:red"></span><br />
                                <input type="password" name="password" id="Password" placeholder="Password"><br />
                                <span id="passwordError" style="color:red"></span><br />
                                <input type="password" name="ConfirmPassword" id="ConfirmPassword"
                                    placeholder="Confirm password"><br />
                                <span id="confirmPasswordError" style="color:red"></span><br />
                                <input type="tel" name="number" placeholder="Phone number" id="phone"><br />
                                <span id="phoneNumberError" style="color:red "></span><br />
                                <input type="submit" id="submit" name="submit" value="SUBMIT">
                            </form>

                        </center>
                    </div>
                </main>
            </div>
            <br /><br />
            <section class="container-fluid footer_section">
                <p>
                    Copyright &copy; 2023 All Rights Reserved By
                    <a href="https://html.design/">BDRS management</a>
                </p>
            </section>
            <!-- footer section -->

            <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <script src="./js/registerFormValidation.js"></script>

</body>

</html>