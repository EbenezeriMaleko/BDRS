<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
    <link rel="stylesheet" href="../Admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../modified-css/UserAccount.css">
    <title>UsersAccount</title>

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

</head>

<body>
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
                            <form class="form-inline">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <div class="row">
            <div class="col-md-12 d-md block bg-light sidebar">
                <ul>
                    <a href="PurchaseTable.php">PurchaseEntryTable </a>
                    <a href="./SalesEntryTable.php">Sales Entry Table</a>
                    <a href="./ProfitAndLoss.php">Profit And Loss check</a>
                </ul>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mainbody">

                <div class="details">
                    <form action="">
                        <input type="text" name="search" id="searchbar" placeholder="Search your history">
                        <button type="submit">Search</button>
                    </form>
                </div>
                <div class="MainCard">
                    <div class="card">
                        <img src="" alt="">
                        <div class="card-body">
                            <h6 class="card title">Purchase history</h6>
                            <p class="card text"><a href="#"> more information</a></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="" alt="">
                        <div class="card-body">
                            <h6 class="card title">Sales history</h6>
                            <p class="card text"><a href="#">more information</a></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="" alt="">
                        <div class="card-body">
                            <h6 class="card title">Profit history</h6>
                            <p class="card text"><a href="#">more information</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="container-fluid footer_section">
        <p>
            Copyright &copy; 2019 All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
        </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>