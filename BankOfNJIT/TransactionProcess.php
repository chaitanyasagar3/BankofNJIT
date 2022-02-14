<?php
include "dbConnection.php"; // Using database connection file here
if(isset($_POST['submit']))
{
    $fromAccount = $_POST['fromAccount'];
    $toAccount = $_POST['toAccount'];
    $transactionAmount = $_POST['Amount'];
    $transactionType = $_POST['transactionType'];
    /*$insert = mysqli_query($conn,"INSERT INTO bank.transaction (Transaction_Date,From_accountNumber, To_accountNumber,Transaction_amount,Transaction_time,TransactionType) VALUES
        (curdate(),'$fromAccount','$toAccount','$transactionAmount',curtime(),'$transactionType')");
    $insertCredit=mysqli_query($conn,"INSERT INTO bank.transaction (Transaction_Date,From_accountNumber, To_accountNumber,Transaction_amount,Transaction_time,TransactionType) VALUES
        (curdate(),NULL,'$toAccount','$transactionAmount',curtime(),'$transactionType')");
    $insertDebit=mysqli_query($conn,"INSERT INTO bank.transaction (Transaction_Date,From_accountNumber, To_accountNumber,Transaction_amount,Transaction_time,TransactionType) VALUES
        (curdate(),'$fromAccount',NULL,'$transactionAmount',curtime(),'$transactionType')");
    $credit = mysqli_query ($conn,"UPDATE bank.account SET AccountBalance=AccountBalance+'$transactionAmount'  WHERE
       (AccountNumber='$toAccount')");
    $debit = mysqli_query ($conn,"UPDATE bank.account SET AccountBalance=AccountBalance-'$transactionAmount' WHERE
       (AccountNumber='$fromAccount')");
    $dateUpdatefrom = mysqli_query($conn,"UPDATE bank.account SET Date_Accessed=curdate() WHERE AccountNumber='$fromAccount'");
    $dateUpdateto = mysqli_query($conn,"UPDATE bank.account SET Date_Accessed=curdate() WHERE AccountNumber='$toAccount'");
    if($transactionType==1){
        $credit;
        $debit;
        $insert;$dateUpdatefrom;$dateUpdateto;
    }
    if($transactionType==2){
        $credit;
        $insertCredit;$dateUpdatefrom;
    }
    if($transactionType==3){
        $debit;
        $insertDebit;$dateUpdatefrom;
    }
    if ($transactionType==4){
        $credit;
        $insertCredit;$dateUpdateto;
    }
    if($transactionType==5){
        $debit;
        $insertDebit;$dateUpdatefrom;
    }
    if($transactionType==6){
        $credit;
        $insertCredit;$dateUpdateto;
    }*/
switch ($transactionType){
    case 1:
        $insert = mysqli_query($conn,"INSERT INTO bank.transaction (Transaction_Date,From_accountNumber, To_accountNumber,Transaction_amount,Transaction_time,TransactionType) VALUES
        (curdate(),'$fromAccount','$toAccount','$transactionAmount',curtime(),'$transactionType')");
        $credit = mysqli_query ($conn,"UPDATE bank.account SET AccountBalance=AccountBalance+'$transactionAmount'  WHERE
       (AccountNumber='$toAccount')");
        $debit = mysqli_query ($conn,"UPDATE bank.account SET AccountBalance=AccountBalance-'$transactionAmount' WHERE
       (AccountNumber='$fromAccount')");
        $dateUpdateto = mysqli_query($conn,"UPDATE bank.account SET Date_Accessed=curdate() WHERE AccountNumber='$toAccount'");
        $dateUpdatefrom = mysqli_query($conn,"UPDATE bank.account SET Date_Accessed=curdate() WHERE AccountNumber='$fromAccount'");
        break;

    case 2:
        $insertCredit=mysqli_query($conn,"INSERT INTO bank.transaction (Transaction_Date,From_accountNumber, To_accountNumber,Transaction_amount,Transaction_time,TransactionType) VALUES
        (curdate(),NULL,'$toAccount','$transactionAmount',curtime(),'$transactionType')");
        $credit = mysqli_query ($conn,"UPDATE bank.account SET AccountBalance=AccountBalance+'$transactionAmount'  WHERE
       (AccountNumber='$toAccount')");
        $dateUpdatefrom = mysqli_query($conn,"UPDATE bank.account SET Date_Accessed=curdate() WHERE AccountNumber='$fromAccount'");
        break;

    case 5:
    case 3:
        $insertDebit=mysqli_query($conn,"INSERT INTO bank.transaction (Transaction_Date,From_accountNumber, To_accountNumber,Transaction_amount,Transaction_time,TransactionType) VALUES
        (curdate(),'$fromAccount',NULL,'$transactionAmount',curtime(),'$transactionType')");
        $debit = mysqli_query ($conn,"UPDATE bank.account SET AccountBalance=AccountBalance-'$transactionAmount' WHERE
       (AccountNumber='$fromAccount')");
        $dateUpdatefrom = mysqli_query($conn,"UPDATE bank.account SET Date_Accessed=curdate() WHERE AccountNumber='$fromAccount'");
        break;

    case 6:
    case 4:
        $insertCredit=mysqli_query($conn,"INSERT INTO bank.transaction (Transaction_Date,From_accountNumber, To_accountNumber,Transaction_amount,Transaction_time,TransactionType) VALUES
        (curdate(),NULL,'$toAccount','$transactionAmount',curtime(),'$transactionType')");
        $credit = mysqli_query ($conn,"UPDATE bank.account SET AccountBalance=AccountBalance+'$transactionAmount'  WHERE
       (AccountNumber='$toAccount')");
        $dateUpdateto = mysqli_query($conn,"UPDATE bank.account SET Date_Accessed=curdate() WHERE AccountNumber='$toAccount'");
        break;

}
    if(!$insert)
    {
        echo mysqli_error($conn);
    }
    else
    {
        echo "Records added successfully.";
    }

    mysqli_close($conn); // Close connection
}


