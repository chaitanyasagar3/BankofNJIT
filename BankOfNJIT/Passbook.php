<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PassBook</title>
    <style>
        .main{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            grid-auto-rows: minmax(100px, auto);
        }
        .banner{
            background-image: url("Images/image_handler.aspx.jpeg");
            height: 200px;
            width: 1000px;
            grid-column: 1;
        }
        .container{
            grid-row:2;
            width: 800px;
            padding: 10px;
            margin: 10px;
            top: 10%;
            left: 65%;

        }

        .passbook{
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            left:10%;
        }
        th {
            background-color: #E4F5D4;
            border: 1px solid black;
        }

        td{
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }
        .form{
         padding: 10px;
        }

        .Welcome{
            text-align:center;
            color:red;
        }
    </style>
</head>
<body>
<div class="main">
    <div class="banner">
    </div>
    <div class="container">
        <h1 class="Welcome">NJIT Account PassBook </h1>
        <div class ="form">
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                Account Number: <input type="text" name="accountNumber" >
                <input type="submit">
            </form>
        </div>
        <table class ="passbook">
            <tr>
                <th>Transaction ID</th>
                <th>Transaction Date</th>
                <th>From Account Number</th>
                <th>To Account Number</th>
                <th>Transaction Amount</th>
                <th>Transaction Time</th>
                <th>Transaction Type</th>
            <tr/>

            <?php
            include "dbConnection.php";
            if(isset($_POST)){
                $accountNumber=$_POST['accountNumber'];
                $sql = "SELECT * FROM Bank.transaction WHERE From_accountNumber LIKE '%$accountNumber%' || To_accountNumber LIKE '%$accountNumber%' ";
                $records = mysqli_query($conn,$sql);
            }
            while($data = mysqli_fetch_array($records)){
                if ($_SERVER['REQUEST_METHOD']=='POST'){

                ?>
            <tr>
                <td><?php echo $data['Transaction_ID']?></td>
                <td><?php echo $data['Transaction_Date']?></td>
                <td><?php echo $data['From_accountNumber']?></td>
                <td><?php echo $data['To_accountNumber']?></td>
                <td><?php echo $data['Transaction_amount']?></td>
                <td><?php echo $data['Transaction_time']?></td>
                <td><?php echo $data['TransactionType']?></td>
            </tr>
            <?php
            }
                else{
                    ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <?php
                }
            }
            ?>
            <?php mysqli_close($conn)?>

        </table>

    </div>
</div>
</body>
</html>