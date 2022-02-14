<?php
include "dbConnection.php"; // Using database connection file here
if(isset($_POST['submit']))
{
    $Customer_SSN = $_POST['Customer_SSN'];
    $Customer_Name = $_POST['Customer_Name'];
    $Customer_Address = $_POST['Customer_Address'];
    $Branch_Id = $_POST['branchid'];
    $SSN = $_POST['SSN'];
    $AccountNumber = $_POST['AccountNumber'];
    $InitialBalance = $_POST['InitialBalance'];
    $accountType = $_POST['accountType'];
    $intrestRate = $_POST['IntrestRate'];
    $monthlyRepayment = ($InitialBalance * $intrestRate * 12)/100;


    $insertCustomer = mysqli_query($conn,"INSERT INTO bank.customer (Customer_SSN, Customer_Name, Customer_Address, branchid, SSN,AccountNumber) VALUES
        ('$Customer_SSN','$Customer_Name','$Customer_Address','$Branch_Id', '$SSN','$AccountNumber')");
    $insertAccount = mysqli_query($conn,"INSERT INTO Bank.account (AccountNumber,AccountBalance,Date_Accessed) VALUES 
        ('$AccountNumber','$InitialBalance',curdate())");


    switch ($accountType) {
        case 1:
            $CheckingAccount = mysqli_query($conn,"INSERT INTO Bank.checking (checkingAccount, Overdraft) VALUES ('$AccountNumber',NULL) ");
            break;
        case 2:
            $savingAccount = mysqli_query($conn,"INSERT INTO Bank.savings (SavingsID, Fixed_InterestRate) VALUES ('$AccountNumber','$intrestRate') ");
            break;
        case 3:
            $loanAccount = mysqli_query($conn,"INSERT INTO Bank.loan (LoanID, Interest_Rate, Monthly_Repayment) VALUES ('$AccountNumber','$intrestRate','$monthlyRepayment')");
            break;
        case 4:
            $mmAccount = mysqli_query($conn,"INSERT INTO Bank.moneymarket (MoneyMarketID, Variable_InterestRate) VALUES ('$AccountNumber','$intrestRate') ");
            break;

    }

    if(!$insertCustomer)
    {
        echo mysqli_error($conn);
    }
    else
    {
        echo "Records added successfully.";
    }

mysqli_close($conn); // Close connection
}


