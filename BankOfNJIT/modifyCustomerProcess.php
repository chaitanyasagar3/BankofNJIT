<?php
include "dbConnection.php"; // Using database connection file here
if(isset($_POST['modify']))
{
    $Customer_SSN = $_POST['Customer_SSN'];
    $Customer_Name = $_POST['Customer_Name'];
    $Customer_Address = $_POST['Customer_Address'];
    $Branch_Id = $_POST['branchid'];
    $SSN = $_POST['SSN'];


    $insert = mysqli_query ($conn,"UPDATE bank.customer SET Customer_Name='$Customer_Name', 
                                 Customer_Address='$Customer_Address', branchid='$Branch_Id', SSN='$SSN' WHERE
       (Customer_SSN='$Customer_SSN')");
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
