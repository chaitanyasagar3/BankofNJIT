<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modify Customer</title>
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
        <div class ="form">
            <form action="modifyCustomerProcess.php" method="POST" class="form">

                <div class="form">
                    <label for="Name">Name: </label>
                    <input datatype="text" name="Customer_Name" id="Name">
                </div>


                <div class="form">
                    <label for="Address">Address: </label>
                    <input datatype="text" name="Customer_Address" id="Address" >
                </div>

                <div class="form">
                    <label for="SSN">SSN: </label>
                    <input datatype="number" name="Customer_SSN" id="SSN">
                </div>

                <div class="form">
                    <label for="branchCode">Branch Code: </label>
                    <input datatype="number" name="branchid" id="branchCode" >
                </div>
                <div class="form">
                    <label for="SSN">Employee SSN </label>
                    <input datatype="number" name="SSN" id="SSN">
                </div>
                <div class="form">
                    <input type="submit" value="modify" name="modify">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>