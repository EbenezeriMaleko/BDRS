<?php
$conn = mysqli_connect('localhost','maleko','msebenze123','Ceben');
if(isset($_POST["submit"])){
    $Email=$_POST["email"];
    $Password=$_POST["password"];
    $sql="INSERT INTO registered(email, password) VALUES ('$Email','$Password')";
    if(mysqli_query($conn,$sql)){
        $infor="Your information has been succesfully submitted ";
        header("Location:Login.php");
    }else{
        echo "error created";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up page</title>
    <link rel="stylesheet" href="./css/Home.css">
</head>

<body>
<header>
        <nav>
            <div class="Leftnav">
                <a href="./index.php">BDRS</a>
            </div>
            <div class="Rightnav">
                <a href="#">SERVICE</a>
                <a href="#">CONTACT US</a>
                <a href="./AboutUs.php">ABOUT US</a>
                <a href="./Admin/login.php">ADMIN</a>
            </div>
        </nav>
    </header> 
        <div class="mainbody">
            <div class="form">
                    <?php if(isset($infor)){;?>
                        <p><?php echo $infor;?><p>
                    <?php };?>
                        <form action="" method="post" name="myForm" onsubmit="return myvalidation()">
                            <input type="text" name="FirstName" id="FirstName" placeholder="Firstname">
                            <input type="text" name="SecondName" id="SecondName" placeholder="Last name">
                            <input type="email" name="email" id="Email id" placeholder="Email address">
                            <input type="password" name="password" id="Password" placeholder="Password">
                            <input type="password" name="ConfirmPassword" id="ConfirmPassword"
                                placeholder="Confirm password">
                            <input type="text" name="number" placeholder="Phone number" id="phone">
                            <input type="submit" name="submit" value="SUBMIT">
                        </form>
                </div>
        </div>
        <footer>
        <p>
            Copyright &copy; 2023 All Rights Reserved By
            <a href="#">BDRS management</a>
        </p>
    </footer>
    <script src="./Js/validationForm.js"></script>
</body>

</html>
