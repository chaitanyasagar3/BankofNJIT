<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Customer</title>
    <style>
        .main{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            grid-auto-rows: minmax(100px, auto);
        }
        .banner{
            background-image: url("/Images/image_handler.aspx.jpeg");
            height: 200px;
            width: 1000px;
            grid-column: 1;
        }
        .container{
            grid-row:2;
            width: 800px;
            padding: 50px;
            margin: 20px;
            top: 50%;
            left: 65%;
            -ms-transform: translateY(50%);
            transform: translateY(50%);
        }

        Form.form{
            display: table;
            margin: 40px;
            padding: 10px;
            position:absolute;
            left:29%;
            top: 50%;
        }
        div.form{
            display: table;
        }
        label, input {
            display: table-cell;
            margin-bottom: 10px;
        }
        label {
            padding-right: 10px;
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
        <h1 class="Welcome">Welcome to Bank of NJIT </h1>
<table>
    <tr>
        <div class ="form">
        <td>Social Security Number</td>
        <td>Full Name</td>
        <td>Address</td>
        <td>Branch Id</td>
        <td>Employee SSN</td>
        <td>Action</td>
    </tr>

    <?php
    include_once 'dbConnection.php';
    $result = mysqli_query($conn,"SELECT * FROM Bank.customer");
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        ?>
        <tr class="<?php if(isset($classname)) echo $classname;?>">
            <td><?php echo $row["Customer_SSN"]; ?></td>
            <td><?php echo $row["Customer_Name"]; ?></td>
            <td><?php echo $row["Customer_Address"]; ?></td>
            <td><?php echo $row["branchid"]; ?></td>
            <td><?php echo $row["SSN"]; ?></td>
            <td><a href="deleteCustomerProcess.php?Customer_SSN=<?php echo $row["Customer_SSN"]; ?>">Delete</a></td>
        </tr>
        <?php
        $i++;
    }
    ?>
</table>
</body>
</html>