<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transaction</title>
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
            <form action="TransactionProcess.php" method="POST" class="form">
                <div class="form">
                    <label for="fromAccount">From Account Number: </label>
                    <input type="number" name="fromAccount" id="fromAccount" maxlength="10" >
                </div>
                <div class="form">
                    <label for="toAccount">To Account Number: </label>
                    <input type="number" name="toAccount" id="toAccount" maxlength="10">
                </div>
                <div class="form">
                    <label for="Amount">Amount </label>
                    <input datatype="currency" placeholder="00.00$" name="Amount" id="Amount" required>
                </div>
                <div class="form">
                    <label for="transactionType">Transaction Type:</label>
                    <select name="transactionType" id="transactionType" required>
                        <option value="1">Check Deposit</option>
                        <option value="2">Cash Deposit</option>
                        <option value="3">Cash Withdrawal</option>
                        <option value="4">Loan Repayment</option>
                        <option value="5">Money Market Debit</option>
                        <option value="6">Money Market Credit</option>
                    </select>
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