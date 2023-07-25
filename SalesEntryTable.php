<?php 
$conn = mysqli_connect('localhost','maleko','msebenze123','Ceben');
if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $date = $_POST['date'];
    $cost = $quantity * $price;

    $sql = "INSERT INTO sales(name,quantity,price,cost,date) VALUES ('$name','$quantity','$price','$cost','$date')";
    mysqli_query($conn,$sql);
}
if(isset($_GET['page'])){
if(($_GET['page']==1)){
        $offset=0;
    }
   if(($_GET['page']==2)){
     $offset=10;
  }
   if(($_GET['page']==3)){
      $offset=20;
   }
   $sql="SELECT * FROM sales ORDER BY sales.date DESC LIMIT 10 OFFSET $offset";
    $result=mysqli_query($conn,$sql); 
}else{
    $sql= "SELECT * FROM sales ORDER BY sales.date DESC LIMIT 10";
    $result = mysqli_query($conn,$sql);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALES ENTRY TABLE</title>
    <link rel="stylesheet" href="./css/Table.css">
</head>

<body>
       
<header>
        <nav>
            <div class="Leftnav">
                <a href="./Dashboard.php">HOME</a>
            </div>
            <div class="Rightnav">
                <a href="#">SERVICE</a>
                <a href="#">CONTACT US</a>
                <a href="./AboutUs.php">ABOUT US</a>
                <a href="./Admin/login.php">ADMIN</a>
            </div>
        </nav>
        </header>
    <div class="sales">
        <div class="saleform">
            <label for="">SALES ENTRY TABLE</label>
            <form action="SalesEntryTable.php" method="post">
                <input type="text" name="name" id="na" placeholder="name of product" required />
                <input type="number" name="quantity" id="qu" placeholder="number of items" required />
                <input type="number" name="price" id="price" placeholder="price of each item" required />
                <input type="date" name="date" id="date" required />
                <input type="submit" value="submit" name="submit" />
            </form>
        </div>
        <div class="table">

            <table >
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Costs</th>
                    <th>Date</th>
                </tr>
                <?php while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $row['name'] ?> </td>
                    <td><?php echo $row['quantity'] ?> </td>
                    <td><?php echo $row['price'] ?> </td>
                    <td><?php echo $row['cost'] ?> </td>
                    <td><?php echo $row['date'] ?> </td>
                </tr>
                <?php }; ?>
                </table>
        </div>
    </div>
    <footer>
            <p>Copyright &copy; All rights are reserved</p>
    </footer>
</body>

</html>