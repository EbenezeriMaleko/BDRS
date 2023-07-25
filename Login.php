<?php
$conn=mysqli_connect('localhost','maleko','msebenze123','Ceben');
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST["email"];
    $password=$_POST["password"];

    $query="SELECT * FROM registered WHERE email='$email' AND password='$password'";
    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)==1){
        $_SESSION["email"]=$email;
        header("Location:Dashboard.php");
        exit();
    }else{
        $error="Invalid email or password.Please try again.";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="./Admin/Bootstrap/css/bootstrap.min.css">
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
    <div class="container">
        
        <div class="ModeClass">
            <form class="form-horizontal myform" action="" method="post" name="Forms" onsubmit="return validation()">
            <?php if(isset($error)){ ;?>
                <p><?php echo $error; ?></p>
                <?php } ?>
            
                <div class="form-group formbox">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>
                </div>
                <div class="form-group formbox">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="pwd" name="password"
                            placeholder="Enter password">
                    </div>
                </div>
                <div class="form-group formbox">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                        </div>
                    </div>
                </div>
                <div class="form-group formbox">
                    <div class="col-sm-offset-2 col-sm-10 login">
                        <input type="submit" value="LOGIN">
                        <p>Don't have an account?</p>
                        <button><a href="./signup.php">SIGNUP</a></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
        <footer>
        <p>
            Copyright &copy; 2023 All Rights Reserved By
            <a href="#">BDRS management</a>
        </p>
    </footer>
    <script src="./Js/validation.js"></script>
</body>

</html>