<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
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
            padding: 5px;
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
            <form action="addCustomerProcess.php" method="POST" class="form">
                <div class="form">
                    <label for="Customer_SSN">Social Security Number: </label>
                    <input datatype="number" name="Customer_SSN" id="Customer_SSN" required>
                </div>
                <div class="form">
                    <label for="Customer_Name">Full Name: </label>
                    <input datatype="text" name="Customer_Name" id="Customer_Name" required>
                </div>
                <div class="form">
                    <label for="Customer_Address">Address: </label>
                    <input datatype="text" name="Customer_Address" id="Customer_Address" required>
                </div>
                <div class="form">
                    <label for="branchid">Branch Code: </label>
                    <input datatype="number" name="branchid" id="branchid" required>
                </div>

                <div class="form">
                    <label for="SSN">Employee ID: </label>
                    <input datatype="number" name="SSN" id="SSN" required>
                </div>

                <div class="form">
                    <label for="AccountNumber">Account Number: </label>
                    <input datatype="number" name="AccountNumber" id="AccountNumber" required>
                </div>
                <div class="form">
                    <label for="InitialBalance">Opening Balance </label>
                    <input datatype="number" name="InitialBalance" id="InitialBalance" required min="500">
                </div>
                <div class="form">
                    <label for="accountType">Account Type:</label>
                    <select name="accountType" id="accountType" required>
                        <option value="1">Checking Account</option>
                        <option value="2">Savings Account</option>
                        <option value="3">Loan Account</option>
                        <option value="4">Money Market Account</option>
                    </select>
                </div>
                <div class="form">
                    <label for="IntrestRate">Intrest Rate </label>
                    <input datatype="number" name="IntrestRate" id="IntrestRate">
                </div>
                <div class="form">
                    <input type="submit" value="submit" name="submit">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>