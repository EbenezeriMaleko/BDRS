<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["Fullname"];
    $email = $_POST["email"];
    $title =$_POST["subject"];
    $info = $_POST["info"];

    $to = "cebendemalek@gmail.com";
    $subject = "New form submission";
    $message = "Name: $name\nEmail: $email\nTitle: $title\nInformation: $info";
    $additional_headers= "From: $email";

    if(mail($to,$subject,$message,$additional_headers)){
        echo "Thank you, your message has been sent ";
    }else{
    echo "Oops! something went wrong";
    }
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="./css/Table.css">
</head>
<body>
<header>
        <nav>
            <div class="Leftnav">
                <a href="./Dashboard.php">HOME</a>
            </div>
            <div class="Rightnav">
                <a href="./service.php">SERVICE</a>
                <a href="./contactus.php">CONTACT US</a>
                <a href="./AboutUs.php">ABOUT US</a>
                <a href="./Admin/login.php">ADMIN</a>
            </div>
        </nav>
    </header>
    <section>
        <div class="contact">
            <div class="text">
                <h3>LET'S CHAT</h3>
                <p>Tell me about your</p>
                <p>View on</p>
                <span>Our service</span>
                <h4>MOBILE</h4>
                <span>0674367492</span>
            </div>
            <div class="contactForm">
                   <!-- <form method="POST" action="">
                    <input type="text" name="Fullname" id="" placeholder="Full name" class="underline-input" required>
                    <input type="email" name="email" id="" placeholder="Email address" class="underline-input" required>
                    <input type="text" name="subject" id="" placeholder="Subject" class="underline-input" required>
                    <label for="textarea" >Tell us more </label>
                    <textarea name="info" id="" cols="40" rows="9"></textarea>
                    <button type=submit>SUBMIT</button> -->
                </form>
                <button><a href="mailto:cebendemalek@gmail.com">SEND EMAIL</a></button>
            </div>
        </div>
    </section>

</body>
<footer>
            <p>Copyright &copy; All rights are reserved</p>
</footer>

</html>