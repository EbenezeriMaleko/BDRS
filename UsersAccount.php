<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
    <link rel="stylesheet" href="./Admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./modified-css/UserAccount.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-12 d-md block bg-light sidebar kushoto">
                <h5>BDRS SYSTEM</h5>
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./SalesEntryTable.php">Sales Entry Table</a></li>
                    <li><a href="./PurchaseEntryTable.php">Purchase Entry Table</a></li>
                    <li><a href="./ProfitAndLoss.php">Profit And Loss check</a></li>
                    <li><a href="./Feedback.php">Feedback page</a></li>
                </ul>
            </nav>
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

</body>

</html>