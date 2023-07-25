<?php
$conn=mysqli_connect('localhost','root','','trade_system');
if(isset($_POST["submit"])){
    $name=$_POST['name'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $date=$_POST['date'];
    $cost=$quantity * $price;
    $sql= "INSERT INTO purchase(name,quantity,price,cost,date) VALUES('$name','$quantity','$price','$cost','$date')";
    mysqli_query($conn,$sql);
}

if(isset($_GET['page'])){
    if($_GET['page']==1){
        $offset = 0;
    }
    if($_GET['page']==2){
        $offset = 10;
    }
    if($_GET['page']==3){
        $offset = 20;
    }
    $sql="SELECT * FROM purchase ORDER BY purchase.date DESC LIMIT 10 OFFSET $offset";
    $result=mysqli_query($conn,$sql);
}else{
    $sql="SELECT * FROM purchase ORDER BY purchase.date DESC LIMIT 10";
    $result=mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../modified-css/Purchase.css">
    <link rel="stylesheet" href="../Admin/Bootstrap/css/bootstrap.min.css">
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
</head>

<body>
    <div>
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
        <div class="container">
            <center>
                <label for="">PURCHASE ENTRY TABLE</label><br><br>
                <form action="PurchaseEntryTable.php" method="post">
                    <input type="text" name="name" id="nam" placeholder="item name" required>
                    <input type="number" name="quantity" id="Quantity" placeholder="item quantity" required>
                    <input type="number" name="price" id="pr" placeholder="price of each item" required>
                    <input type="date" name="date" id="dat" required>
                    <input type="submit" name="submit" value="submit">
                </form>
                <br /><br />
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Cost</th>
                        <th>Date</th>
                    </tr>
                    <?php while($row = mysqli_fetch_array($result)){ ?>
                    <tr>

                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['quantity'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['cost'] ?></td>
                        <td><?php echo $row['date'] ?></td>

                    </tr>
                    <?php }; ?>
                </table>
                <?php 
            $sql="SELECT COUNT(*) FROM purchase";
            $result= mysqli_query($conn,$sql);
            $rs= mysqli_fetch_array($result);
        ?>
                <?php for($i=1;$i<=$rs[0]/10+1;$i++) {?>
                <a href="purchaseTable.php?page=<?php echo $i;?>"><?php echo $i ;?></a>
                <?php };?>
                <br><br>

            </center>
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
    </div>
</body>

</html>