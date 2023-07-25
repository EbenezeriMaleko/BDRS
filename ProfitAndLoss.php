<!--
// $conn=mysqli_connect('localhost','maleko','msebenze123','Ceben');

// $queryCostPrice="SELECT SUM(cost) AS total_cost FROM purchase1";
// $resultCostPrice=mysqli_query($conn,$queryCostPrice);
// $rowCostPrice=mysqli_fetch_assoc($resultCostPrice);
// $totalCost=$rowCostPrice['total_cost'];

// $querySellingPrice = "SELECT SUM(cost) AS total_selling FROM sales";
// $resultSellingPrice = mysqli_query($conn,$querySellingPrice);
// $rowSellingPrice = mysqli_fetch_assoc($resultSellingPrice);
// $totalSelling = $rowSellingPrice['total_selling'];

// $profit = $totalSelling - $totalCost;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PROFIT AND LOSS TABLE</title>
        <link rel="stylesheet" href="./css/Table.css">
    </head>
    <body>
   
        <div class="profitTable">
            <table>
                <tr>
                    <th>Category</th>
                    <th>Total Amount</th>
                </tr>
                <tr>
                    <td>TotalCost</td>
                    <td><?php echo $totalCost; ?></td>
                </tr>
                <tr>
                    <td>TotalSelling</td>
                    <td><?php echo $totalSelling; ?></td>
                </tr>
                <tr>
                    <td>Profit</td>
                    <td><?php echo $profit; ?></td>
                </tr>
           </table>
        </div>
-->
 <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = mysqli_connect('localhost', 'maleko', 'msebenze123', 'Ceben');

    $queryCostPrice = "SELECT SUM(cost) AS total_cost FROM purchase1";
    $resultCostPrice = mysqli_query($conn, $queryCostPrice);
    $rowCostPrice = mysqli_fetch_assoc($resultCostPrice);
    $totalCost = $rowCostPrice['total_cost'];

    $querySellingPrice = "SELECT SUM(cost) AS total_selling FROM sales";
    $resultSellingPrice = mysqli_query($conn, $querySellingPrice);
    $rowSellingPrice = mysqli_fetch_assoc($resultSellingPrice);
    $totalSelling = $rowSellingPrice['total_selling'];

    $profit = $totalSelling - $totalCost;

    echo $profit;
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFIT AND LOSS TABLE</title>
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
    <div class="profit">
        <p>Click the button below to calculate your profit</p>
        <button id="calculateBtn">CALCULATE PROFIT</button>
        <div id="result"></div>
    </div>

    <script src="./Js/ProfitButton.js"></script>
</body>
<footer>
            <p>Copyright &copy; All rights are reserved</p>
</footer>

</html>