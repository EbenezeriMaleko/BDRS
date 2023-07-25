<?php
$conn=mysqli_connect('localhost','maleko','msebenze123','Ceben');
if(isset($_POST["submit"])){
    $name=$_POST['name'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $date=$_POST['date'];
    $cost=$quantity * $price;
    $sql= "INSERT INTO purchase1(name,price,quantity,cost,date) VALUES('$name','$price','$quantity','$cost','$date')";
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
    $sql="SELECT * FROM purchase1 ORDER BY purchase1.date DESC LIMIT 10 OFFSET $offset";
    $result=mysqli_query($conn,$sql);
}else{
    $sql="SELECT * FROM purchase1 ORDER BY purchase1.date DESC LIMIT 10";
    $result=mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PURCHASE ENTRY TABLE</title>
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
    <div class="purchase">
        <div class="purchform">
            <label for="">PURCHASE ENTRY TABLE</label>
            <form action="purchaseEntryTable.php" method="post">
                <input type="text" name="name" id="nam" placeholder="item name" required>
                <input type="number" name="quantity" id="Quantity" placeholder="item quantity" required>
                <input type="number" name="price" id="pr" placeholder="price of each item" required>
                <input type="date" name="date" id="dat" required>
                <input type="submit" name="submit" value="submit">
            </form>
        </div>
        <div class="table">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Cost</th>
                    <th>Date</th>
                </tr>
                <?php while($row = mysqli_fetch_array($result)){ ?>
                <tr>

                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><?php echo $row['quantity'] ?></td>
                    <td><?php echo $row['cost'] ?></td>
                    <td><?php echo $row['date'] ?></td>

                </tr>
                <?php }; ?>
            </table>
        </div>
        <div class="navbar">
            <?php 
            $sql="SELECT COUNT(*) FROM purchase1";
            $result= mysqli_query($conn,$sql);
            $rs= mysqli_fetch_array($result);
            ?>
            <?php for($i=1;$i<=$rs[0]/10+1;$i++) {?>
            <a href="purchaseEntryTable.php?page=<?php echo $i;?>"><?php echo $i ;?></a>
            <?php };?>
        </div>
    </div>
    <footer>
            <p>Copyright &copy; All rights are reserved</p>
    </footer>
</body>

</html>